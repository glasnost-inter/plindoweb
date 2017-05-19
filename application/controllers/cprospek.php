<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cprospek extends CI_Controller {

    // proses bisnis prospek perusahaan 
    
    public function daftar_prospek_perusahaan()
    {	
        $this->load->model('mprospek');
        $data['hasil'] = $this->mprospek->daftar_prospek_perusahaan();
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_perusahaan/main',$data);		
        $this->load->view('index_footer');
    }

    public function entry_prospek_perusahaan()
    {		            
        $data['judul']="Entry Prospek Perusahaan";            
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_perusahaan/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_prospek_perusahaan()
    {		
        $this->load->model('mprospek');
        $this->mprospek->simpan_prospek_perusahaan();        
        redirect(base_url('index.php/cakuntansi/daftar_prospek_perusahaan'), 'refresh');            
    }

    public function delete_prospek_perusahaan($id_prospek_perusahaan)
    {		
        $this->load->model('mprospek');
        $this->mprospek->delete_prospek_perusahaan($id_prospek_perusahaan);                        
    }

    public function update_prospek_perusahaan($id_prospek_perusahaan)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['ID']=$id_prospek_perusahaan; 

        $this->load->model('mprospek');
        $data['hasil'] = $this->mprospek->filter_prospek_perusahaan($id_prospek_perusahaan);

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_perusahaan/update',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_prospek_perusahaan()
    {		
        $this->load->model('mprospek');
        $this->mprospek->simpan_update_prospek_perusahaan();        
                  
    } 
    
    // proses bisnis prospek simulasi
    
    public function daftar_prospek_simulasi()
    {	
        $this->load->model('mprospek');
        $data['hasil'] = $this->mprospek->daftar_prospek_simulasi();
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_simulasi/main',$data);		
        $this->load->view('index_footer');
    }

    public function entry_prospek_simulasi()
    {		            
        $data['judul']="Entry Prospek Simulasi";            
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_simulasi/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_prospek_simulasi()
    {		
        $this->load->model('mprospek');
        $this->mprospek->simpan_prospek_simulasi();                 
    }

    public function delete_prospek_simulasi($id_prospek_simulasi)
    {		
        $this->load->model('mprospek');
        $this->mprospek->delete_prospek_simulasi($id_prospek_simulasi);                        
    }

    public function update_prospek_simulasi($id_prospek_simulasi)
    {		
        $data['judul']="Update Prospek Perusahaan";            
        $data['ID']=$id_prospek_simulasi; 

        $this->load->model('mprospek');
        $data['hasil'] = $this->mprospek->filter_prospek_simulasi($id_prospek_simulasi);

        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_simulasi/update',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_update_prospek_simulasi()
    {		
        $this->load->model('mprospek');
        $this->mprospek->simpan_update_prospek_simulasi();        
                  
    } 
          
    // proses bisnis peserta prospek
    
    public function daftar_prospek_peserta_perusahaan($ID_PERUSAHAAN)
    {	
            $this->load->model('mprospek');
            $data['hasil'] = $this->mprospek->daftar_prospek_peserta_perusahaan($ID_PERUSAHAAN);
            $data['ID_PERUSAHAAN'] = $ID_PERUSAHAAN;

            $this->load->view('index_top');
            $this->load->view('index_left');
            $this->load->view('operasional/prospek_peserta_perusahaan/main',$data);		
            $this->load->view('index_footer');
    }

    public function entry_prospek_peserta_perusahaan($ID_PERUSAHAAN)
    {		            
        $data['judul']="Entry Peserta Perusahaan";            
        $data['ID_PERUSAHAAN']=$ID_PERUSAHAAN;            
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_peserta_perusahaan/entry',$data);		
        $this->load->view('index_footer');
    }

    public function simpan_prospek_peserta_perusahaan()
    {		
        $this->load->model('mprospek');
        $this->mprospek->simpan_prospek_peserta_perusahaan();                   
    }

    public function delete_prospek_peserta_perusahaan($id_prospek_peserta_perusahaan,$ID_PERUSAHAAN)
    {		
        $this->load->model('mprospek');
        $this->mprospek->delete_prospek_peserta_perusahaan($id_prospek_peserta_perusahaan,$ID_PERUSAHAAN);                                                   
    }
    
    public function delete_all_prospek_peserta_perusahaan($ID_PERUSAHAAN)
    {		
        $this->load->model('mprospek');
        $this->mprospek->delete_all_prospek_peserta_perusahaan($ID_PERUSAHAAN);                                                   
    }    

        
    public function update_prospek_peserta_perusahaan($id_prospek_peserta_perusahaan,$ID_PERUSAHAAN)
        {		

            $data['judul']="Update Peserta Perusahaan";            
            $data['ID_PERUSAHAAN']=$ID_PERUSAHAAN; 
            $data['ID']=$id_prospek_peserta_perusahaan; 

            $this->load->model('mprospek');
            $data['hasil'] = $this->mprospek->filter_prospek_peserta_perusahaan($id_prospek_peserta_perusahaan);

            $this->load->view('index_top');
            $this->load->view('index_left');
            $this->load->view('operasional/prospek_peserta_perusahaan/update',$data);		
            $this->load->view('index_footer');
        }

    public function simpan_update_prospek_peserta_perusahaan()
    {		
        $this->load->model('mprospek');
        $this->mprospek->simpan_update_prospek_peserta_perusahaan();               
    } 

    public function upload_prospek_peserta_perusahaan($ID_PERUSAHAAN)
    {		            
        $data['judul']="Upload Peserta Perusahaan";            
        $data['ID_PERUSAHAAN']=$ID_PERUSAHAAN;            
        $this->load->view('index_top');
        $this->load->view('index_left');
        $this->load->view('operasional/prospek_peserta_perusahaan/upload',$data);		
        $this->load->view('index_footer');
    }
    
    public function do_upload()
    {
        $config['upload_path']          = 'C:/xampp/htdocs/plindo_remaster/images/upload/';
        $config['allowed_types']        = 'txt';
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
                $this->load->model('mprospek');
                $this->mprospek->simpan_update_prospek_peserta_perusahaan($nama_file); 
        }
        else
        {
                $data = array('upload_data' => $this->upload->data());
                $nama_file = $data['upload_data']['file_name'];
                //var_dump($data);die;
                $this->load->model('mprospek');
                $this->mprospek->simpan_upload_prospek_peserta_perusahaan($nama_file);        
        }
    }

    public function hitung_simulasi_prospek_simulasi($ID_SIMULASI)
    {		            
        $this->load->model('mprospek');
        $this->mprospek->hitung_simulasi_prospek_simulasi($ID_SIMULASI);
    }
    
    public function cetak_simulasi($ID_SIMULASI){                                                   
        $this->load->library('fpdf');                                   

        $this->load->model('mprospek');
        $data['hasil_h'] = $this->mprospek->header_cetak_simulasi($ID_SIMULASI);
        $data['hasil'] = $this->mprospek->detail_cetak_simulasi($ID_SIMULASI);
        
        $this->load->view('operasional/prospek_simulasi/cetak_simulasi',$data);
    }
}
