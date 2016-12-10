
<div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>لیست افراد</h2>   
                        <h5>در جدول پایین شما میتوانید لیست راننده ها را مشاهده کنید.</h5>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">


                             لیست راننده ها
                            <div class="btn-group pull-left">
                                <?php
                                if($this->uri->segment('3')=="seller" or $this->uri->segment('3')=="customer"){?>
                                    <a href="<?php echo site_url('cash/oil_credit_debit/').$this->uri->segment('3');?>">پرداخت/دریافت</a>
                               <?php  }else{
                                ?>
                                <a href="<?php echo site_url('cash/credit_debit/').$this->uri->segment('3');?>">پرداخت/دریافت</a>
                                <?php }?>

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
                                            <th>نام</th>
                                            <th>تخلص</th>
                                            <th>بردگی</th>
                                            <th>رسیدگی</th>
                                            <th>بیلانس (الباقی)</th>
                                            <th>تغییرات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($account_rows as $key => $value) {?>

                                        <tr class="odd gradeX">
                                            <td><?php echo $value->id;?></td>
                                            <td><?php echo $value->name;?></td>
                                            <td><?php echo $value->lname;?></td>
                                            <td class="center">4</td>
                                            <td class="center">X</td>
                                            <td class="center">4</td>
                                            <td class="center">
                                                <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                                                <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                                <a href="<?php echo site_url('account/profile/'.$value->id.'/'.$value->type); ?>"><span class="glyphicon glyphicon-asterisk"></span></a>
                                            </td>
                                        </tr>
                                   <?php  }?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    </div>
                </div>
                 <!-- /. ROW  -->
            </div>
             <!-- /. PAGE INNER  -->


       <script src="<?php echo asset_url('js/dataTables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo asset_url('js/dataTables/dataTables.bootstrap.js'); ?>"></script>

            <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });

            $('#list').change( function() {
                var filtervalue = this.value;
                var table2= $('#dataTables-example2').dataTable();
                table2.fnFilter(filtervalue );
            });
    </script>
      <!-- CUSTOM SCRIPTS -->
         