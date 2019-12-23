<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?php echo base_url('assets/img/basic/logo.png')?>" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php echo base_url('assets/img/dummy/kepala.png')?>" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Kadis</h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profile
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Change Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview"><a href="#">
                <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span> <i
                    class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url()?>" ><i class="icon icon-folder5"></i>Dashboard Utama</a>
                    </li>
                   
                    </li>
                    <li><a href="<?php echo base_url('main/dashboard2')?>"><i class="icon icon-folder5"></i>Panel Dashboard 2</a>
                    </li>
                    <li><a href="<?php echo base_url('main/dashboard3')?>"><i class="icon icon-folder5"></i>Panel Dashboard 3</a>
                    </li>
                    <li><a href="<?php echo base_url('main/dashboard4')?>"><i class="icon icon-folder5"></i>Panel Dashboard 4</a>
                    </li>
                    <li><a href="<?php echo base_url('main/dashboard5')?>"><i class="icon icon-folder5"></i>Panel Dashboard 5</a>
                    </li>
                    <li><a href="<?php echo base_url('main/dashboard6')?>"><i class="icon icon-folder5"></i>Panel Dashboard 6</a>
                    </li>
                    <li><a href="<?php echo base_url('main/dashboard7')?>"><i class="icon icon-folder5"></i>Panel Dashboard 7</a></li>
                    <li><a href="<?php echo base_url('main/dashboard8')?>"><i class="icon icon-folder5"></i>Panel Dashboard 8</a></li>
                    <li><a href="<?php echo base_url('main/dashboard9')?>"><i class="icon icon-folder5"></i>Panel Dashboard 9</a></li>
                    <li><a href="<?php echo base_url('main/dashboard10')?>"><i class="icon icon-folder5"></i>Panel Dashboard 10</a></li>
                    <li><a href="<?php echo base_url('main/dashboard11')?>"><i class="icon icon-folder5"></i>Panel Dashboard 11</a></li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Harga Barang</span>
                <span class="badge r-3 badge-primary pull-right">4</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('main/products')?>"><i class="icon icon-circle-o"></i>All Products</a>
                    </li>
                    <li><a href="<?php echo base_url('main/products_create')?>"><i class="icon icon-add"></i>Add
                        New </a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Users<i
                    class="icon icon-angle-left s-18 pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('main/users')?>"><i class="icon icon-circle-o"></i>All Users</a>
                    </li>
                    <li><a href="<?php echo base_url('main/users_create')?>"><i class="icon icon-add"></i>Add User</a>
                    </li>
                    <li><a href="<?php echo base_url('main/profile')?>"><i class="icon icon-user"></i>User Profile </a>
                    </li>
                </ul>
            </li>
            <li class="treeview no-b"><a href="#">
                <i class="icon icon-package light-green-text s-18"></i>
                <span>Inbox</span>
                <span class="badge r-3 badge-success pull-right">20</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('main/inbox')?>"><i class="icon icon-circle-o"></i>All Messages</a>
                    </li>
                    <li><a href="<?php echo base_url('main/panel7_inbox')?>"><i class="icon icon-circle-o"></i>Panel7 - Inbox</a>
                    </li>
                    <li><a href="<?php echo base_url('main/panel8_inbox')?>"><i class="icon icon-circle-o"></i>Panel8 - Inbox</a>
                    </li>
                    <li><a href="<?php echo base_url('main/inbox_create')?>"><i class="icon icon-add"></i>Compose</a>
                    </li>
                </ul>
            </li>
            <li class="header light mt-3"><strong>UI COMPONENTS</strong></li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-package text-lime s-18"></i> <span>Apps</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('main/chat')?>"><i class="icon icon-circle-o"></i>Chat</a>
                    </li>
                    <li><a href="<?php echo base_url('main/tasks')?>"><i class="icon icon-circle-o"></i>Tasks / Todo</a>
                    </li>
                    <li><a href="<?php echo base_url('main/calendar')?>"><i class="icon icon-date_range"></i>Calender</a>
                    </li>
                    <li><a href="<?php echo base_url('main/calendar2')?>"><i class="icon icon-date_range"></i>Calender 2</a>
                    </li>
                    <li><a href="<?php echo base_url('main/contacts')?>"><i class="icon icon-circle-o"></i>Contacts</a>
                    </li>
                    <li><a href="<?php echo base_url('main/projects')?>"><i class="icon icon-circle-o"></i>Panel1 - Projects</a>
                    </li>
                    <li><a href="<?php echo base_url('main/projects_list')?>"><i class="icon icon-circle-o"></i>Panel7 - Projects List</a>
                    </li>
                    <li><a href="<?php echo base_url('main/invoices')?>"><i class="icon icon-circle-o"></i>Invoices</a>
                    <li><a href="<?php echo base_url('main/meetings')?>"><i class="icon icon-circle-o"></i>Meetings</a>
                    <li><a href="<?php echo base_url('main/payments')?>"><i class="icon icon-circle-o"></i>Payments</a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-documents3 text-blue s-18"></i> <span>Pages</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-documents3"></i>Blank Pages<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('main/blank')?>"><i class="icon icon-document"></i>Simple Blank</a>
                            </li>
                            <li><a href="<?php echo base_url('main/blank_tabs')?>"><i class="icon icon-document"></i>Tabs Blank <i
                                    class="icon icon-angle-left s-18 pull-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-fingerprint text-green"></i>Auth Pages<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('main/login1')?>"><i class="icon icon-document"></i>Login Page 1</a>
                            </li>
                            <li><a href="<?php echo base_url('main/login2')?>"><i class="icon icon-document"></i>Login Page 2</a>
                            </li>
                            <li><a href="<?php echo base_url('main/login3')?>"><i class="icon icon-document"></i>Login Page 3</a>
                            </li>
                            <li><a href="<?php echo base_url('main/login4')?>"><i class="icon icon-document"></i>Login Page 4</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-bug text-red"></i>Error Pages<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('main/error404')?>"><i class="icon icon-document"></i>404 Page</a>
                            </li>
                            <li><a href="<?php echo base_url('main/error500')?>"><i class="icon icon-document"></i>500 Page<i
                                    class="icon icon-angle-left s-18 pull-right"></i></a>
                            </li>
                            <li><a href="<?php echo base_url('main/error420')?>"><i class="icon icon-document"></i>420 Page<i
                                    class="icon icon-angle-left s-18 pull-right"></i></a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon icon-documents3"></i>Other Pages<i
                            class="icon icon-angle-left s-18 pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?php echo base_url('main/invoice')?>"><i class="icon icon-document"></i>Invoice Page</a>
                            </li>
                            <li><a href="<?php echo base_url('main/no_posts')?>"><i class="icon icon-document"></i>No Post Page</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-goals-1 amber-text s-18"></i> <span>Elements</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('main/widgets')?>">
                        <i class="icon icon-widgets amber-text s-14"></i> <span>Widgets</span>
                    </a>
                    </li>
                    <li><a href="<?php echo base_url('main/counters')?>">
                        <i class="icon icon-filter_9_plus amber-text s-14"></i> <span>Counters</span>
                    </a>
                    <li><a href="<?php echo base_url('main/buttons')?>">
                        <i class="icon icon-touch_app amber-text s-14"></i> <span>Buttons</span>
                    </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/typography')?>">
                            <i class="icon icon-text-width amber-text s-14"></i> <span>Typography</span>
                        </a>
                    </li>
                    <li><a href="<?php echo base_url('main/tabels')?>">
                        <i class="icon icon-table amber-text s-14"></i> <span>Tables</span>
                    </a>
                    </li>
                    <li><a href="<?php echo base_url('main/alerts')?>">
                        <i class="icon icon-exclamation-circle amber-text s-14"></i> <span>Alerts</span>
                    </a>
                    </li>
                    <li><a href="<?php echo base_url('main/slider')?>"><i class="icon icon-view_carousel amber-text s-14"></i>
                        <span>Slider</span></a></li>
                    <li><a href="<?php echo base_url('main/slider')?>"><i class="icon icon-folders2 amber-text s-14"></i>
                        <span>Tabs</span></a></li>
                    <li><a href="<?php echo base_url('main/progress')?>"><i class="icon icon-folders2 amber-text s-14"></i>
                        <span>Progress Bars</span></a></li>
                    <li><a href="<?php echo base_url('main/badges')?>"><i class="icon icon-flag7 amber-text s-14"></i>
                        <span>Badges</span></a></li>
                    <li><a href="<?php echo base_url('main/preloaders')?>"><i class="icon icon-data_usage amber-text s-14"></i>
                        <span>Preloaders</span></a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="icon icon-wpforms light-green-text s-18 "></i> <span>Forms & Plugins</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('main/inputs')?>"><i class="icon icon-wpforms light-green-text"></i>Bootstrap
                        Inputs</a>
                    </li>
                    <li><a href="<?php echo base_url('main/form_jquery')?>"><i class="icon icon-note-important light-green-text"></i>
                        Form Validation (Jquery)</a>
                    </li>
                    <li><a href="<?php echo base_url('main/form_bootstrap')?>"><i class="icon icon-note-important light-green-text"></i>
                        Form Validation (Bootstrap)</a>
                    </li>
                    <li><a href="<?php echo base_url('main/editor')?>"><i class="icon icon-pen2 light-green-text"></i>Editor</a>
                    </li>
                    <li><a href="<?php echo base_url('main/toast')?>"><i
                            class="icon icon-notifications_active light-green-text"></i>Toasts</a>
                    </li>
                    <li><a href="<?php echo base_url('main/stepper')?>"><i class="icon icon-burst_mode light-green-text"></i>Stepper</a>
                    </li>
                    <li><a href="<?php echo base_url('main/date_time')?>"><i
                            class="icon icon-date_range light-green-text"></i>Date Time Picker</a>
                    </li>
                    <li><a href="<?php echo base_url('main/colors')?>"><i class="icon icon-adjust light-green-text"></i>Color
                        Picker</a>
                    </li>
                    <li><a href="<?php echo base_url('main/range_slider')?>"><i class="icon icon-space_bar light-green-text"></i>Range
                        Slider</a>
                    </li>
                    <li><a href="<?php echo base_url('main/select2')?>"><i
                            class="icon  icon-one-finger-click light-green-text"></i>Select 2</a>
                    </li>
                    <li><a href="<?php echo base_url('main/tags')?>"><i class="icon  icon-tags3 light-green-text"></i>Tags</a>
                    </li>
                    <li><a href="<?php echo base_url('main/datatables')?>"><i class="icon icon-table light-green-text"></i>Data
                        Tables</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-bar-chart2 pink-text s-18"></i>
                <span>Charts</span>
                <i class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('main/charts')?>"><i class="icon icon-area-chart pink-text s-14"></i><span>Charts.Js</span></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/morris')?>"><i class="icon icon-bubble_chart pink-text s-14"></i>Morris
                            Charts</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/echarts')?>">
                            <i class="icon icon-bar-chart-o pink-text s-14"></i>Echarts</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/easy_pie')?>">
                            <i class="icon icon-area-chart pink-text s-14"></i>Easy Pie Charts</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/jqvmap')?>">
                            <i class="icon icon-map pink-text s-14"></i>Jqvmap</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/sparklines')?>">
                            <i class="icon icon-line-chart2 pink-text s-14"></i>Sparklines</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/float')?>">
                            <i class="icon icon-pie-chart pink-text s-14"></i>Float Charts</a>
                    </li>
                </ul>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon-dialpad blue-text  s-18"></i>
                <span>Extra</span>
                <i class="icon icon-angle-left s-18 pull-right"></i>
            </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="<?php echo base_url('main/avatar')?>">
                            <i class="icon icon-brightness_auto light-blue-text s-14"></i>
                            <span>Avatar Placeholders</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('main/icons')?>">
                            <i class="icon icon-camera2 light-blue-text s-14"></i> <span>Icons</span>
                        </a>
                    </li>
                    <li><a href="<?php echo base_url('main/color')?>">
                        <i class="icon icon-palette light-blue-text s-14"></i> <span>Colors</span>
                    </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->