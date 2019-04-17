<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model
{
    private $_table = "produk";

    public $produk_id;
    public $nama;
    public $harga;
    public $jenis;
    public $jumlah;
    public $img;
    public $img2;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'Harga',
            'rules' => 'numeric'],

            ['field' => 'jenis',
            'label' => 'Jenis',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'Jumlah',
            'rules' => 'numeric'],

            ['field' => 'img',
            'label' => 'Img',
            'rules' => 'required'],
            
            ['field' => 'img2',
            'label' => 'Img2',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["produk_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->produk_id = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->img = $post["img"];
        $this->img2 = $post["img2"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->img = $post["img"];
        $this->img2 = $post["img2"];
        $this->db->update($this->_table, $this, array('produk_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("produk_id" => $id));
    }
}
