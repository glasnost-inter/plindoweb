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
                    <p class="text-muted font-13 m-b-30">
                      <!--The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.-->
                      <!--a href="<?php echo base_url('index.php/ccustomer/entry_customer') ?>" class="btn btn-primary btn-sm">New&nbsp;&nbsp;<i class="fa fa-plus"></i></a-->
                    </p>                                                          
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>KD_TARIF</th>
                          <th>KD_BASIS</th>
                          <th>KD_CARA_BAYAR</th>                                                                          
                          <th>KD_VALUTA</th>                                                                          
                          <th>MASA</th>                                                                          
                          <th>USIA</th>                                                                          
                          <th>BK</th>                                                                          
                          <th>TARIF</th>                                                                          
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
					  <?php
					  $no = 1;
                                          if(isset($hasil)){
                                          foreach($hasil as $data) {						 
					  ?>
                                                    <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $data->KD_TARIF;?></td>
                                    <td><?php echo $data->KD_BASIS;?></td>
                                    <td><?php echo $data->KD_CARA_BAYAR;?></td>                                    
                                    <td><?php echo $data->KD_VALUTA;?></td>                                    
                                    <td><?php echo $data->MASA;?></td>                                    
                                    <td><?php echo $data->USIA;?></td>                                    
                                    <td><?php echo $data->BK;?></td>                                    
                                    <td><?php echo $data->TARIF;?></td>                                    
                                    <td><a href="<?php echo base_url('index.php/cproposal/daftar_tarif_proposal/'.$data->NO_PROPOSAL) ?>" class="btn btn-primary btn-sm">Tarif&nbsp;&nbsp;<i class="fa fa-table"></i></a>                                        
                                    </td>
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