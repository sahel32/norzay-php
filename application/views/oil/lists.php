                <div class="row">
                    <div class="col-md-12">
                     <h2>لیست پیش فروش های تیل</h2>   
                        <h5>در جدول پایین شما میتوانید لیست پیش فروش های تیل را مشاهده کنید.</h5>   
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             لیست پیش فروش ها
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

                                    foreach ($oil_rows as $key => $value) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $value->id;?></td>
                                            <td><?php echo $value->f_date;?></td>
                                            <td><?php echo $value->s_date;?></td>
                                            <td class="center"><?php echo $value->account_id;?></td>
                                            <td class="center"><?php echo $value->name;?></td>
                                            <td class="center"><?php echo $value->amount;?></td>
                                            <td class="center"><?php echo $value->car_count;?></td>
                                            <td class="center"><?php echo $value->unit_price;?></td>
                                            <td class="center">X</td>
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
    </script>
      <!-- CUSTOM SCRIPTS -->