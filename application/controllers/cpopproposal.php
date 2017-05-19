<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpopproposal extends CI_Controller {		
        
    public function get_customer()
    {                
            $this->load->model('mcustomer');
            $data['hasil'] = $this->mcustomer->daftar_customer();

            $this->load->view('pop_top');	
            $this->load->view('new_business/customer/pop_main',$data);		
            $this->load->view('pop_footer');
    }
    
    public function get_jenis_dokumen_proposal()
    {                
            $this->load->model('mproposal');
            $data['hasil'] = $this->mproposal->jenis_dokumen_proposal();

            $this->load->view('pop_top');	
            $this->load->view('new_business/proposal/dokumen/pop_main',$data);		
            $this->load->view('pop_footer');
    }
    
    public function get_kode_tarif()
    {                
            $this->load->model('mproposal');
            $data['hasil'] = $this->mproposal->get_kode_tarif();

            $this->load->view('pop_top');	
            $this->load->view('new_business/proposal/tarif/pop_main',$data);		
            $this->load->view('pop_footer');
    }
        
}
