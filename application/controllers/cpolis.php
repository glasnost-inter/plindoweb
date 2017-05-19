<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cpolis extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('userid')) 
        {
            redirect(base_url('index.php'), 'refresh'); 
        }
    }
    public function index()
    {		
    }
    public function daftar_polis()
    {		
        $data['mainjudul']="Polis";
        $data['judul']="Daftar Lowongan Pekerjaan";
        $this->load->model('mpolis');
        $data['hasil'] = $this->mpolis->daftar_polis();
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('polis/daftar_polis',$data);
        $this->load->view('__footer'); 
    }  
    public function entry_polis()
    {		
        $data['mainjudul']="Polis";
        $data['judul']="Entry Karir";            
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('polis/entry_polis',$data);
        $this->load->view('__footer');
    }
    public function simpan_polis()
    {		
        $this->load->model('mpolis');
        $this->mpolis->simpan_polis();           
        redirect(base_url('index.php/Cpolis/daftar_polis'), 'refresh');            
    }
    public function delete_polis($id_polis)
    {		
        $this->load->model('mpolis');
        $this->mpolis->delete_polis($id_polis);                        
        redirect(base_url('index.php/Cpolis/daftar_polis'), 'refresh');    
    }
    public function update_polis($id_polis)
    {		
        $data['mainjudul']="Polis";
        $data['judul']="Update Karir";            
        $this->load->model('mpolis');
        $data['hasil'] = $this->mpolis->filter_polis($id_polis);
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('polis/update_polis',$data);
        $this->load->view('__footer');
    }
    public function simpan_update_polis()
    {		
        $this->load->model('mpolis');
        $this->mpolis->simpan_update_polis();           
        redirect(base_url('index.php/Cpolis/daftar_polis'), 'refresh');            
    }
}