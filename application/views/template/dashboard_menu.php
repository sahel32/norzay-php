       <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="<?php echo asset_url('img/find_user.png'); ?>" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> داشبورد</a>
                    </li>
                    <li>
                        <a  href="ui.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/stock.png'); ?>" alt="stock"/></i> گدام</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php  echo site_url('stock/add');?>">گدام جدید</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('stock/lists');?>">گدام ها</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/safebox.png'); ?>" alt="safebox"/></i> صندوق</a>
                    </li>
                    <li  >
                        <a  href="chart.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/buys.png'); ?>" alt="buys"/></i> خریدها</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php  echo site_url('oil/lists/buy/fact');?>">خریدهای</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('oil/fact_buy');?>"> خرید جدید</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('oil/lists/buy/pre');?>">لیست پیش خرید ها</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('oil/pre_buy_sell/buy');?>">پیش خرید جدید</a>
                            </li>
                        </ul>
                    </li>
                    <li  >
                        <a  href="chart.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/sells.png'); ?>" alt="sells"/></i> فروشات</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php  echo site_url('oil/lists/sell/fact');?>">فروشات</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('oil/sell');?>"> فروش جدید</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('oil/lists/sell/pre');?>">لیست پیش فروش ها</a>
                            </li>
                            <li>
                                <a href="<?php  echo site_url('oil/pre_buy_sell/sell');?>">پیش فروش جدید</a>
                            </li>
                        </ul>
                    </li>   
                      <li  >
                        <a  href="table.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/reports.png'); ?>" alt="reports"/></i> گزارشات</a>
                    </li>
                    <li  >
                        <a  href="chart.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/accounts.png'); ?>" alt="accounts"/></i> حساب ها</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('account/lists/seller');?>">حساب فروشنده های تیل</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('account/lists/customer');?>">حساب خریدار های تیل</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('account/lists/exchanger');?>">حساب صرافی ها</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('account/lists/stuff');?>">حساب کمیشن کار ها</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('account/lists/driver');?>">حساب راننده ها</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('account/lists/stuff');?>">حساب کارکنان</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("account/add") ?>">حساب جدید</a>
                            </li>
                        </ul>
                    </li>
                     <li  >
                        <a  href="chart.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/debits.png'); ?>" alt="debits"/></i> پرداخت ها</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">ثبت پیش خرید</a>
                            </li>
                            <li>
                                <a href="#">ثبت خرید</a>
                            </li>
                        </ul>
                    </li>
                    <li  >
                        <a  href="chart.html"><i><img class="sidebar-menu" src="<?php echo asset_url('img/credits.png'); ?>" alt="credits"/></i> دریافت ها</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">ثبت پیش فروش</a>
                            </li>
                            <li>
                                <a href="#">ثبت فروش</a>
                            </li>
                        </ul>
                    </li>
                        
                </ul>
               
            </div>
            
        </nav>


        <div id="page-wrapper" >
            <div id="page-inner">