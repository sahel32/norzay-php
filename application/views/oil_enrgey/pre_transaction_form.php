 <div class="row">
                    <div class="col-md-12">
                     <h2><?php  echo $main_title; ?></h2>   
                        <h5><?php  echo $desc; ?></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <?php  echo $sub_title; ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form">

                                        <div class="col-md-3 form-group">
                                            <label><?php echo $pre_date;?></label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><?php echo $pre_date_2;?></label>
                                            <input class="form-control"  />
                                        </div>
                                        
                                        <div class="col-md-3 form-group">
                                            <label>نوع تیل</label>
                                            <select class="form-control">
                                                <option>پطرول</option>
                                                <option>دیزل</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><?php echo $stock_label;?></label>
                                            <select class="form-control">
                                            <?php 
									  	
									  	foreach ($stock_rows as $key => $value) {?>
											
											<option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
											
											<?php }?>
                                            
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label><?php echo $account_label;?></label>
                                            <select class="form-control">
                                            <?php 
									  	
									  	foreach ($account_rows as $key => $value) {?>
											
											<option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>
											
											<?php }?>
                                            
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>نوع فروش</label>
                                            <select class="form-control" id="measurement-type" >
                                            <option value="car">بر اساس موتر</option>
                                                <option value="ton">بر اساس تن</option>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>تعداد موتر</label>
                                            <input class="form-control"  id="car-number" />
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>مقدار</label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="col-md-3 form-group">
                                            <label>فی تن</label>
                                            <input class="form-control" />
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>شرح و تفصیلات</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="col-md-offset-3 col-md-3 gap">
                                        <button type="submit" class="btn btn-default pull-left">تائید</button>
                                        <button type="reset" class="btn btn-primary pull-left">تنظیم مجدد</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
             <!-- /. PAGE INNER  -->

             <script>

             	$(document).ready(function(){

             		
             		//alert("hi")
             	})
             	

             	$("#measurement-type").change(function (){
             		var value=$(this).val()
             		if(value=="ton"){
             			$("#car-number").attr('disabled','disabled');  
             		}else{
             			$("#car-number").attr('enabled','enabled'); 
             		}


             	})
             	
             </script>