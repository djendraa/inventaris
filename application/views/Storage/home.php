<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>STORAGE LIST</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead align="center">
                        <tr>
                          <th>No</th>
                          <th>Item Name</th>
                          <th>Storage Type</th>
                          <th>Purchase</th>
                          <th>Qty</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                      
                      <?php 
                      $no = 1;
                      foreach ($dataStorage as $d): ?>
                      
                      <?php include('inc/add.php') ?>
                      
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $d->item ?></td>
                          <td><?php echo $d->tipestorage ?></td>
                          <td><?php echo $d->purchase ?></td>
                          <td><?php echo $d->qty ?></td>
                          <?php include('inc/update.php') ?>
                          
                          <td>
                            <a class="fas fa-user-plus" data-placement="top" title="Add" data-toggle="modal" data-target="#AddModal" style="text-decoration: none;"></a> &nbsp; &nbsp;
                            <a class="fas fa-edit" data-placement="top" title="Update" data-toggle="modal" data-target="#UpdateModal<?php echo $d->id ?>" style="text-decoration: none;"></a> &nbsp; &nbsp;
                            <a class="fas fa-trash" data-placement="top" title="Delete" data-toggle="modal" data-target="#DeleteModal<?php echo $d->id ?>" style="text-decoration: none;"></a>
                          </td>
                          <?php include('inc/delete.php') ?>
                        </tr>
                        
                      <?php endforeach; ?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->