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
                                    <form role="form" action="<?php echo site_url('account/add'); ?>" method="post">

                                        <div class="col-md-3 form-group">

                                            <label>name :</label>
                                            <a href="#new-customer" data-toggle="modal">
                                                <i class="fa fa-plus-circle" data-toggle="tooltip" title="ثبت مشتری جدید" data-placement="top"></i>
                                            </a>
                                            <input type="text"  value="<?php echo set_value('name'); ?>"name="name" class="form-control" data-trigger="hover"/>
                                            <span class="help-inline"><?php echo (form_error('name') ) ? form_error('name') : "<span class='red'>*</span>"; ?></span>
                                
                                        </div>


                                        <div class="col-md-3 form-group">

                                            <label>last name :</label>
                                       
                                            <input type="text"  value="<?php echo set_value('lname'); ?>"name="lname" class="form-control" data-trigger="hover" />
                                            <span class="help-inline"><?php echo (form_error('lname') ) ? form_error('lname') : "<span class='red'>*</span>"; ?></span>
                                
                                        </div>

                                        <div class="col-md-3 form-group">

                                            <label>phone :</label>
                                       
                                            <input type="text"  value="<?php echo set_value('phone'); ?>"name="phone" class="form-control" data-trigger="hover"/>
                                            <span class="help-inline"><?php echo (form_error('phone') ) ? form_error('phone') :""; ?></span>
                                
                                        </div>

                                        <div class="col-md-3 form-group">
                                            <label>type</label>
                                            <select class="form-control" name="type">

                                                <option value="seller">seller</option>
                                                <option value="costumer">costumer</option>
                                                <option value="driver">driver</option>
                                                <option value="stuff">stuf</option>
                                                <option value="exchanger">exchanger</option>
                                            </select>
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

                    <div id="new-customer" class="modal fade" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"></button>
                                    <h3 class="modal-title">ثبت مشتری جدید</h3>
                                </div>
                                <div class="modal-body clearfix">
                                    <form role="form">
                                        <div class="col-md-3 form-group">
                                            <label>نام</label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>تخلص</label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>شماره تماس</label>
                                            <input class="form-control" />
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success" data-dismiss="modal">تائید</button>
                                </div>
                            </div>
                        </div>
                    </div>




                