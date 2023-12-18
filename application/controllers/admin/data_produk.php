<?php

class Data_produk extends CI_Controller{
    public function index()
    {
        $data['produk'] = $this->model_produk->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_produk', $data);
        $this->load->view('templates_admin/footer');
     }

    public function tambah_aksi()
    {
        $nama_prd         =$this->input->post('nama_prd');
        $keterangan       =$this->input->post('keterangan');
        $kategori         =$this->input->post('kategori');
        $harga            =$this->input->post('harga');
        $stok             =$this->input->post('stok');
        $gambar           =$_FILES['gambar']['name'];
        if ($gambar    =''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = './jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal diupload!";
            }else {
                $gambar=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_prd'          => $nama_prd,
            'keterangan'        => $keterangan,
            'kategori'          => $kategori,
            'harga'             => $harga,
            'stok'              => $stok,
            'gambar'            => $gambar
        );

        $this->model_produk->tambah_produk($data, 'tb_produk');
        redirect('admin/data_produk/index');
    }

    public function edit($id)
    {
        $where = array('id_prd' =>$id);
        $data['produk'] = $this->model_produk->edit_produk($where, 'tb_produk')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update(){
        $id              = $this->input->post('$id_prd');
        $nama_prd        = $this->input->post('$nama_prd');
        $keterangan      = $this->input->post('$keterangan');
        $kategori        = $this->input->post('$kategori');
        $harga           = $this->input->post('$harga');
        $stok            = $this->input->post('$stok');

        $data = array(
             'nama_prd'       =>$nama_prd,
             'keterangan'     =>$keterangan,
             'kategori'       =>$kategori,
             'harga'          =>$harga,
             'stok'           =>$stok
         );

        $where = array(
             'id_prd'  =>$id
         );

        $this->model_produk->update_data($where,$data,'tb_produk');
        redirect('admin/data_produk/index');
    }

    public function hapus ($id)
    {
        $where = array('id_prd' => $id);
        $this->model_produk->hapus_data($where, 'tb_produk');
        redirect('admin/data_produk/index');
    }

    public function detail($id_prd)
{
    $data['produk'] = $this->model_produk->detail_prd($id_prd);
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/detail_produk',$data);
    $this->load->view('templates_admin/footer');
}
}

