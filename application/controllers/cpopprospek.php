<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpopprospek extends CI_Controller {		
        
        public function get_prospek_perusahaan()
	{                
		$this->load->model('mprospek');
		$data['hasil'] = $this->mprospek->daftar_prospek_perusahaan();
		
		$this->load->view('pop_top');	
                $this->load->view('operasional/prospek_perusahaan/pop_main',$data);		
		$this->load->view('pop_footer');
	}
        
}
