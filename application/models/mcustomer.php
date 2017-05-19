<?php
class Mcustomer extends CI_Model {
    
    function daftar_customer(){
        $baca = $this->db->get('CUSTOMER');
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }    
    
    function get_no_customer(){
        $query = '';
        $query = "select lpad(NO_CUST_SEQ.nextval,10,'0') no_customer from dual";
        $baca = $this->db->query($query);
        
        if($baca->num_rows() > 0){
            $row = $baca->row_array();
            $nomor_grup = $row['NO_CUSTOMER'];

            return $nomor_grup;
        }
    }
    
    function simpan_customer(){
        $data = array(
               'NO_CUSTOMER' => $this->input->post('NO_CUSTOMER'),
               'NAMA_CUSTOMER' => $this->input->post('NAMA_CUSTOMER'),               
               'ALAMAT1' => $this->input->post('ALAMAT1'),               
               'CP1' => $this->input->post('CP1'),              
               'JABATAN_CP1' => $this->input->post('JABATAN_CP1'),              
               'EMAIL' => $this->input->post('EMAIL'),              
               'NO_TELP1_CP1' => $this->input->post('NO_TELP1_CP1'),              
               'NO_TELP1' => $this->input->post('NO_TELP1'),              
               'NPWP' => $this->input->post('NPWP'),              
               'EMAIL_CORP' => $this->input->post('EMAIL_CORP'),              
               'KD_JENIS_USAHA' => $this->input->post('KD_JENIS_USAHA'),              
               'ASSET' => $this->input->post('ASSET'),              
               'KD_JENIS_BADAN' => $this->input->post('KD_JENIS_BADAN'),              
               'PENSUSPECT' => $this->input->post('PENSUSPECT'),              
               'KETERANGAN' => $this->input->post('KETERANGAN'),              
            );
            //var_dump($data);die;
        $this->db->insert('CUSTOMER', $data); 
        redirect(base_url('index.php/ccustomer/daftar_customer'), 'refresh');   
    }
    
    function delete_customer($ID){
        $this->db->where('NO_CUSTOMER', $ID);        
        $this->db->delete('CUSTOMER'); 
        
        redirect(base_url('index.php/ccustomer/daftar_customer'), 'refresh');   
    }
    
    function filter_customer($ID){
        $baca = $this->db->get_where('CUSTOMER',array('NO_CUSTOMER' => $ID));
        if($baca->num_rows() > 0){
            foreach ($baca->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
    
    function simpan_update_customer(){
        $data = array(
               'NAMA_CUSTOMER' => $this->input->post('NAMA_CUSTOMER'),               
               'ALAMAT1' => $this->input->post('ALAMAT1'),               
               'CP1' => $this->input->post('CP1'),              
               'JABATAN_CP1' => $this->input->post('JABATAN_CP1'),              
               'EMAIL' => $this->input->post('EMAIL'),              
               'NO_TELP1_CP1' => $this->input->post('NO_TELP1_CP1'),              
               'NO_TELP1' => $this->input->post('NO_TELP1'),              
               'NPWP' => $this->input->post('NPWP'),              
               'EMAIL_CORP' => $this->input->post('EMAIL_CORP'),              
               'KD_JENIS_USAHA' => $this->input->post('KD_JENIS_USAHA'),              
               'ASSET' => $this->input->post('ASSET'),              
               'KD_JENIS_BADAN' => $this->input->post('KD_JENIS_BADAN'),              
               'PENSUSPECT' => $this->input->post('PENSUSPECT'),              
               'KETERANGAN' => $this->input->post('KETERANGAN'),                                           
            );
        $this->db->where('NO_CUSTOMER', $this->input->post('NO_CUSTOMER'));        
        $this->db->update('CUSTOMER', $data); 
        
        redirect(base_url('index.php/ccustomer/daftar_customer'), 'refresh');  
    }
}
?>