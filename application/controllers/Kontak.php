<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("kontak_model");
        $this->load->library('form_validation');
    }

    // public function index()
    // {
    //     $data["kontak"] = $this->kontak_model->getAll();
    //     $this->load->view("shop_all", $data);
    // }

    public function add()
    {
        $kontak = $this->kontak_model;
        $validation = $this->form_validation;
        $validation->set_rules($kontak->rules());

        if ($validation->run()) {
            $kontak->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        // $this->load->view("");
    }
}
