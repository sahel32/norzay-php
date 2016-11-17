              <div class="row">
                    <div class="col-md-12">
                        <h2>پروفایل راننده</h2>   
                        <h5>در این قسمت شما میتوانید تمام اطلاعات مربوط به راننده مورد نظر را مشاهده کنید.</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                    <div class="col-md-12 col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 اطلاعات عمومی
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
                                حسابات مالی
                            </div>
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#period" data-toggle="tab">تعداد بار</a></li>
                                    <li class=""><a href="#debit" data-toggle="tab">بردگی</a></li>
                                    <li class=""><a href="#credit" data-toggle="tab">رسیدگی</a></li>
                                    <li class=""><a href="#balance" data-toggle="tab">balance</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="period">
                                        <h4></h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>تاریخ</th>
                                                        <th>ترانزیت (نمبر موتر)</th>
                                                        <th>نام مشتری (متعلق)</th>
                                                        <th>اضافه بار</th>
                                                        <th>فی تن</th>
                                                        <th>محل بارگیری</th>
                                                        <th>محل تحویل</th>
                                                        <th>تغییرات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 4.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">4</td>
                                                        <td class="center">X</td>
                                                        <td class="center">4</td>
                                                        <td class="center">X</td>
                                                        <td class="center">
                                                            <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                                                            <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                                            <a href="blank.html"><span class="glyphicon glyphicon-asterisk"></span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>   
                                    </div>
                                    <div class="tab-pane fade" id="debit">
                                        <h4></h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>تاریخ</th>
                                                        <th>مقدار پول</th>
                                                        <th>نوع پول</th>
                                                        <th>نوع دریافت</th>
                                                        <th>شرح و تفصیلات</th>
                                                        <th>تغییرات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 4.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">4</td>
                                                        <td class="center">X</td>
                                                        <td class="center">
                                                            <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                                                            <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                                            <a href="blank.html"><span class="glyphicon glyphicon-asterisk"></span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="credit">
                                        <h4></h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>تاریخ</th>
                                                        <th>مقدار پول</th>
                                                        <th>نوع پول</th>
                                                        <th>نوع پرداخت</th>
                                                        <th>شرح و تفصیلات</th>
                                                        <th>تغییرات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="odd gradeX">
                                                        <td>Trident</td>
                                                        <td>Internet Explorer 4.0</td>
                                                        <td>Win 95+</td>
                                                        <td class="center">4</td>
                                                        <td class="center">X</td>
                                                        <td class="center">
                                                            <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                                                            <a href="#"><span class="glyphicon glyphicon-edit"></span></a>
                                                            <a href="blank.html"><span class="glyphicon glyphicon-asterisk"></span></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                     <div class="tab-pane fade" id="balance">
                                        <h4></h4>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>id</th>
                                                        <th>balance</th>
                                                        <th>balance type</th>
                                                        <th>date</th>
                                                        <th>desc</th>
                                                        <th>تغییرات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php 
                                        
                                        foreach ($balance_rows as $key => $value) {?>
                                            
                                            
                                            <tr class="odd gradeX">
                                                <td><?php echo $value->id;?></td>
                                                <td><?php echo $value->balance;?></td>
                                                <td><?php echo $value->balance_type;?></td>
                                                <td><?php echo $value->date;?></td>
                                                <td><?php echo $value->desc;?></td>
                                               
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
                    </div>
                </div>
                 <!-- /. ROW -->
            </div>
             <!-- /. PAGE INNER  -->