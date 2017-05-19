<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Transaksi</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">              
              
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Transaksi <!--small>Users</small--></h2>                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <a href="<?php echo base_url('index.php/cproposal/daftar_proposal') ?>" class="btn btn-primary btn-sm">Back&nbsp;&nbsp;<i class="fa fa-arrow-circle-left"></i></a>
                    <?php                                    
                    foreach($hasil as $data) {                                    
                    ?> 
                    <form method="post" action="<?php echo base_url('index.php/cproposal/simpan_update_proposal') ?>" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                        
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KD_KANTOR<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="KD_KANTOR" value="<?php echo $data->KD_KANTOR;?>" type="text" id="datepickerxx" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>   
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NO_PROPOSAL<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="NO_PROPOSAL" readonly value="<?php echo $data->NO_PROPOSAL;?>" type="text" id="datepickerxx" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NO_CUSTOMER<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                                <input name="NO_CUSTOMER" value="<?php echo $data->NO_CUSTOMER;?>" type="text" id="no-customer" required="required" class="form-control col-md-7 col-xs-12">
                                <span class="input-group-btn">
                                    <a href="#" onClick="popitup('<?php echo base_url('index.php/cpopproposal/get_customer') ?>',850,575)" type="button" class="btn btn-primary">...</a>
                                </span>
                            </div>    
                        </div>
                      </div>                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TERTANGGUNG<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="TERTANGGUNG" value="<?php echo $data->TERTANGGUNG;?>" type="text" id="datepickerxx" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PEMEGANG_POLIS<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PEMEGANG_POLIS" value="<?php echo $data->PEMEGANG_POLIS;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PEMBAYAR_PREMI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PEMBAYAR_PREMI" value="<?php echo $data->PEMBAYAR_PREMI;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TGL_MULAI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="TGL_MULAI" value="<?php echo $data->TGL_MULAI;?>" type="text" id="datepickerx" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TGL_SPAJK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="TGL_SPAJK" value="<?php echo $data->TGL_SPAJK;?>" type="text" id="datepickerx" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KD_VALUTA<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="KD_VALUTA" value="<?php echo $data->KD_VALUTA;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KD_FREKUENSI_BAYAR<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="KD_FREKUENSI_BAYAR" value="<?php echo $data->KD_FREKUENSI_BAYAR;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KD_FREKUENSI_BAYAR_BS<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="KD_FREKUENSI_BAYAR_BS" value="<?php echo $data->KD_FREKUENSI_BAYAR_BS;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                       <div class="ln_solid"></div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SU<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="SU" value="<?php echo $data->SU;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">JENIS_PRODUK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="JENIS_PRODUK" value="<?php echo $data->JENIS_PRODUK;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                       
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ANUITAS_LANJUT<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <input name="ANUITAS_LANJUT" value="1" type="checkbox" class="flat" <?php echo ($data->ANUITAS_LANJUT == "1" ? "checked" : "");?> class="form-control col-md-7 col-xs-12">                            
                        </div>
                      </div>                                           
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROS_KENAIKAN_GAJI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROS_KENAIKAN_GAJI" value="<?php echo $data->PROS_KENAIKAN_GAJI;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROS_KENAIKAN_IURAN<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROS_KENAIKAN_IURAN" value="<?php echo $data->PROS_KENAIKAN_IURAN;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">FAKTOR_DP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="FAKTOR_DP" value="<?php echo $data->FAKTOR_DP;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                     
                      <div class="ln_solid"></div>
                      <?php 
                      if ($data->ANUITAS_LANJUT == "1"){
                      ?>    
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROSEN_BSI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROSEN_BSI" value="<?php echo $data->PROSEN_BSI;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROSEN_CS<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROSEN_CS" value="<?php echo $data->PROSEN_CS;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROSEN_MAX<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROSEN_MAX" value="<?php echo $data->PROSEN_MAX;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROSEN_MIN<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROSEN_MIN" value="<?php echo $data->PROSEN_MIN;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">JUMLAH_ANAK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="JUMLAH_ANAK" value="<?php echo $data->JUMLAH_ANAK;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">USA_MAX<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="USA_MAX" value="<?php echo $data->USA_MAX;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  
                      <div class="ln_solid"></div>                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROS_PJD<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROS_PJD" value="<?php echo $data->PROS_PJD;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROS_PYT<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROS_PYT" value="<?php echo $data->PROS_PYT;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROS_PYP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROS_PYP" value="<?php echo $data->PROS_PYP;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PROS_ESK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="PROS_ESK" value="<?php echo $data->PROS_ESK;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TGL_ESKALASI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="TGL_ESKALASI" value="<?php echo $data->TGL_ESKALASI;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KET_ESKALASI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="KET_ESKALASI" value="<?php echo $data->KET_ESKALASI;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CRAUU<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="CRAUU" value="<?php echo $data->CRAUU;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                                              
                      <?php    
                      }else{
                      ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KET_MANFAAT_EXPIRASI<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <select class="form-control" name="KET_MANFAAT_EXPIRASI">
                                <option value="<?php echo $data->KET_MANFAAT_EXPIRASI;?>" selected><?php echo $data->KET_MANFAAT_EXPIRASI;?></option>                                                   
                                <option value="MK">MASA KERJA</option>                                                   
                                <option value="FK">FAKTOR/INDEX</option>                                                   
                                <option value="PG">PROSENTASE GAJI</option>                                                   
                                <option value="NM">NOMINAL</option>                                                   
                            </select>
                        </div>
                      </div>                        
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KET_MANFAAT_MENINGGAL<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <select class="form-control" name="KET_MANFAAT_MENINGGAL">
                                <option value="<?php echo $data->KET_MANFAAT_MENINGGAL;?>" selected><?php echo $data->KET_MANFAAT_MENINGGAL;?></option>                                                   
                                <option value="MK">MASA KERJA</option>                                                   
                                <option value="FK">FAKTOR/INDEX</option>                                                   
                                <option value="PG">PROSENTASE GAJI</option>                                                   
                                <option value="NM">NOMINAL</option>                             
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KET_NILAI_TEBUS<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <select class="form-control" name="KET_NILAI_TEBUS">
                                <option value="<?php echo $data->KET_NILAI_TEBUS;?>" selected><?php echo $data->KET_NILAI_TEBUS;?></option>                                                   
                                <option value="MK">MASA KERJA</option>                                                   
                                <option value="FK">FAKTOR/INDEX</option>                                                   
                                <option value="PG">PROSENTASE GAJI</option>                                                   
                                <option value="NM">NOMINAL</option>                              
                            </select>
                        </div>
                      </div>                                              
                      <?php                      
                      }
                      ?> 
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">                          
			  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>

                    </form>
                    <?php                                    
                    }
                    ?> 
                  </div>
                </div>
              </div>
                           
             </div>
          </div>
        </div>
        <!-- /page content -->