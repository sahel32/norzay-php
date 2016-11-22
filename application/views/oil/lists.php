<link href="<?php //echo asset_url('jeegoopopup/style.css'); ?>" rel="Stylesheet" type="text/css" />
<link href="<?php echo asset_url('jeegoopopup/skins/basic/style.css'); ?>" rel="Stylesheet" type="text/css" />
<link href="<?php echo asset_url('jeegoopopup/skins/black/style.css'); ?>" rel="Stylesheet" type="text/css" />
<link href="<?php echo asset_url('jeegoopopup/skins/blue/style.css'); ?>" rel="Stylesheet" type="text/css" />
<link href="<?php echo asset_url('jeegoopopup/skins/clean/style.css'); ?>" rel="Stylesheet" type="text/css" />
<link href="<?php echo asset_url('jeegoopopup/skins/gray/style.css'); ?>" rel="Stylesheet" type="text/css" />
<link href="<?php echo asset_url('jeegoopopup/skins/round/style.css'); ?>" rel="Stylesheet" type="text/css" />


<div class="row">
                    <div class="col-md-12">
                     <h2>لیست پیش فروش های تیل</h2>   
                        <h5>در جدول پایین شما میتوانید لیست پیش فروش های تیل را مشاهده کنید.</h5>


                                    <input id="openpopup" type="button" value="Open popup" class="button" />

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

                                    foreach ($oil_rows as $key => $value) {?>
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

<script type="text/javascript" src="<?php echo asset_url('jeegoopopup/jquery-1.10.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('jeegoopopup/jquery.jeegoopopup.1.0.0.js'); ?>"></script>
<script type="text/javascript">
    //<![CDATA[
    $(function(){

        // Open popup on button click.
        $('#openpopup').click(function(){

            var options = {
                width: 500,
                height: 600,
                center: 'center',
                fixed: $('#fixed').is(':checked'),
                skinClass: $('#skin').val(),
                overlay: 'overlay',
                overlayColor: $('#color').val(),
                fadeIn: parseInt($('#fadeIn').val()) || 0,
                draggable: $('#draggable').is(':checked'),
                resizable: $('#resizable').is(':checked'),
                scrolling: $('#scrolling').val(),
                parentScrolling: $('#parentScrolling').is(':checked'),
                title: $('#title').val()
            };



            /*if($('#html').is(':checked'))
             options.html = $('#html_content').val();
             else */
            options.url = '<?php echo site_url('oil/buy/popupp'); ?>';

            $.jeegoopopup.open(options);
        });
    });
    //]]>
</script>