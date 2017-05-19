    function daftar_prospek_perusahaan($NOMOR_PESERTA){
        $this->db->where('NOMOR_PESERTA', $NOMOR_PESERTA); 
        $this->db->where('KD_JENIS', 'PS'); 
        $baca = $this->db->get('UPLOAD_FILE');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_prospek_perusahaan($nama_file){
        $data = array(
               'NOMOR_PESERTA' => $this->input->post('NOMOR_PESERTA'),
               'KD_DOKUMEN' => $this->input->post('KD_DOKUMEN'),               
               'KD_JENIS' => 'PS',               
               'URL' => $nama_file,               
            );
            //var_dump($data);die;
        $NOMOR_PESERTA = $this->input->post('NOMOR_PESERTA');
        $this->db->insert('UPLOAD_FILE', $data); 
        redirect(base_url('index.php/cprospek/daftar_prospek_perusahaan/'.$NOMOR_PESERTA), 'refresh');   
    }
    
    function delete_prospek_perusahaan($ID,$NOMOR_PESERTA){
        $this->db->where('ID', $ID);        
        $this->db->delete('UPLOAD_FILE'); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_perusahaan/'.$NOMOR_PESERTA), 'refresh');   
    }
    
    function filter_prospek_perusahaan($ID){
        $baca = $this->db->get_where('UPLOAD_FILE',array('ID' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_prospek_perusahaan($nama_file){
        $data = array(
               'NOMOR_PESERTA' => $this->input->post('NOMOR_PESERTA'),
               'KD_DOKUMEN' => $this->input->post('KD_DOKUMEN'),               
               'KD_JENIS' => 'PS',               
               'URL' => $nama_file,               
            );
        $this->db->where('ID', $this->input->post('ID'));        
        $this->db->update('UPLOAD_FILE', $data); 
        $NOMOR_PESERTA = $this->input->post('NOMOR_PESERTA');
        redirect(base_url('index.php/cprospek/daftar_prospek_perusahaan/'.$NOMOR_PESERTA), 'refresh');  
    }