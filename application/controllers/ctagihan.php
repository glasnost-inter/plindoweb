<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ctagihan extends CI_Controller {
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
    public function daftar_tagihan()
    {		
        $data['mainjudul']="Tagihan";
        $data['judul']="Daftar Lowongan Pekerjaan";
        $this->load->model('mtagihan');
        $data['hasil'] = $this->mtagihan->daftar_tagihan();
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('tagihan/daftar_tagihan',$data);
        $this->load->view('__footer'); 
    }  
    public function entry_tagihan()
    {	
        $data['mainjudul']="Tagihan";
        $data['judul']="Entry Karir";            
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('tagihan/entry_tagihan',$data);
        $this->load->view('__footer');
    }
    public function simpan_tagihan()
    {		
        $this->load->model('mtagihan');
        $this->mtagihan->simpan_tagihan();           
        redirect(base_url('index.php/Ctagihan/daftar_tagihan'), 'refresh');            
    }
    public function delete_tagihan($id_tagihan)
    {		
        $this->load->model('mtagihan');
        $this->mtagihan->delete_tagihan($id_tagihan);                        
        redirect(base_url('index.php/Ctagihan/daftar_tagihan'), 'refresh');    
    }
    public function update_tagihan($id_tagihan)
    {	
        $data['mainjudul']="Tagihan";
        $data['judul']="Update Karir";            
        $this->load->model('mtagihan');
        $data['hasil'] = $this->mtagihan->filter_tagihan($id_tagihan);
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('tagihan/update_tagihan',$data);
        $this->load->view('__footer');
    }
    public function simpan_update_tagihan()
    {		
        $this->load->model('mtagihan');
        $this->mtagihan->simpan_update_tagihan();           
        redirect(base_url('index.php/Ctagihan/daftar_tagihan'), 'refresh');            
    }
}