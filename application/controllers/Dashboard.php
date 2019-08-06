<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('M_water');
    }

    public function index(){
        $data = array(
            'data_pel' => $this->M_water->getData('pelanggan')->result()
        );
        $this->load->view('v_pelanggan', $data);
    }

    public function master_water(){
        $data = array(
            'data' => $this->M_water->getData('water_meter')->result(),
        );
        $this->load->view('v_water', $data);
    }

    public function create_water(){
        $nickname = $this->input->post('nickname');
        $name = $this->input->post('name');

        $data = [
            'nickname' => $nickname,
            'name' => $name
        ];
        $this->M_water->createData('water_meter', $data);
        $this->session->set_flashdata('success',
            '<div class="alert alert-success col-md-6">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration:none;">&times;</a>
                <p>Data Berhasil di Tambah</p>
            </div>');
        redirect('Dashboard');
    }

    public function update_water($id){
        $nickname = $this->input->post('nickname');
        $name = $this->input->post('name');

        if($nickname == NULL){
            $data = array(
                'data' => $this->M_water->get_whereData($id, 'water_meter')->result()
            );
            $this->load->view('v_edit_water', $data);
        }else{
            $data = [
                'nickname' => $nickname,
                'name' => $name
            ];
            $this->M_water->updateData('water_meter', $data, $id);
            $this->session->set_flashdata('success',
                '<div class="alert alert-success col-md-6">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration:none;">&times;</a>
                    <p>Data Berhasil di Update</p>
                </div>');
            redirect('Dashboard/master_water');
        }
    }

    public function delete_water($id){
        $this->M_water->deleteData($id, 'water_meter');
        $this->session->set_flashdata('success',
                '<div class="alert alert-success col-md-6">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration:none;">&times;</a>
                    <p>Data Berhasil di Hapus</p>
                </div>');
        redirect('Dashboard/master_water');
    }

    public function update_stat($id){
        $data = $this->M_water->get_whereData($id, 'pelanggan')->result();
        foreach($data as $value){
            $verifikasi = $value->verifikasi;
        }

        if($verifikasi == 1){
            $data_ver = [
                'verifikasi' => 0
            ];
        }else if($verifikasi == 0){
            $data_ver = [
                'verifikasi' => 1
            ];
        }
        
        $this->M_water->updateData('pelanggan', $data_ver, $id);
        $this->session->set_flashdata('success',
                '<div class="alert alert-success col-md-6">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration:none;">&times;</a>
                    <p>Data Berhasil di Update</p>
                </div>');
        redirect('Dashboard');
    }

    public function detail_pelanggan($id){
        $data = array(
            'data' => $this->M_water->get_whereData($id, 'pelanggan')->result()
        );
        $this->load->view('v_detail', $data);
    }
}