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
                                       
                                        foreach ($stock_rows as $key => $value) {?>
                                            
                                            
                                            <tr class="odd gradeX">
                                                <td><?php echo $value->id;?></td>
                                                <td><?php echo $value->name;?></td>
                                                <td><?php echo $value->province;?></td>
                                                <td class="center"><?php echo $value->date;?></td>
                                                <td class="center"><?php echo $value->type;?></td>
                                                <td class="center"><?php echo $value->desc;?></td>
                                                <td class="center">
                                                    <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                                                    <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                                    <a href="<?php echo site_url('stock/profile/'.$value->id); ?>"><span class="glyphicon glyphicon-asterisk"></span></a>
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