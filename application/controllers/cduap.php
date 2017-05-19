<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cduap extends CI_Controller {
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
    public function daftar_duap()
    {		
        $data['mainjudul']="DUAP";
        $data['judul']="Daftar Lowongan Pekerjaan";
        $this->load->model('mduap');
        $data['hasil'] = $this->mduap->daftar_duap();
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('duap/daftar_duap',$data);
        $this->load->view('__footer'); 
    }  
    public function entry_duap()
    {		
        $data['mainjudul']="DUAP";
        $data['judul']="Entry Karir";            
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('duap/entry_duap',$data);
        $this->load->view('__footer');
    }
    public function simpan_duap()
    {		
        $this->load->model('mduap');
        $this->mduap->simpan_duap();           
        redirect(base_url('index.php/Cduap/daftar_duap'), 'refresh');            
    }
    public function delete_duap($id_duap)
    {		
        $this->load->model('mduap');
        $this->mduap->delete_duap($id_duap);                        
        redirect(base_url('index.php/Cduap/daftar_duap'), 'refresh');    
    }
    public function update_duap($id_duap)
    {	
        $data['mainjudul']="DUAP";
        $data['judul']="Update Karir";            
        $this->load->model('mduap');
        $data['hasil'] = $this->mduap->filter_duap($id_duap);
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('duap/update_duap',$data);
        $this->load->view('__footer');
    }
    public function simpan_update_duap()
    {		
        $this->load->model('mduap');
        $this->mduap->simpan_update_duap();           
        redirect(base_url('index.php/Cduap/daftar_duap'), 'refresh');            
    }
}