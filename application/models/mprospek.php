<?php
class mprospek extends CI_Model {
    
    // proses bisnis prospek perusahaan
    
    function daftar_prospek_perusahaan(){
        $baca = $this->db->get('PROSPEK_PERUSAHAAN');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }    
    
    function simpan_prospek_perusahaan(){
        $data = array(
               'NAMA_PERUSAHAAN' => $this->input->post('NAMA_PERUSAHAAN'),
               'TGL_PROSPEK' => $this->input->post('TGL_PROSPEK'),               
               'PIC_PERUSAHAAN' => $this->input->post('PIC_PERUSAHAAN'),               
               'PIC_JS' => $this->input->post('PIC_JS'),                                          
            );
            //var_dump($data);die;
        $this->db->insert('PROSPEK_PERUSAHAAN', $data); 
        redirect(base_url('index.php/cprospek/daftar_prospek_perusahaan'), 'refresh');   
    }
    
    function delete_prospek_perusahaan($ID){
        $this->db->where('ID_PERUSAHAAN', $ID);        
        $this->db->delete('PROSPEK_PERUSAHAAN'); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_perusahaan'), 'refresh');   
    }
    
    function filter_prospek_perusahaan($ID){
        $baca = $this->db->get_where('PROSPEK_PERUSAHAAN',array('ID_PERUSAHAAN' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_prospek_perusahaan(){
        $data = array(
               'NAMA_PERUSAHAAN' => $this->input->post('NAMA_PERUSAHAAN'),
               'TGL_PROSPEK' => $this->input->post('TGL_PROSPEK'),               
               'PIC_PERUSAHAAN' => $this->input->post('PIC_PERUSAHAAN'),               
               'PIC_JS' => $this->input->post('PIC_JS'),                                          
            );
        $this->db->where('ID_PERUSAHAAN', $this->input->post('ID_PERUSAHAAN'));        
        $this->db->update('PROSPEK_PERUSAHAAN', $data); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_perusahaan'), 'refresh');  
    }
    
    // proses bisnis prospek simulasi
    
    function daftar_prospek_simulasi(){
        $baca = $this->db->get('PROSPEK_SIMULASI');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_prospek_simulasi(){
        $data = array(
               'ID_PERUSAHAAN' => $this->input->post('ID_PERUSAHAAN'),
               'PRODUK' => $this->input->post('PRODUK'),               
               'MULAS' => $this->input->post('MULAS'),               
               'SU' => $this->input->post('SU'),                                          
               'ASUMSI_KENAIKAN' => $this->input->post('ASUMSI_KENAIKAN'),                                          
               'CARA_BAYAR' => $this->input->post('CARA_BAYAR'),                                          
               'VALUASI_ASKEM' => $this->input->post('VALUASI_ASKEM'),                                          
            );
            //var_dump($data);die;
        $this->db->insert('PROSPEK_SIMULASI', $data); 
        redirect(base_url('index.php/cprospek/daftar_prospek_simulasi'), 'refresh');   
    }
    
    function delete_prospek_simulasi($ID){
        $this->db->where('ID_SIMULASI', $ID);        
        $this->db->delete('PROSPEK_SIMULASI'); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_simulasi'), 'refresh');   
    }
    
    function filter_prospek_simulasi($ID){
        $baca = $this->db->get_where('PROSPEK_SIMULASI',array('ID_SIMULASI' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_prospek_simulasi(){
        $data = array(
               'ID_PERUSAHAAN' => $this->input->post('ID_PERUSAHAAN'),
               'PRODUK' => $this->input->post('PRODUK'),               
               'MULAS' => $this->input->post('MULAS'),               
               'SU' => $this->input->post('SU'),                                          
               'ASUMSI_KENAIKAN' => $this->input->post('ASUMSI_KENAIKAN'),                                          
               'CARA_BAYAR' => $this->input->post('CARA_BAYAR'),                                          
               'VALUASI_ASKEM' => $this->input->post('VALUASI_ASKEM'),                                          
            );
        $this->db->where('ID_SIMULASI', $this->input->post('ID_SIMULASI'));        
        $this->db->update('PROSPEK_SIMULASI', $data); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_simulasi'), 'refresh');  
    }
    
    
    // proses bisnis peserta perusahaan
    
    function daftar_prospek_peserta_perusahaan($ID_PERUSAHAAN){
        $this->db->where('ID_PERUSAHAAN', $ID_PERUSAHAAN);         
        $baca = $this->db->get('PROSPEK_PESERTA_PERUSAHAAN');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_prospek_peserta_perusahaan(){
        $data = array(
               'ID_PERUSAHAAN' => $this->input->post('ID_PERUSAHAAN'),
               'NIK' => $this->input->post('NIK'),               
               'NAMA' => $this->input->post('NAMA'),               
               'TGL_LAHIR' => $this->input->post('TGL_LAHIR'),               
               'TGL_DINAS' => $this->input->post('TGL_DINAS'),               
               'GAJI' => $this->input->post('GAJI'),                                           
            );
        $ID_PERUSAHAAN = $this->input->post('ID_PERUSAHAAN');
        $this->db->insert('PROSPEK_PESERTA_PERUSAHAAN', $data); 
        redirect(base_url('index.php/cprospek/daftar_prospek_peserta_perusahaan/'.$ID_PERUSAHAAN), 'refresh');   
    }
    
    function simpan_upload_prospek_peserta_perusahaan($nama_file){
        //$namafile = 'pop/upload/text_upload/'.$nama_file;
        $query = '';
        $parm1 =  $this->input->post('ID_PERUSAHAAN');
        $namafile = base_url('/images/upload/'.$nama_file);
	$input = file($namafile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $filedata=array();
        foreach ($input as $line) {
		$filedata = explode("\t",$line);		
		//$query->execute($filedata);
		$query .= "INTO PROSPEK_PESERTA_PERUSAHAAN 
				  (ID_PERUSAHAAN,NIK,NAMA,TGL_LAHIR,TGL_DINAS,GAJI) 
				  VALUES ('$parm1','$filedata[0]','$filedata[1]',to_date('$filedata[2]','dd/mm/yyyy'),to_date('$filedata[3]','dd/mm/yyyy'),'$filedata[4]') ";	
        } 
        $query = 'INSERT ALL '.$query.' SELECT * FROM dual';
        //echo $query;
        //echo '<br><br>';
        //die;
        $this->db->query($query);
        redirect(base_url('index.php/cprospek/daftar_prospek_peserta_perusahaan/'.$parm1), 'refresh');   
    }
    
    function delete_prospek_peserta_perusahaan($ID,$ID_PERUSAHAAN){
        $this->db->where('ID_PESERTA', $ID);        
        $this->db->delete('PROSPEK_PESERTA_PERUSAHAAN'); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_peserta_perusahaan/'.$ID_PERUSAHAAN), 'refresh');   
    }
    
    function delete_all_prospek_peserta_perusahaan($ID_PERUSAHAAN){
        $this->db->where('ID_PERUSAHAAN', $ID_PERUSAHAAN);        
        $this->db->delete('PROSPEK_PESERTA_PERUSAHAAN'); 
        
        redirect(base_url('index.php/cprospek/daftar_prospek_peserta_perusahaan/'.$ID_PERUSAHAAN), 'refresh');   
    }
    
    function filter_prospek_peserta_perusahaan($ID){
        $baca = $this->db->get_where('PROSPEK_PESERTA_PERUSAHAAN',array('ID_PESERTA' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_prospek_peserta_perusahaan(){
        $namafile = 'pop/upload/text_upload/'.$_POST['nama_file'];
	$input = file($namafile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        
        die;
        $data = array(
               'ID_PERUSAHAAN' => $this->input->post('ID_PERUSAHAAN'),
               'NIK' => $this->input->post('NIK'),               
               'NAMA' => $this->input->post('NAMA'),               
               'TGL_LAHIR' => $this->input->post('TGL_LAHIR'),               
               'TGL_DINAS' => $this->input->post('TGL_DINAS'),               
               'GAJI' => $this->input->post('GAJI'),                                           
            );
        $this->db->where('ID_PESERTA', $this->input->post('ID_PESERTA'));        
        $this->db->update('PROSPEK_PESERTA_PERUSAHAAN', $data); 
        $ID_PERUSAHAAN = $this->input->post('ID_PERUSAHAAN');
        redirect(base_url('index.php/cprospek/daftar_prospek_peserta_perusahaan/'.$ID_PERUSAHAAN), 'refresh');  
    }
    
    function hitung_simulasi_prospek_simulasi($ID_SIMULASI){
        $query = '';
        $query = "BEGIN PLADM.GEN_HIT_SIMULASI ( '".$ID_SIMULASI."' ); END;";
        //echo $query;
        //echo '<br><br>';
        //die;
        $this->db->query($query);
        redirect(base_url('index.php/cprospek/daftar_prospek_simulasi'), 'refresh');   
    }
    
    function header_cetak_simulasi($ID_SIMULASI){
        $baca = $this->db->get_where('PROSPEK_SIMULASI',array('ID_SIMULASI' => $ID_SIMULASI));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function detail_cetak_simulasi($ID_SIMULASI){
        $query = '';
        $query = "select b.nik,b.NAMA,b.TGL_LAHIR,b.TGL_DINAS,a.tgl_pensiun,b.GAJI,
                        a.MANFAAT_EXPIRASI,a.MANFAAT_MENINGGAL,a.MANFAAT_CACAT,
                        a.PREMI_POKOK_SKG,a.PREMI_POKOK_BKL,a.PREMI_ASKEM,a.PREMI_CACAT,
                        (SELECT MULAS FROM PROSPEK_SIMULASI WHERE ID_SIMULASI = A.ID_SIMULASI)TGL_MULAS
                  from prospek_simulasi_peserta a,prospek_peserta_perusahaan b
                  where id_simulasi = '".$ID_SIMULASI."'
                  and a.id_perusahaan = b.id_perusahaan
                  and a.id_peserta = b.id_peserta";
        //echo $query;
        //echo '<br><br>';
        //die;
        $baca = $this->db->query($query);
        //redirect(base_url('index.php/cprospek/daftar_prospek_simulasi'), 'refresh');   
        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    
}
?>