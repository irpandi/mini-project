<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Pelanggan extends REST_Controller {
    public function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('M_pelanggan');
    }

    public function index_get(){
        $id = $this->get('id');
        if ($id == ''){
            $data = $this->M_pelanggan->getData('pelanggan')->result();
        }else{
            $data = $this->M_pelanggan->get_whereData($id, 'pelanggan')->result();
        }
        $this->response($data, 200);
    }

    public function index_post(){
        $config['upload_path'] 	 = './assets/foto/';
        $config['allowed_types'] = 'png|jpg|jpeg|JPEG|PNG|JPG';
        $config['max_size'] 	 = 500;

        $this->load->library('upload', $config);

        $id = $this->post('id');
        $no_pel = $this->post('no_pel');
        $nama = $this->post('nama');
        $alamat = $this->post('alamat');
        $tarif = $this->post('tarif');
        $st_awal = $this->post('st_awal');
        $st_akhir = $this->post('st_akhir');
        $foto = $this->upload->do_upload('foto');
        $cari_data = $this->M_pelanggan->get_whereData($id, 'pelanggan')->row();

        if($foto != NULL){
            if(!$foto){
                $this->response(array('status' => 'fail', 502));
            }else{
                if($cari_data->foto != NULL){
                    unlink('assets/foto/'.$cari_data->foto);
                }

                $file = $this->upload->data();
                $data = [
                    'no_pel' => $no_pel,
                    'nama'  => $nama,
                    'alamat' => $alamat,
                    'tarif' => $tarif,
                    'foto' => $file['file_name'],
                    'st_awal' => $st_awal,
                    'st_akhir' => $st_akhir
                ];
                if($id != NULL){
                    $update = $this->M_pelanggan->updateData($id, 'pelanggan', $data);
                    if($update){
                        $this->response($data, 200);
                    }else{
                        $this->response(array('status' => 'fail', 502));
                    }
                }else{
                    $insert = $this->M_pelanggan->insertData('pelanggan', $data);
                    if($insert){
                        $this->response($data, 200);
                    }else{
                        $this->response(array('status' => 'fail', 502));
                    }   
                }
            }
        }else{
            $data = [
                'no_pel' => $no_pel,
                'nama'  => $nama,
                'alamat' => $alamat,
                'tarif' => $tarif,
                'st_awal' => $st_awal,
                'st_akhir' => $st_akhir
            ];

            if($id != NULL){
                $update = $this->M_pelanggan->updateData($id, 'pelanggan', $data);
                if($update){
                    $this->response($data, 200);
                }else{
                    $this->response(array('status' => 'fail', 502));
                }
            }else{
                $insert = $this->M_pelanggan->insertData('pelanggan', $data);
                if($insert){
                    $this->response($data, 200);
                }else{
                    $this->response(array('status' => 'fail', 502));
                }
            }
        }
    }
}