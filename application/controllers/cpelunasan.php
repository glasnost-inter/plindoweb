<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cpelunasan extends CI_Controller {
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
    public function daftar_pelunasan()
    {		
        $data['mainjudul']="Pelunasan";
        $data['judul']="Daftar Lowongan Pekerjaan";
        $this->load->model('mpelunasan');
        $data['hasil'] = $this->mpelunasan->daftar_pelunasan();
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('pelunasan/daftar_pelunasan',$data);
        $this->load->view('__footer'); 
    }  
    public function entry_pelunasan()
    {		
        $data['mainjudul']="Pelunasan";
        $data['judul']="Entry Karir";            
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('pelunasan/entry_pelunasan',$data);
        $this->load->view('__footer');
    }
    public function simpan_pelunasan()
    {		
        $this->load->model('mpelunasan');
        $this->mpelunasan->simpan_pelunasan();           
        redirect(base_url('index.php/Cpelunasan/daftar_pelunasan'), 'refresh');            
    }
    public function delete_pelunasan($id_pelunasan)
    {		
        $this->load->model('mpelunasan');
        $this->mpelunasan->delete_pelunasan($id_pelunasan);                        
        redirect(base_url('index.php/Cpelunasan/daftar_pelunasan'), 'refresh');    
    }
    public function update_pelunasan($id_pelunasan)
    {		
        $data['mainjudul']="Pelunasan";
        $data['judul']="Update Karir";            
        $this->load->model('mpelunasan');
        $data['hasil'] = $this->mpelunasan->filter_pelunasan($id_pelunasan);
        $this->load->view('__header');
        $this->load->view('__navigation');
        $this->load->view('pelunasan/update_pelunasan',$data);
        $this->load->view('__footer');
    }
    public function simpan_update_pelunasan()
    {		
        $this->load->model('mpelunasan');
        $this->mpelunasan->simpan_update_pelunasan();           
        redirect(base_url('index.php/Cpelunasan/daftar_pelunasan'), 'refresh');            
    }
}