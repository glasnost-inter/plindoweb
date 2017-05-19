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
                    <a href="<?php echo base_url('index.php/cprospek/daftar_prospek_simulasi') ?>" class="btn btn-primary btn-sm">Back&nbsp;&nbsp;<i class="fa fa-arrow-circle-left"></i></a>
                    <?php                                    
                    foreach($hasil as $data) {                                    
                    ?> 
                    <form method="post" action="<?php echo base_url('index.php/cprospek/simpan_update_prospek_simulasi') ?>" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                        
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ID_PERUSAHAAN<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                                <input name="ID_SIMULASI" value="<?php echo $data->ID_SIMULASI;?>" type="hidden" id="id-perusahaan" required="required" class="form-control col-md-7 col-xs-12">
                                <input name="ID_PERUSAHAAN" value="<?php echo $data->ID_PERUSAHAAN;?>" type="text" id="id-perusahaan" required="required" class="form-control col-md-7 col-xs-12">
                                <span class="input-group-btn">
                                    <a href="#" onClick="popitup('<?php echo base_url('index.php/cpopprospek/get_prospek_perusahaan') ?>',850,575)" type="button" class="btn btn-primary">...</a>
                                </span>
                            </div>    
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">PRODUK<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <select class="form-control" name="PRODUK">
                                <option value="<?php echo $data->PRODUK;?>" selected><?php echo $data->PRODUK;?></option>                                                          
                                <option>SHT</option>
                                <option>THT</option>                            
                                <option>ARD</option>                            
                            </select>
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">MULAS<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="MULAS" value="<?php echo $data->MULAS;?>" type="text" id="datepickerx" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SU<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="SU" value="<?php echo $data->SU;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">ASUMSI_KENAIKAN<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="ASUMSI_KENAIKAN" value="<?php echo $data->ASUMSI_KENAIKAN;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CARA_BAYAR<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select class="form-control" name="CARA_BAYAR">
                                <option value="<?php echo $data->CARA_BAYAR;?>" selected><?php echo $data->CARA_BAYAR;?></option>                                                          
                                <option value="1">BULANAN</option>                                                          
                                <option value="2">KUARTALAN</option>                                                          
                                <option value="3">SEMESTERAN</option>                                                          
                                <option value="4">TAHUNAN</option>                                                          
                                <option value="X">SEKALIGUS</option>                                                          
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">VALUASI_ASKEM<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="VALUASI_ASKEM" value="<?php echo $data->VALUASI_ASKEM;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>                                            
                      <div class="ln_solid"></div>
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