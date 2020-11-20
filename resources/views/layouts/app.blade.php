<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="icon" href="/admin/img/core-img/favicon.ico">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="/admin/js/apexchart/apexchart.css">
    <link rel="stylesheet" href="/admin/js/default-assets/vector-map/jquery-jvectormap-2.0.2.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="/admin/style.css">
    <!-- Styles -->
</head>

<body>
    <div id="preloader" class="d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Choose Layout -->
    <div class="choose-layout-area">
        <div class="setting-trigger-icon" id="settingTrigger">
            <i class="lni lni-cog"></i>
        </div>
        <div class="choose-layout" id="chooseLayout">
            <h5 class="mb-30">Choose A Layout</h5>
            <div class="demos-content">
                <div class="single-demos">
                    <a href="../../sidebar-dark/dist/index.html"><img src="/admin/img/demo-img/sd.png" alt=""></a>
                    <span>Default</span>
                </div>
                <div class="single-demos">
                    <a href="../../vertical-light/dist/index.html"><img src="/admin/img/demo-img/vl.png" alt=""></a>
                    <span>Vertical Light</span>
                </div>
                <div class="single-demos">
                    <a href="../../small-menu/dist/index.html"><img src="/admin/img/demo-img/sm.png" alt=""></a>
                    <span>Small Menu</span>
                </div>
                <div class="single-demos">
                    <a href="../../sidebar-gradients/dist/index.html"><img src="/admin/img/demo-img/sg.png" alt=""></a>
                    <span>Sidebar Gradients</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Settings Panel -->
    <div class="quick-settings-panel">
        <div id="quicksettingCloseIcon"><i class='lni lni-close'></i></div>

        <div id="quickSettingPanel">
            <div class="quick-setting-tab">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs" id="quickSettingTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-list-tab" data-toggle="tab" href="#to-do-list" role="tab"
                            aria-controls="to-do-list" aria-selected="true">Todo List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                            aria-controls="settings" aria-selected="false">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="notifications-tab" data-toggle="tab" href="#notifications" role="tab"
                            aria-controls="notifications" aria-selected="false">Notifications</a>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content" id="quickSettingTabContent">
                    <div class="tab-pane fade show active" id="to-do-list" role="tabpanel"
                        aria-labelledby="todo-list-tab">
                        <div class="widgets-todo-list-area">
                            <!-- Item Add Form -->
                            <form id="form-add-todo" class="form-add-todo">
                                <input type="text" id="new-todo-item" class="new-todo-item" name="todo"
                                    placeholder="Add New">
                                <input type="submit" id="add-todo-item" class="add-todo-item" value="Add">
                            </form>

                            <!-- Item Show Form -->
                            <form id="form-todo-list">
                                <ul id="ecapsToDo-list" class="todo-list">
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="test">
                                            <span></span>
                                        </label> Go to Market
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Meeting with AD
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Check Mail
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Work for Theme
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Buy Some Vegetables
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Call CEO
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Create a Plugin
                                        <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                    <li>
                                        <label class="ckbox">
                                            <input type="checkbox" name="todo-item-done" class="todo-item-done"
                                                value="hello">
                                            <span></span>
                                        </label> Fixed Template Issues <i class="todo-item-delete lni lni-trash"></i>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <div class="quick-setting-option">
                            <h6 class="mb-4">Quick Settings</h6>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch2" tabindex="1">
                                <label for="on-off-switch2">Get Feedbacks</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch3" checked="" tabindex="1">
                                <label for="on-off-switch3">Notifications</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch4" tabindex="1">
                                <label for="on-off-switch4">Todo Lists</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch5" tabindex="1">
                                <label for="on-off-switch5">Top Header</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch6" checked="" tabindex="1">
                                <label for="on-off-switch6">Sidebar</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="color-setting-option mt-5">
                            <h6 class="mb-4">Color Options</h6>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch8" tabindex="1">
                                <label for="on-off-switch8">Light Sidebar</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch9" tabindex="1">
                                <label for="on-off-switch9">Dark Topbar</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch10" checked=""
                                    tabindex="1">
                                <label for="on-off-switch10">Footer Color</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch11" tabindex="1">
                                <label for="on-off-switch11">Header Dark</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Setting -->
                            <div class="toggle-group mb-4">
                                <input type="checkbox" name="on-off-switch" id="on-off-switch12" checked=""
                                    tabindex="1">
                                <label for="on-off-switch12">Prelaoder Color</label>
                                <div class="onoffswitch" aria-hidden="true">
                                    <div class="onoffswitch-label">
                                        <div class="onoffswitch-inner"></div>
                                        <div class="onoffswitch-switch"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="notifications" role="tabpanel" aria-labelledby="notifications-tab">
                        <!-- Notifications Box -->
                        <div class="notifications-box">
                            <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>We've got
                                    something for you!</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-danger"></i><span>Domain names
                                    expiring on Tuesday</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-checkmark"></i><span>Your commissions
                                    has been sent</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>You sold an
                                    item!</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-warning"></i><span>Security
                                    alert for your linked Google account</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>We've got
                                    something for you!</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-danger"></i><span>Domain names
                                    expiring on Tuesday</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-checkmark"></i><span>Your commissions
                                    has been sent</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-heart bg-success"></i><span>You sold an
                                    item!</span></a>
                            <a href="#" class="nav-link px-2"><i class="lni lni-alarm bg-warning"></i><span>Security
                                    alert for your linked Google account</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper sidebar-light">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Logo -->
            <div class="ecaps-logo">
                <a href="index.html">
                    <img class="desktop-logo" src="/admin/img/core-img/logo.png" alt="Desktop Logo">
                    <img class="small-logo" src="/admin/img/core-img/small-logo.png" alt="Mobile Logo">
                </a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="active">
                                <a href="index.html"><i class='lni lni-home'></i><span>Dashboard</span></a>
                            </li>
                            <li><a href="widgets.html"><i class='lni lni-cog'></i><span>Widgets</span></a></li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class='lni lni-package'></i><span>Applications</span> <i
                                        class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="calendar.html">Calender</a></li>
                                    <li><a href="chat-box.html">Chat Box</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">

                <!-- Left Side Content -->
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="index.html"><img src="/admin/img/core-img/small-logo.png" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class='lni lni-grid-alt'></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class='lni lni-grid-alt'></i>
                        </div>
                    </div>
                </div>

                <!-- Right Side Navbar -->
                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class='lni lni-grid-alt'></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="/admin/img/member-img/team-2.jpg"
                                    alt=""></button>

                            <!-- Dropdown Menu -->
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <div class="user-profile-heading">
                                        <!-- Thumb -->
                                        <div class="profile-thumbnail">
                                            <img src="/admin/img/member-img/team-2.jpg" alt="">
                                        </div>
                                        <!-- Profile Text -->
                                        <div class="profile-text">
                                            <h6>Nazrul Islam</h6>
                                            <span>help@example.com</span>
                                        </div>
                                    </div>

                                    <a href="#" class="dropdown-item"><i class='lni lni-user'></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class='lni lni-envelope'></i> Messages</a>
                                    <a href="#" class="dropdown-item"><i class='lni lni-cog'></i> Account settings</a>
                                    <a href="#" class="dropdown-item"><i class='lni lni-heart'></i> Support</a>
                                    <a  href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='lni lni-lock'></i> Sign-out</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </header>

            <!-- Main Content Area -->
            <div class="main-content">
                @yield('content')
                <!-- Footer Area -->
                <footer class="footer-area d-flex align-items-center flex-wrap">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p>Ecaps &copy; 2020 created by <a href="https://wrapbootstrap.com/user/DesigningWorld"
                                target="_blank">Designing World</a></p>
                    </div>
                    <!-- Footer Nav -->
                    <ul class="footer-nav d-flex align-items-center">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Purchase</a></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>


    <script src="/admin/js/jquery.min.js"></script>
    <script src="/admin/js/popper.min.js"></script>
    <script src="/admin/js/bootstrap.min.js"></script>
    <script src="/admin/js/ecaps.bundle.js"></script>
    <script src="/admin/js/default-assets/todolist.js"></script>
    <script src="/admin/js/default-assets/date-time.js"></script>

    <!-- Active JS -->
    <script src="/admin/js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="/admin/js/apexchart/apexchart.js"></script>
    <script src="/admin/js/apexchart/pageviews.js"></script>
    <script src="/admin/js/apexchart/revenuebar.js"></script>
    <script src="/admin/js/apexchart/sales-overview.js"></script>
    <script src="/admin/js/apexchart/order-statistics.js"></script>
    <script src="/admin/js/apexchart/yearly-sales.js"></script>
    <script src="/admin/js/apexchart/dailysales.js"></script>
    <script src="/admin/js/apexchart/catagory.js"></script>

    <script src="/admin/js/default-assets/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/admin/js/default-assets/vector-map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/js/default-assets/vector-map/jvectormap.custom.js"></script>
</body>

</html>
