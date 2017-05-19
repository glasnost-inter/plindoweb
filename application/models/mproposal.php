<?php
class Mproposal extends CI_Model {
    
    // proses bisnis utama
    
    function daftar_proposal(){
        $baca = $this->db->get('PROPOSAL');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }    
    
    function get_no_proposal(){
        $query = '';
        $query = "select lpad(NO_PROP_SEQ.nextval,10,'0') no_proposal from dual";
        $baca = $this->db->query($query);
        
        if($baca->num_rows() > 0){
            $row = $baca->row_array();
            $nomor_grup = $row['NO_PROPOSAL'];

            return $nomor_grup;
        }
    }
    
    function simpan_proposal(){
        $data = array(
               'KD_KANTOR' => $this->input->post('KD_KANTOR'),
               'NO_PROPOSAL' => $this->input->post('NO_PROPOSAL'),
               'NO_CUSTOMER' => $this->input->post('NO_CUSTOMER'),               
               'TERTANGGUNG' => $this->input->post('TERTANGGUNG'),               
               'PEMEGANG_POLIS' => $this->input->post('PEMEGANG_POLIS'),              
               'PEMBAYAR_PREMI' => $this->input->post('PEMBAYAR_PREMI'),              
               'TGL_MULAI' => $this->input->post('TGL_MULAI'),              
               'TGL_SPAJK' => $this->input->post('TGL_SPAJK'),              
               'KD_VALUTA' => $this->input->post('KD_VALUTA'),              
               'KD_FREKUENSI_BAYAR' => $this->input->post('KD_FREKUENSI_BAYAR'),              
               'KD_FREKUENSI_BAYAR_BS' => $this->input->post('KD_FREKUENSI_BAYAR_BS'),              
               'SU' => $this->input->post('SU'),              
               'JENIS_PRODUK' => $this->input->post('JENIS_PRODUK'),              
               'ANUITAS_LANJUT' => $this->input->post('ANUITAS_LANJUT'),                                      
               'METODE_BAYAR' => '1',                                      
            );
            //var_dump($data);die;
        $this->db->insert('PROPOSAL', $data); 
        redirect(base_url('index.php/cproposal/daftar_proposal'), 'refresh');   
    }
    
    function delete_proposal($ID){
        $this->db->where('NO_PROPOSAL', $ID);        
        $this->db->delete('PROPOSAL'); 
        
        redirect(base_url('index.php/cproposal/daftar_proposal'), 'refresh');   
    }
    
