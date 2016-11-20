              <div class="row">
                    <div class="col-md-12">
                        <h2><?php echo $main_title;?></h2>   
                        <h5><?php echo $desc;?></h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 <?php echo $sub_title;?>

                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" >
                                        <thead>
                                            <tr>
                                                <th>کد</th>
                                                <th>نام گدام</th>
                                                <th>ادرس</th>
                                                <th>بردگی</th>
                                                <th>رسیدگی</th>
                                                <th>بیلانس (الباقی)</th>
                                                <th>تغییرات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php 
                                        
                                        foreach ($stock_rows as $key => $value) {?>
                                            
                                            
                                            <tr class="odd gradeX">
                                                <td><?php echo $value->id;?></td>
                                                <td><?php echo $value->name;?></td>
                                                <td><?php echo $value->province;?></td>
                                                <td class="center">4</td>
                                                <td class="center">X</td>
                                                <td class="center">4</td>
                                                <td class="center">
                                                    <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                                                    <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                                    <a href="blank.html"><span class="glyphicon glyphicon-asterisk"></span></a>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- /. ROW -->


              <div class="row">
                  <div class="col-md-12 col-sm-6">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <?php echo $sub_title;?>
                              <div class="btn-group pull-left">
                                  <select id="filter2">
                                      <option value="debit">debit</option>
                                      <option value="credit">credit</option>
                                  </select>
                                  <i class="fa fa-comments fa-filter" aria-hidden="true"> فیلتر </i>
                              </div>
                          </div>

                          <div class="panel-body">
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                      <thead>
                                      <tr>
                                          <th>کد</th>
                                          <th>تاریخ پیش فروش</th>
                                          <th>تاریخ تقریبی تحویل</th>
                                          <th>نام فروشنده</th>
                                          <th>نوغ تیل</th>
                                          <th>تناژ</th>
                                          <th>تعداد موتر</th>
                                          <th>فی</th>
                                          <th>تغییرات</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php

                                      foreach ($stock_transaction_rows as $key => $value) {?>


                                          <tr class="odd gradeX">
                                              <td><?php echo $value->id;?></td>
                                              <td><?php echo $value->f_date;?></td>
                                              <td><?php echo $value->s_date;?></td>
                                              <td class="center"><?php echo $value->buyer_seller_id;?></td>
                                              <td class="center"><?php echo $value->name;?></td>
                                              <td class="center"><?php echo $value->amount;?></td>
                                              <td class="center"><?php echo $value->car_count;?></td>
                                              <td class="center"><?php echo $value->unit_price;?></td>
                                              <td class="center">
                                                  <a href="<?php echo site_url('account/delete/'.$value->id) ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                                  <a href="<?php echo site_url('account/edit/'.$value->id) ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                                  <a href="<?php echo site_url('account/profile/'.$value->id); ?>"><span class="glyphicon glyphicon-asterisk"></span></a>
                                              </td>
                                          </tr>
                                      <?php }?>

                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
             <!-- /. PAGE INNER  -->

              <!-- /. PAGE INNER  -->
              <script src="<?php echo asset_url('js/dataTables/jquery.dataTables.js'); ?>"></script>
              <script src="<?php echo asset_url('js/dataTables/dataTables.bootstrap.js'); ?>"></script>

              <script>
                  $(document).ready(function () {
                      $('#dataTables-example').dataTable();

                  });

                  $('#filter2').change( function() {
                      var filtervalue = this.value;
                      var table2= $('#dataTables-example2').dataTable();
                      table2.fnFilter(filtervalue );
                  });
              </script>