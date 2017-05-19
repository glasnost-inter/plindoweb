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
            <a href="<?php echo base_url('index.php/cproposal/daftar_proposal_tarif') ?>" class="btn btn-primary btn-sm">Back&nbsp;&nbsp;<i class="fa fa-arrow-circle-o-left"></i></a>
            <?php
            if(!isset($hasil)){
            ?>
            <a href="<?php echo base_url('index.php/cproposal/clone_proposal_tarif/'.$NO_PROPOSAL) ?>" class="btn btn-primary btn-sm">Clone Tarif Standar&nbsp;&nbsp;<i class="fa fa-copy"></i></a>
            <?php
            }
            else {                                                              
            foreach($hasil as $data) {                                    
            ?> 
            <div class="row">              
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>JHT TEBUS AKTIF<!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTAK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTAK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTAK/'.$data->TARIF_NTAK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>            
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTAB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTAB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTAB/'.$data->TARIF_NTAB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>            
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTRES<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTRES);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTRES/'.$data->TARIF_NTRES) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>            
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>
                
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>JHT TEBUS PASIF<!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTPHT<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTPHT);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTPHT/'.$data->TARIF_NTPHT) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTPJD<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTPJD);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTPJD/'.$data->TARIF_NTPJD) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTYTM<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTYTM);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTYTM/'.$data->TARIF_NTYTM) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                    </form>                    
                  </div>
                </div>
              </div>             
                                       
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>JHT PREMI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PHTB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PHTB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PHTB/'.$data->TARIF_PHTB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PHTX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PHTX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PHTX/'.$data->TARIF_PHTX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PJDB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PJDB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PJDB/'.$data->TARIF_PJDB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PJDX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PJDX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PJDX/'.$data->TARIF_PJDX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>                        
                    </form>                    
                  </div>
                </div>
              </div>                           
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>JHT DIPERCEPAT <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_DPCB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/DIPERCEPAT/'.$data->TARIF_DPCB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_DPCB/'.$data->TARIF_DPCB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_DPCK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/DIPERCEPAT/'.$data->TARIF_DPCK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_DPCK/'.$data->TARIF_DPCK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>                                              
                    </form>                    
                  </div>
                </div>
              </div>  
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>JHT SEGERA DIMULAI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGPHT<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PSGPHT);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGPHT/'.$data->TARIF_PSGPHT) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGPJD<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PSGPJD);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGPJD/'.$data->TARIF_PSGPJD) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGPYT<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PSGPYT);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGPYT/'.$data->TARIF_PSGPYT) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>    
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>THT TEBUS <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTTHT<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTTHT);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTTHT/'.$data->TARIF_NTTHT) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTTHTX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTTHTX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTTHTX/'.$data->TARIF_NTTHTX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>                                              
                    </form>                    
                  </div>
                </div>
              </div>   
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>THT PREMI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PRTHTX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PRTHTX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PRTHTX/'.$data->TARIF_PRTHTX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PRTHTB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PRTHTB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PRTHTB/'.$data->TARIF_PRTHTB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">JENIS_TARIF_PROS<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->JENIS_TARIF_PROS);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/JENIS_TARIF_PROS/'.$data->JENIS_TARIF_PROS) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>   
                
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>EBK PREMI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PREBKX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PREBKX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PREBKX/'.$data->TARIF_PREBKX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PREBKB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PREBKB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PREBKB/'.$data->TARIF_PREBKB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>                        
                    </form>                    
                  </div>
                </div>
              </div>
                
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>DWL PREMI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PRDWLX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PRDWLX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PRDWLX/'.$data->TARIF_PRDWLX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PRDWLB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_PRDWLB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PRDWLB/'.$data->TARIF_PRDWLB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>                        
                    </form>                    
                  </div>
                </div>
              </div>
                
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SIHARTA TEBUS <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_SHT<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_SHT);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_SHT/'.$data->TARIF_SHT) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTSHTB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_NTSHTB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTSHTB/'.$data->TARIF_NTSHTB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTSHTX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_NTSHTX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTSHTX/'.$data->TARIF_NTSHTX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>                
                
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SIHARTA UA RESIKO <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_MBSHTB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_MBSHTB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_MBSHTB/'.$data->TARIF_MBSHTB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_MBSHTX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_MBSHTX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_MBSHTX/'.$data->TARIF_MBSHTX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_MKSHTB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_MKSHTB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_MKSHTB/'.$data->TARIF_MKSHTB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_MKSHTX<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_MKSHTX);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_MKSHTX/'.$data->TARIF_MKSHTX) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>  
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SIHARTA AKUMULASI PREMI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_AKUMULASI_PREMI<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_AKUMULASI_PREMI);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_AKUMULASI_PREMI/'.$data->TARIF_AKUMULASI_PREMI) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>                        
                    </form>                    
                  </div>
                </div>
              </div>   
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>FAKTOR PESANGON <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGNEXP<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PESANGON/'.$data->TARIF_PSGNEXP);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGNEXP/'.$data->TARIF_PSGNEXP) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGNMD<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PESANGON/'.$data->TARIF_PSGNMD);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGNMD/'.$data->TARIF_PSGNMD) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGNCTT<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PESANGON/'.$data->TARIF_PSGNCTT);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGNCTT/'.$data->TARIF_PSGNCTT) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_PSGNKEC<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PESANGON/'.$data->TARIF_PSGNKEC);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_PSGNKEC/'.$data->TARIF_PSGNKEC) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>  
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>RAWAT INAP PREMI <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_RWIB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_RWIB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_RWIB/'.$data->TARIF_RWIB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_RWIK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_RWIK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_RWIK/'.$data->TARIF_RWIK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_RWJB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_RWJB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_RWJB/'.$data->TARIF_RWJB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_RWJK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_RWJK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_RWJK/'.$data->TARIF_RWJK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>  
              
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>RAWAT INAP TEBUS <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTRWIB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTRWIB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTRWIB/'.$data->TARIF_NTRWIB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTRWIK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTRWIK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTRWIK/'.$data->TARIF_NTRWIK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTRWJB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTRWJB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTRWJB/'.$data->TARIF_NTRWJB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_NTRWJK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/TEBUS/'.$data->TARIF_NTRWJK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_NTRWJK/'.$data->TARIF_NTRWJK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>  
               
              <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>RAWAT INAP FAKTOR <!--small>Users</small--></h2>
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
                    </p>                                                                                                  
                    <form method="post" action="#"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">                                                
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_FKRWIB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_FKRWIB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_FKRWIB/'.$data->TARIF_FKRWIB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_FKRWIK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_FKRWIK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_FKRWIK/'.$data->TARIF_FKRWIK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_FKRWJB<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_FKRWJB);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_FKRWJB/'.$data->TARIF_FKRWJB) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">TARIF_FKRWJK<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">                            
                            <a onClick="popitup('<?php echo base_url('index.php/cproposal/view_proposal_tarif/'.$NO_PROPOSAL.'/PREMI/'.$data->TARIF_FKRWJK);?>',850,575)" href="#" class="btn btn-primary btn-sm">View Tarif&nbsp;&nbsp;<i class="fa fa-eye"></i></a>
                            <a href="<?php echo base_url('index.php/cproposal/update_proposal_tarif/'.$NO_PROPOSAL.'/TARIF_FKRWJK/'.$data->TARIF_FKRWJK) ?>" class="btn btn-primary btn-sm">Update&nbsp;&nbsp;<i class="fa fa-pencil-square-o"></i></a>
                        </div>
                      </div>  
                    </form>                    
                  </div>
                </div>
              </div>  
                
             </div>
            <!-- DELIMITER -->            
             <?php                                    
            }
            }
            ?> 
          </div>
        </div>
        <!-- /page content -->