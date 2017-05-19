<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ccustomer extends CI_Controller {
    
    public function daftar_customer()
    {	
        $this->load->model('mcustomer');
        $data['hasil'] = $this->mcustomer->daftar_customer();
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/customer/main',$data);		
        $this->load->view('index_footer');
    }

    public function entry_customer()
    {		            
        $data['judul']="Entry Prospek Perusahaan";           
        $this->load->model('mcustomer');
        $data['NO_CUSTOMER']=$this->mcustomer->get_no_customer();            
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/customer/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_customer()
    {		
        $this->load->model('mcustomer');
        $this->mcustomer->simpan_customer();        
        redirect(base_url('index.php/cakuntansi/daftar_customer'), 'refresh');            
    }

    public function delete_customer($id_customer)
    {		
        $this->load->model('mcustomer');
        $this->mcustomer->delete_customer($id_customer);                        
    }

    public function update_customer($id_customer)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['ID']=$id_customer; 

        $this->load->model('mcustomer');
        $data['hasil'] = $this->mcustomer->filter_customer($id_customer);

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/customer/update',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_customer()
    {		
        $this->load->model('mcustomer');
        $this->mcustomer->simpan_update_customer();        
                  
    } 

}