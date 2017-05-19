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
                    <a href="<?php echo base_url('index.php/cproposal/daftar_kode_tarif') ?>" class="btn btn-primary btn-sm">Back&nbsp;&nbsp;<i class="fa fa-arrow-circle-left"></i></a>
                    <?php                                    
                    foreach($hasil as $data) {                                    
                    ?>
                    <form method="post" action="<?php echo base_url('index.php/cproposal/do_upload') ?>" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">KD_TARIF<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                                <input name="KD_TARIF" value="<?php echo $data->KD_TARIF;?>" type="text" id="kd-tarif" required="required" class="form-control col-md-7 col-xs-12">
                            </div>    
                        </div>  
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NAMA_TARIF<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="input-group">
                                <input name="NAMA_TARIF" value="<?php echo $data->NAMA_TARIF;?>" type="text" id="kd-tarif" required="required" class="form-control col-md-7 col-xs-12">
                            </div>    
                        </div>  
                      </div>  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">JENIS_TARIF<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="JENIS_TARIF" value="<?php echo $data->JENIS_TARIF;?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">FILE_TARIF<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input name="URL" value="" type="file" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
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
                    <p class="text-muted font-13 m-b-30">
                      <!--The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.-->
                      <a href="<?php echo base_url('index.php/cproposal/update_detail_tarif/'.$KD_TARIF.'/'.$JENIS) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                      <a href="<?php echo base_url('index.php/cproposal/delete_all_detail_tarif/'.$KD_TARIF.'/'.$JENIS) ?>" class="btn btn-primary btn-sm">Clear All&nbsp;&nbsp;<i class="fa fa-trash-o"></i></a>
                    </p>                                                          
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>KD_TARIF</th>
                          <th>KD_BASIS</th>                                                                       
                          <th>KD_VALUTA</th>                                                                       
                          <th>USIA</th>                                                                       
                          <th>TARIF</th>   
                        </tr>
                      </thead>


                      <tbody>
					  <?php
					  $no = 1;
                                          if(isset($hasil2)){
                                          foreach($hasil2 as $data) {						 
					  ?>
                                                    <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $data->KD_TARIF;?></td>
                                    <td><?php echo $data->KD_BASIS;?></td>                                 
                                    <td><?php echo $data->KD_VALUTA;?></td>                                 
                                    <td><?php echo $data->USIA;?></td>                                 
                                    <td><?php echo $data->TARIF;?></td>                                 
                                    
                                </tr>
                                                    <?php
                                                    }    
                                          }					  
					  ?>	
					  </tbody>
					</table>
                  </div>
                </div>
              </div>
                           
             </div>
          </div>
        </div>
        <!-- /page content -->