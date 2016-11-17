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
            </div>
             <!-- /. PAGE INNER  -->