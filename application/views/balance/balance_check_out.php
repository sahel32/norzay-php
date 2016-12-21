
<link type="text/css" href="<?php echo asset_url('js/datepicker/styles/jquery-ui-1.8.14.css'); ?>" rel="stylesheet" />

<script type="text/javascript" src="<?php echo asset_url('js/datepicker/scripts/jquery-1.6.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/datepicker/scripts/jquery.ui.core.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/datepicker/scripts/jquery.ui.datepicker-cc.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/datepicker/scripts/calendar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/datepicker/scripts/jquery.ui.datepicker-cc-ar.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset_url('js/datepicker/scripts/jquery.ui.datepicker-cc-fa.js'); ?>"></script>

<script type="text/javascript">
    $(function() {
        // حالت پیشفرض
        $('#datepicker').datepicker({
            showButtonPanel: true
        });

    });
</script>
<div id="page-inner">
    <div class="row">
        <div class="col-md-12">
            <h2>پروفایل مشتری</h2>
            <h5>در این قسمت شما میتوانید تمام اطلاعات مربوط به خریدار و فروشنده مورد نظر را مشاهده کنید.</h5>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-md-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    فورم ثبت درایور
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
<<<<<<< HEAD
<<<<<<< HEAD
                            <form role="form" action="<?php echo site_url('balance/balance_check_out/'.$id); ?>" method="post">
=======
=======

>>>>>>> origin/Mortaza-PHP

                            <form role="form" action="<?php echo site_url('balance/balance_check_out/'.$id ); ?>" method="post">


<<<<<<< HEAD
>>>>>>> refs/remotes/origin/kazem-php
=======
>>>>>>> origin/Mortaza-PHP
                                <?php

                                foreach ($single_balance_rows as $key => $value) {?>
                                <div class="col-md-3 form-group">
                                    <lable>بردگی</lable>
                                    <input type="text" value="<?php echo $value->debit;?>" name="debit" class="form-control">

                                </div>


                                <div class="col-md-3 form-group">
                                    <lable>رسیدگی</lable>
                                    <input type="text" value="<?php echo $value->credit;?>" name="credit" class="form-control">


                                </div>
                                <?php if($value->balance<0){?>
                                <div class="col-md-3 form-group">
                                    <lable>طلب</lable>
                                    <input type="text" value="<?php echo $value->balance;?>" name="balance" class="form-control">

                                </div>
                                <?php }else{?>
                                <div class="col-md-3 form-group">
                                    <lable>قرض دار</lable>
                                    <input type="text" value="<?php echo $value->balance;?>" name="balance" class="form-control">

                                </div>
                                <?php } ?>
                                <div class="col-md-3 form-group">
                                    <lable>تاریخ</lable>
                                    <input type="text" id="datepicker " value="<?php echo $date;?>" name="date" class="form-control">

                                </div>
                                <?php } ?>
                                <div class="col-md-3 gaps">
                                    <button type="submit" class="btn btn-default pull-left">تائید</button>
                                    <button type="reset" class="btn btn-primary pull-left">تنظیم مجدد</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /. PAGE INNER  -->
