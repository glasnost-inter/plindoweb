<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cproposal extends CI_Controller {
    // proses bisnis utama
    
    public function daftar_proposal()
    {	
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->daftar_proposal();
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/main',$data);		
        $this->load->view('index_footer');
    }

    public function entry_proposal()
    {                           
        $data['judul']="Entry Prospek Perusahaan";           
        $this->load->model('mproposal');
        $data['NO_PROPOSAL']=$this->mproposal->get_no_proposal();            
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_proposal()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_proposal();        
        redirect(base_url('index.php/cakuntansi/daftar_proposal'), 'refresh');            
    }

    public function delete_proposal($id_proposal)
    {		
        $this->load->model('mproposal');
        $this->mproposal->delete_proposal($id_proposal);                        
    }

    public function update_proposal($id_proposal)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['ID']=$id_proposal; 

        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->filter_proposal($id_proposal);

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/update',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_proposal()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_update_proposal();        
                  
    } 
    
    // proses bisnis proposal
    
    public function daftar_proposal_dokumen()
    {	
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->daftar_proposal();
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/dokumen/main',$data);		
        $this->load->view('index_footer');
    }
    
    public function daftar_dokumen_proposal($NO_PROPOSAL)
    {	
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->daftar_dokumen_proposal($NO_PROPOSAL);
        $data['NO_PROPOSAL']=$NO_PROPOSAL;  
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/dokumen/main_dokumen',$data);		
        $this->load->view('index_footer');
    }

    public function entry_dokumen_proposal($NO_PROPOSAL)
    {                           
        $data['judul']="Entry Prospek Perusahaan"; 
        $data['NO_PROPOSAL']=$NO_PROPOSAL;  
        $this->load->model('mproposal');          
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/dokumen/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_dokumen_proposal()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_dokumen_proposal();        
        redirect(base_url('index.php/cakuntansi/daftar_dokumen_proposal'), 'refresh');            
    }
    
    public function do_upload()
    {
        $config['upload_path']          = 'C:/xampp/htdocs/plindo_remaster/images/upload/';
        $config['allowed_types']        = 'gif|jpg|png|pdf|txt';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('URL'))
        {
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);die;    
                //$this->load->view('upload_form', $error);
        }
        elseif ($this->input->post('ID'))
        {
                $data = array('upload_data' => $this->upload->data());
                $nama_file = $data['upload_data']['file_name'];
                //var_dump($data);die;
                $this->load->model('mproposal');
                $this->mproposal->simpan_update_dokumen_proposal($nama_file); 
        }
        elseif ($this->input->post('KD_TARIF'))
        {
            $data = array('upload_data' => $this->upload->data());
            $nama_file = $data['upload_data']['file_name'];

            $this->load->model('mproposal');
            $this->mproposal->simpan_update_tarif($nama_file);        
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $nama_file = $data['upload_data']['file_name'];
                //var_dump($data);die;
                $this->load->model('mproposal');
                $this->mproposal->simpan_dokumen_proposal($nama_file);        
        }
    }

    public function delete_dokumen_proposal($id_dokumen_proposal,$NO_PROPOSAL)
    {		
        $this->load->model('mproposal');
        $this->mproposal->delete_dokumen_proposal($id_dokumen_proposal,$NO_PROPOSAL);                        
    }

    public function update_dokumen_proposal($id_dokumen_proposal,$NO_PROPOSAL)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['ID']=$id_dokumen_proposal; 
        $data['NO_PROPOSAL']=$NO_PROPOSAL; 

        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->filter_dokumen_proposal($id_dokumen_proposal);

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/dokumen/update',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_dokumen_proposal()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_update_dokumen_proposal();        
                  
    } 
    
    // proses bisnis tarif
    
    public function daftar_proposal_tarif()
    {	
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->daftar_proposal();
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/tarif/main',$data);		
        $this->load->view('index_footer');
    }
    
    public function daftar_tarif_proposal($NO_PROPOSAL)
    {	
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->daftar_tarif_proposal($NO_PROPOSAL);
        $data['NO_PROPOSAL']=$NO_PROPOSAL;  
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/tarif/main_tarif',$data);		
        $this->load->view('index_footer');
    }
    
    public function clone_proposal_tarif($NO_PROPOSAL)
    {		
        $this->load->model('mproposal');
        $this->mproposal->clone_proposal_tarif($NO_PROPOSAL);                 
    }
    
    public function view_proposal_tarif($NO_PROPOSAL,$JENIS,$KODE_TARIF)
    {		
        $data['judul']="Update Prospek Perusahaan";                    

        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->filter_tarif_proposal($NO_PROPOSAL,$JENIS,$KODE_TARIF);

        $this->load->view('pop_top');
        if($JENIS=='PREMI'){
             $this->load->view('new_business/proposal/tarif/view_premi',$data);		
        }
        elseif($JENIS=='TEBUS'){
             $this->load->view('new_business/proposal/tarif/view_tebus',$data);		
        }
        elseif($JENIS=='DIPERCEPAT'){
             $this->load->view('new_business/proposal/tarif/view_dipercepat',$data);		
        }
        elseif($JENIS=='PESANGON'){
             $this->load->view('new_business/proposal/tarif/view_pesangon',$data);		
        }           
        $this->load->view('pop_footer');
    }

    public function simpan_proposal_tarif()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_tarif();        
        redirect(base_url('index.php/cakuntansi/daftar_tarif'), 'refresh');            
    }
    
    public function delete_proposal_tarif($id_tarif,$NO_PROPOSAL)
    {		
        $this->load->model('mproposal');
        $this->mproposal->delete_tarif($id_tarif,$NO_PROPOSAL);                        
    }

    public function update_proposal_tarif($NO_PROPOSAL,$JENIS_TARIF,$KD_TARIF)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['JENIS_TARIF']=$JENIS_TARIF; 
        $data['KD_TARIF']=$KD_TARIF; 
        $data['NO_PROPOSAL']=$NO_PROPOSAL; 

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/tarif/update',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_tarif_proposal()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_update_tarif_proposal();        
                  
    } 
    
    public function daftar_kode_tarif()
    {                
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->get_kode_tarif();

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/tarif/main_kode',$data);		
        $this->load->view('index_footer');
    }
    
    public function entry_tarif()
    {                           
        $data['judul']="Entry Prospek Perusahaan"; 
        //$data['NO_PROPOSAL']=$NO_PROPOSAL;  
        $this->load->model('mproposal');          
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/tarif/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_tarif()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_tarif();                       
    }
    
    public function delete_tarif($id_dokumen_proposal,$NO_PROPOSAL)
    {		
        $this->load->model('mproposal');
        $this->mproposal->delete_tarif($id_dokumen_proposal,$NO_PROPOSAL);                        
    }

    public function update_tarif($KD_TARIF,$JENIS)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['KD_TARIF']=$KD_TARIF; 
        $data['JENIS']=$JENIS; 
        
        $this->load->model('mproposal');
        $data['hasil'] = $this->mproposal->filter_tarif($KD_TARIF);
        $data['hasil2'] = $this->mproposal->filter_kode_tarif($KD_TARIF,$JENIS);
        
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('new_business/proposal/tarif/update_kode',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_tarif()
    {		
        $this->load->model('mproposal');
        $this->mproposal->simpan_update_tarif();        
                  
    }
    
    public function delete_all_detail_tarif($KD_TARIF,$JENIS)
    {		
        $this->load->model('mproposal');
        $this->mproposal->delete_all_detail_tarif($KD_TARIF,$JENIS);                        
    }
}