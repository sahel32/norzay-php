
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
        <div class="col-md-12 col-sm-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    اطلاعات عمومی
                    <a href="<?php echo site_url('cash/profile_credit_debit/').$this->uri->segment('3')."/".$this->uri->segment('4');?>">
                        پرداخت/دریافت</a>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">

                            <?php

                            foreach ($single_balance_rows as $key => $value) {?>

                                <input type="text" value="<?php echo $value->debit;?>" name="debit">
                                <input type="text" value="<?php echo $value->credit;?>" name="credit">

                                <?php if($value->balance>0){?>
                                    <input type="text" value="<?php echo $value->balance;?>" name="new_debit">
                                <?php }else{?>
                                    <input type="text" value="<?php echo $value->balance;?>" name="new_credit">
                                <?php } ?>
                                <input type="text" id="datepicker " value="<?php echo $date;?>" name="date">

                            <?php }?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. ROW -->
</div>
<!-- /. PAGE INNER  -->
