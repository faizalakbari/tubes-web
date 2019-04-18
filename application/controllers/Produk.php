<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("produk_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["produk"] = $this->produk_model->getAll();
        $this->load->view("shop_all", $data);
    }

    public function add()
    {
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $this->load->library('upload');
            $dataInfo = array();
            $files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);
            for($i=0; $i<$cpt; $i++)
            {           
                $_FILES['userfile']['name']= $files['userfile']['name'][$i];
                $_FILES['userfile']['type']= $files['userfile']['type'][$i];
                $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
                $_FILES['userfile']['error']= $files['userfile']['error'][$i];
                $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'jpeg|jpg|png';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                $this->upload->do_upload();
                $dataInfo[$i] = $this->upload->data();
            }
            $image1 = $dataInfo[0]['file_name'];
            $image2 = $dataInfo[1]['file_name'];
            $produk->save($image1,$image2);
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("input");
    }

    public function edit($id = null)
    {
        // if (!isset($id)) redirect('admin/products');
       
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        if ($validation->run()) {
            $produk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["produk"] = $produk->getById($id);
        if (!$data["produk"]) show_404();
        
        // $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->produk_model->delete($id)) {
            // redirect(site_url('admin/products'));
        }
    }
}
