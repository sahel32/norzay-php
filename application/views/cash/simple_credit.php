<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
<div class="row">
    <div class="col-md-12">
        <h2>ثبت درایور</h2>
        <h5>از این قسمت میتوانید مشخصات درایور را ثبت نمایید. </h5>

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
                        <form role="form" action="<?php echo site_url('cash/simple_debit'); ?>" method="post">

                            <div class="col-md-3 form-group">

                                <label>مقدار پول</label>

                                <input type="text"  value="<?php echo set_value('name'); ?>"name="name" class="form-control" data-trigger="hover"/>
                                <span class="help-inline"><?php echo (form_error('name') ) ? form_error('name') : "<span class='red'>*</span>"; ?></span>

                            </div>


                            <div class="col-md-3 form-group">

                                <label>دریافت یا پرداخت</label>

                                <select class="form-control" name="type">

                                    <option value="debit">دریافت</option>
                                    <option value="credit">پرداخت</option>

                                </select>

                            </div>

                            <div class="col-md-3 form-group">

                                <label>نوع پول</label>


                                <select class="form-control" name="type">

                                    <option value="af">af</option>
                                    <option value="usa">usa</option>


                                </select>

                            </div>

                            <div class="col-md-3 form-group">
                                <label>type</label>
                                <input type="text" name="account_name" id="auto" class="form-control">
                            </div>

                            <div class="col-md-3 gaps">
                                <button type="submit" class="btn btn-default pull-left">تائید</button>
                                <button type="reset" class="btn btn-primary pull-left">تنظیم مجدد</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />

        <form action='' method='post'>
            <p><label>Country:</label><input type='text' name='country' value='' class='auto'></p>
        </form>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $(function() {

                //autocomplete
                $(".auto").autocomplete({
                    alert("hghg")
                source: "search.php",
                    minLength: 1
            });

            });
        </script>





