<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>CLIENT LIST</h3>
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
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead align="center">
                        <tr>
                          <th>No</th>
                          <th>Client Name</th>
                          <th>Address</th>
                          <th>Contact</th>
                          <th colspan="3">Action</th>
                        </tr>
                      </thead>
                      <tbody align="center">
                      <?php 
                      $no = 1;
                      foreach ($dataClient as $d): ?>
                      <?php include('inc/add.php') ?>
                        <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo $d->clientname ?></td>
                          <td><?php echo $d->address ?></td>
                          <td><?php echo $d->contact ?></td>
                          <td>
                            <a class="fas fa-user-plus" data-placement="top" title="Add" data-toggle="modal" data-target="#AddModal" style="text-decoration: none;"></a>
                          </td>
                          <td>
                            <a class="fas fa-edit" href="#" style="text-decoration: none;"></a>
                          </td>
                          <td>
                            <a class="fas fa-trash" href="#" style="text-decoration: none;"></a>
                          </td>
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