    function filter_proposal($ID){
        $baca = $this->db->get_where('PROPOSAL',array('NO_PROPOSAL' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_proposal(){
        $data = array(
               'KD_KANTOR' => $this->input->post('KD_KANTOR'),
               'NO_CUSTOMER' => $this->input->post('NO_CUSTOMER'),               
               'TERTANGGUNG' => $this->input->post('TERTANGGUNG'),               
               'PEMEGANG_POLIS' => $this->input->post('PEMEGANG_POLIS'),              
               'PEMBAYAR_PREMI' => $this->input->post('PEMBAYAR_PREMI'),              
               'TGL_MULAI' => $this->input->post('TGL_MULAI'),              
               'TGL_SPAJK' => $this->input->post('TGL_SPAJK'),              
               'KD_VALUTA' => $this->input->post('KD_VALUTA'),              
               'KD_FREKUENSI_BAYAR' => $this->input->post('KD_FREKUENSI_BAYAR'),              
               'KD_FREKUENSI_BAYAR_BS' => $this->input->post('KD_FREKUENSI_BAYAR_BS'),              
               'SU' => $this->input->post('SU'),              
               'JENIS_PRODUK' => $this->input->post('JENIS_PRODUK'),              
               'ANUITAS_LANJUT' => $this->input->post('ANUITAS_LANJUT'),                                      
               'METODE_BAYAR' => '1',                                              
            );
            //var_dump($data);die;
        $this->db->where('NO_PROPOSAL', $this->input->post('NO_PROPOSAL'));        
        $this->db->update('PROPOSAL', $data); 
        
        redirect(base_url('index.php/cproposal/daftar_proposal'), 'refresh');  
    }
    
    // proses bisnis dokumen dokumen_proposal            
    
    function jenis_dokumen_proposal(){
        $baca = $this->db->get_where('JENIS_DOKUMEN',array('FLOW' => 'O','JENIS'=>'P'));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function daftar_dokumen_proposal($ID){
        $baca = $this->db->get_where('UPLOAD_FILE',array('NO_PROPOSAL_WEB' => $ID));        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_dokumen_proposal($nama_file){
        $data = array(               
               'NO_PROPOSAL_WEB' => $this->input->post('NO_PROPOSAL_WEB'),
               'KD_DOKUMEN' => $this->input->post('KD_DOKUMEN'),               
               'NAMA_DOKUMEN' => $this->input->post('NAMA_DOKUMEN'),               
               'URL' => $nama_file,                          
            );
        $NO_PROPOSAL_WEB = $this->input->post('NO_PROPOSAL_WEB');
            //var_dump($data);die;
        $this->db->insert('UPLOAD_FILE', $data); 
        redirect(base_url('index.php/cproposal/daftar_dokumen_proposal/'.$NO_PROPOSAL_WEB), 'refresh');   
    }
    
    function delete_dokumen_proposal($ID,$NO_PROPOSAL){
        $this->db->where('ID', $ID);        
        $this->db->delete('UPLOAD_FILE'); 
        
        redirect(base_url('index.php/cproposal/daftar_dokumen_proposal/'.$NO_PROPOSAL), 'refresh');   
    }
    
    function filter_dokumen_proposal($ID){
        $baca = $this->db->get_where('UPLOAD_FILE',array('ID' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_dokumen_proposal($nama_file){
        $data = array(
               'NO_PROPOSAL_WEB' => $this->input->post('NO_PROPOSAL_WEB'),
               'KD_DOKUMEN' => $this->input->post('KD_DOKUMEN'),               
               'NAMA_DOKUMEN' => $this->input->post('NAMA_DOKUMEN'),               
               'URL' => $nama_file,                                              
            );
        $this->db->where('ID', $this->input->post('ID'));        
        $this->db->update('UPLOAD_FILE', $data); 
        $NO_PROPOSAL_WEB = $this->input->post('NO_PROPOSAL_WEB');
        redirect(base_url('index.php/cproposal/daftar_dokumen_proposal/'.$NO_PROPOSAL_WEB), 'refresh');  
    }
    
    // proses bisnis tarif proposal
    
    function daftar_tarif_proposal($ID){
        $baca = $this->db->get_where('PROPOSAL_BASIS',array('NO_PROPOSAL' => $ID));        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function get_kode_tarif(){
        $baca = $this->db->get('TARIF');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function clone_proposal_tarif($NO_PROPOSAL){
        $query = '';
        $query = "BEGIN PLADM.clone_tarif_proposal ( '".$NO_PROPOSAL."' ); END;";        
        $this->db->query($query);
        redirect(base_url('index.php/cproposal/daftar_tarif_proposal/'.$NO_PROPOSAL), 'refresh');   
    }
    
    function simpan_tarif_proposal($nama_file){
        $data = array(               
               'NO_PROPOSAL' => $this->input->post('NO_PROPOSAL'),
               'KD_DOKUMEN' => $this->input->post('KD_DOKUMEN'),               
               'NAMA_DOKUMEN' => $this->input->post('NAMA_DOKUMEN'),               
               'URL' => $nama_file,                          
            );
        $NO_PROPOSAL_WEB = $this->input->post('NO_PROPOSAL');
            //var_dump($data);die;
        $this->db->insert('PROPOSAL_BASIS', $data); 
        redirect(base_url('index.php/cproposal/daftar_tarif_proposal/'.$NO_PROPOSAL_WEB), 'refresh');   
    }
    
    function delete_tarif_proposal($ID,$NO_PROPOSAL){
        $this->db->where('ID', $ID);        
        $this->db->delete('PROPOSAL_BASIS'); 
        
        redirect(base_url('index.php/cproposal/daftar_tarif_proposal/'.$NO_PROPOSAL), 'refresh');   
    }
    
    function filter_tarif_proposal($NO_PROPOSAL,$JENIS,$KODE_TARIF){
        if($JENIS=='PREMI'){
            $baca = $this->db->get_where('TARIF_PREMI',array('KD_TARIF' => $KODE_TARIF));
        }
        elseif($JENIS=='TEBUS'){
            $baca = $this->db->get_where('TARIF_TEBUS',array('KD_TARIF' => $KODE_TARIF));
        }
        elseif($JENIS=='PESANGON'){
            $baca = $this->db->get_where('TARIF_PESANGON',array('KD_TARIF' => $KODE_TARIF));
        }
        elseif($JENIS=='DIPERCEPAT'){
            $baca = $this->db->get_where('TARIF_FAKTOR_DPC',array('KD_TARIF' => $KODE_TARIF));
        }
        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_tarif_proposal(){
        $data = array(
               $this->input->post('JENIS_TARIF') => $this->input->post('KD_TARIF'),
               );
        
        $this->db->where('NO_PROPOSAL', $this->input->post('NO_PROPOSAL'));
        $this->db->update('PROPOSAL_BASIS', $data); 
        $NO_PROPOSAL = $this->input->post('NO_PROPOSAL');
        redirect(base_url('index.php/cproposal/daftar_tarif_proposal/'.$NO_PROPOSAL), 'refresh');  
    }
    
    function simpan_tarif(){
        $data = array(               
               'KD_TARIF' => $this->input->post('KD_TARIF'),
               'NAMA_TARIF' => $this->input->post('NAMA_TARIF'),               
               'JENIS_TARIF' => $this->input->post('JENIS_TARIF'),                          
            );
        $KD_TARIF = $this->input->post('KD_TARIF');
            //var_dump($data);die;
        $this->db->insert('TARIF', $data);  
        redirect(base_url('index.php/cproposal/update_tarif/'.$KD_TARIF), 'refresh');    
    }
    
    function filter_tarif($KD_TARIF){
        $baca = $this->db->get_where('TARIF',array('KD_TARIF' => $KD_TARIF));        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_tarif($nama_file){
        $query='';
        $namafile = base_url('/images/upload/'.$nama_file);
        $parm1 = $this->input->post('KD_TARIF');
        $jenis = $this->input->post('JENIS_TARIF');
	$input = file($namafile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $filedata=array();
        if($jenis=='PREMI'){
            foreach ($input as $line) {
                    $filedata = explode("\t",$line);		
                    //$query->execute($filedata);
                    $query .= "INTO TARIF_PREMI 
                                      (KD_TARIF,KD_BASIS,KD_CARA_BAYAR,KD_VALUTA,MASA,USIA,TARIF) 
                                      VALUES ('$parm1','$filedata[0]','$filedata[1]','$filedata[2]','$filedata[3]','$filedata[4]','$filedata[5]') ";	
                                      //VALUES ('$parm1','$filedata[0]','$filedata[1]','$filedata[2]','$filedata[3]','$filedata[4]',REPLACE('$filedata[5]',',','.')) ";	
            }
        }
        elseif($jenis=='TEBUS'){
            foreach ($input as $line) {
                    $filedata = explode("\t",$line);		
                    //$query->execute($filedata);
                    $query .= "INTO TARIF_TEBUS 
                                      (KD_TARIF,KD_BASIS,KD_CARA_BAYAR,KD_VALUTA,MASA,USIA,BK,TARIF) 
                                      VALUES ('$parm1','$filedata[0]','$filedata[1]','$filedata[2]','$filedata[3]','$filedata[4]','$filedata[5]','$filedata[6]') ";	
            }
        }
        elseif($jenis=='FAKTOR_DPC'){
            foreach ($input as $line) {
                    $filedata = explode("\t",$line);		
                    //$query->execute($filedata);
                    $query .= "INTO TARIF_FAKTOR_DPC 
                                      (KD_TARIF,KD_BASIS,KD_VALUTA,MASA,USIA,TARIF) 
                                      VALUES ('$parm1','$filedata[0]','$filedata[1]','$filedata[2]','$filedata[3]','$filedata[4]') ";	
            }
        }
        elseif($jenis=='PESANGON'){
            foreach ($input as $line) {
                    $filedata = explode("\t",$line);		
                    //$query->execute($filedata);
                    $query .= "INTO TARIF_PESANGON 
                                      (KD_TARIF,KD_BASIS,KD_CARA_BAYAR,KD_VALUTA,MASA,USIA,TARIF) 
                                      VALUES ('$parm1','$filedata[0]','$filedata[1]','$filedata[2]','$filedata[3]','$filedata[4]','$filedata[5]') ";	
            }
        }
        $query = 'INSERT ALL '.$query.' SELECT * FROM dual';
        //echo $query;
        //echo '<br><br>';
        //die;
        $this->db->query($query);
        redirect(base_url('index.php/cproposal/update_tarif/'.$parm1.'/'.$jenis), 'refresh'); 
    }
    
    function filter_kode_tarif($KODE_TARIF,$JENIS){
        if($JENIS=='PREMI'){
            $baca = $this->db->get_where('TARIF_PREMI',array('KD_TARIF' => $KODE_TARIF));
        }
        elseif($JENIS=='TEBUS'){
            $baca = $this->db->get_where('TARIF_TEBUS',array('KD_TARIF' => $KODE_TARIF));
        }
        elseif($JENIS=='PESANGON'){
            $baca = $this->db->get_where('TARIF_PESANGON',array('KD_TARIF' => $KODE_TARIF));
        }
        elseif($JENIS=='DIPERCEPAT'){
            $baca = $this->db->get_where('TARIF_FAKTOR_DPC',array('KD_TARIF' => $KODE_TARIF));
        }
        
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function delete_all_detail_tarif($KODE_TARIF,$JENIS){
        
        if($JENIS=='PREMI'){
            $this->db->where('KD_TARIF', $KODE_TARIF );       
            $this->db->delete('TARIF_PREMI'); 
        }
        elseif($JENIS=='TEBUS'){
            $this->db->where('KD_TARIF', $KODE_TARIF );          
            $this->db->delete('TARIF_TEBUS'); 
        }
        elseif($JENIS=='PESANGON'){
            $this->db->where('KD_TARIF', $KODE_TARIF );          
            $this->db->delete('TARIF_PESANGON'); 
        }
        elseif($JENIS=='DIPERCEPAT'){
            $this->db->where('KD_TARIF', $KODE_TARIF );           
            $this->db->delete('TARIF_FAKTOR_DPC'); 
        }
        
        
        
        redirect(base_url('index.php/cproposal/update_tarif/'.$KODE_TARIF.'/'.$JENIS), 'refresh');
    }
}
?>