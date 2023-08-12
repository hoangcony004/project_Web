<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trang chu admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">


    <!-- third party css -->
    <link href="css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false,
         "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img style="border-radius: 50%;" src="images/logo_annhanh.jpg" alt="" width="70px">
                </span>
                <span class="logo-sm">
                    <img style="border-radius: 50%;" src="images/logo_annhanh.jpg" alt="" width="70px">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img style="border-radius: 50%;" src="images/logo_annhanh.jpg" alt="" width="70px">
                </span>
                <span class="logo-sm">
                    <img style="border-radius: 50%;" src="images/logo_annhanh.jpg" alt="" width="70px">
                </span>
            </a>

            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Bảng điều khiển</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span> Bảng điều khiển </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="?controller=trangchu">Thương mại</a>
                                </li>
                                <li>
                                    <a href="#">Phân tích</a>
                                </li>
                                <li>
                                    <a href="#">CRM</a>
                                </li>
                                <li>
                                    <a href="#">Dự án</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title side-nav-item">Ứng dụng</li>

                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Lịch </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Trò chuyện </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Thương mại điện tử </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="?controller=danhsachsanpham">Danh sách sản phẩm</a>
                                </li>
                                <li>
                                    <a href="?controller=donhang">Đơn đặt hàng</a>
                                </li>
                                <li>
                                    <a href="?controller=khachhang">Khách hàng</a>
                                </li>
                                <li>
                                    <a href="?controller=nhacungcap">Người bán</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarquanly" aria-expanded="false" aria-controls="sidebarquanly" class="side-nav-link">
                            <i class="fa-solid fa-layer-group"></i>
                            <span> Quản lý cửa hàng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarquanly">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="?controller=themsanpham">Thêm sản phẩm</a>
                                </li>
                                <li>
                                    <a href="?controller=themkhachhang">Thêm khách hàng</a>
                                </li>
                                <li>
                                    <a href="?controller=themdonhang">Thêm đơn hàng</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="#">Hộp thư đến</a>
                                </li>
                                <li>
                                    <a href="#">Đọc mail</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                            <i class="uil-briefcase"></i>
                            <span> Dự án </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="#">Danh sách</a>
                                </li>
                                <li>
                                    <a href="#">Chi tiết</a>
                                </li>
                                <li>
                                    <a href="#">Gantt <span class="badge rounded-pill badge-light-lighten font-10 float-end">Mới</span></a>
                                </li>
                                <li>
                                    <a href="#">Tạo dự án <span class="badge rounded-pill badge-success-lighten font-10 float-end">Mới</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="uil-rss"></i>
                            <span> Nguồn cấp dữ liệu xã hội </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Nhiệm vụ </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTasks">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-tasks.html">Danh sách</a>
                                </li>
                                <li>
                                    <a href="apps-tasks-details.html">Chi tiết</a>
                                </li>
                                <li>
                                    <a href="apps-kanban.html">Bảng</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Quản lý tập tin </span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Phong tục</li>

                    <li class="side-nav-item">
                        <a href="#" target="_blank" class="side-nav-link">
                            <i class="uil-globe"></i>
                            <span class="badge bg-secondary text-light float-end">Mới</span>
                            <span> Đổ bộ </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                            <i class="uil-window"></i>
                            <span> Bố cục </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="V_namngang.html">Nằm ngang</a>
                                </li>
                                <li>
                                    <a href="V_tachra.html">Tách ra</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title side-nav-item mt-1">Các thành phần</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                            <i class="uil-box"></i>
                            <span> Căn cứ </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="#">Accordions</a>
                                </li>
                                <li>
                                    <a href="#">Alerts</a>
                                </li>
                                <li>
                                    <a href="#">Avatars</a>
                                </li>
                                <li>
                                    <a href="#">Badges</a>
                                </li>
                                <li>
                                    <a href="#">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="#">Buttons</a>
                                </li>
                                <li>
                                    <a href="#">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-embed-video.html">Embed Video</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                            <i class="uil-package"></i>
                            <span> UI mở rộng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="#">Dragula</a>
                                </li>
                                <li>
                                    <a href="#">Range Slider</a>
                                </li>
                                <li>
                                    <a href="#">Ratings</a>
                                </li>
                                <li>
                                    <a href="extended-scrollbar.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="extended-scrollspy.html">Scrollspy</a>
                                </li>
                                <li>
                                    <a href="extended-treeview.html">Treeview</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="#" class="side-nav-link">
                            <i class="uil-layer-group"></i>
                            <span> Tiện ích </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="uil-streering"></i>
                            <span> Biểu tượng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="#">Dripicons</a>
                                </li>
                                <li>
                                    <a href="#">Material Design</a>
                                </li>
                                <li>
                                    <a href="icons-unicons.html">Unicons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-document-layout-center"></i>
                            <span> Các hình thức </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="#">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="form-fileuploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="form-editors.html">Editors</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                            <i class="uil-chart"></i>
                            <span> Biểu đồ </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                        <span> Apex Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarApexCharts">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="charts-apex-area.html">Area</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-bar.html">Bar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-bubble.html">Bubble</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-candlestick.html">Candlestick</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-column.html">Column</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-heatmap.html">Heatmap</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-line.html">Line</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-mixed.html">Mixed</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-pie.html">Pie</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-radar.html">Radar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-radialbar.html">RadialBar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-scatter.html">Scatter</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-sparklines.html">Sparklines</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="charts-brite.html">Britecharts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs</a>
                                </li>
                                <li>
                                    <a href="charts-sparkline.html">Sparklines</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="uil-table"></i>
                            <span> Bảng </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                            <i class="uil-location-point"></i>
                            <span> Bản đồ </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Menu đa cấp </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevel">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                        <span> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarSecondLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                        <span> Third Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarThirdLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                    <span> Item 2 </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarFourthLevel">
                                                    <ul class="side-nav-forth-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Help Box -->
                <div class="help-box text-white text-center">
                    <a href="javascript: void(0);" class="float-end close-btn text-white">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <img src="images/help-icon.svg" height="90" alt="Helper Icon Image">
                    <h5 class="mt-3">Truy cập vô hạn</h5>
                    <p class="mb-3">Nâng cấp tài khoản để có tất cả các quyền.</p>
                    <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Nâng cấp</a>
                </div>
                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Tìm kiếm..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="images/co_vn.png" alt="user-image" class="me-0 me-sm-1" height="12">
                                <span class="align-middle d-none d-sm-inline-block">Tiếng Việt</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Xóa tất cả</small>
                                            </a>
                                        </span>Thông báo
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar="">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Bạn nhận được 1 bình luận
                                            <small class="text-muted">1 phút trước</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">Người dùng mới đăng ký.
                                            <small class="text-muted">5 giờ trước</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="">
                                        </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    Xem tất cả
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-view-apps noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name"><?php echo $user[0]['hovaten'] ?></span>
                                    <span class="account-position"><?php echo $user[0]['chucvu'] ?></span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Chào mừng!</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>Tài khoản của tôi</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>cài đặt</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Hỗ trợ</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Người dùng chặn</span>
                                </a>

                                <!-- item-->
                                <a href="?controller=dangxuat" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Đăng xuất</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control dropdown-toggle" placeholder="Tìm kiếm..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Tìm kiếm</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12 mx-auto">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header py-3 bg-transparent">
                                        <div class="d-sm-flex align-items-center">
                                            <h5 class="mb-2 mb-sm-0">Thêm sản phẩm mới</h5>

                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-8">
                                                <div class="card shadow-none bg-light border">
                                                    <div class="card-body">

                                                        <div class="col-12">
                                                            <label class="form-label">Id nhà cung cấp: </label>
                                                            <input type="text" class="form-control" placeholder="Nhập id nhà cung cấp..." name="idncc">
                                                            <?php if (isset($loi['idncc'])) { ?>
                                                                <p class="text-danger"><?php echo $loi['idncc'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label"> Id danh mục: </label>
                                                            <input type="text" class="form-control" placeholder="Nhập id nhà cung cấp..." name="iddm">
                                                            <?php if (isset($loi['iddm'])) { ?>
                                                                <p class="text-danger"><?php echo $loi['iddm'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Tên sản phẩm: </label>
                                                            <input type="text" class="form-control" placeholder="Nhập tên sản phẩm..." name="tensp">
                                                            <?php if (isset($loi['tensp'])) { ?>
                                                                <p class="text-danger"><?php echo $loi['tensp'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Ảnh: </label>
                                                            <input class="form-control" type="file" name="anh">
                                                            <?php if (isset($loi['anh'])) { ?>
                                                                <p class="text-danger"><?php echo $loi['anh'] ?></p>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Mô tả: </label>
                                                            <textarea class="form-control" placeholder="Nhập mô tả..." rows="4" cols="4" name="mota"></textarea>
                                                            <?php if (isset($loi['mota'])) { ?>
                                                                <p class="text-danger"><?php echo $loi['mota'] ?></p>
                                                            <?php } ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-4">
                                                <div class="card shadow-none bg-light border">
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <label class="form-label">Giá bán: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập giá bán..." name="giamoi">
                                                                <?php if (isset($loi['giamoi'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['giamoi'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Giá cũ: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập giá cũ..." name="giacu">
                                                                <?php if (isset($loi['giacu'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['giacu'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Số lượng: </label>
                                                                <input type="number" class="form-control" placeholder="Nhập số lượng..." name="soluong">
                                                                <?php if (isset($loi['soluong'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['soluong'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <hr>
                                                            <h4>Nguyên liệu</h4>
                                                            <div class="col-12">
                                                                <label class="form-label">Thịt: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên thịt(hoặc để trống)..." name="thit" value="">
                                                                <?php if (isset($loi['thit'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['thit'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Cá: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên cá(hoặc để trống)..." name="ca" value="">
                                                                <?php if (isset($loi['ca'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['ca'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Rau: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên rau(hoặc để trống)..." name="rau" value="">
                                                                <?php if (isset($loi['rau'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['rau'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Củ: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập Tên củ(hoặc để trống)..." name="cu" value="">
                                                                <?php if (isset($loi['cu'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['cu'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Quả: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên quả(hoặc để trống)..." name="qua" value="">
                                                                <?php if (isset($loi['qua'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['qua'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Rau thơm: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên rau(hoặc để trống)..." name="rauthom" value="">
                                                                <?php if (isset($loi['rauthom'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['rauthom'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Gia vị: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên gia vị(hoặc để trống)..." name="giavi" value="">
                                                                <?php if (isset($loi['giavi'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['giavi'] ?></p>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Nguyên liệu khác: </label>
                                                                <input type="text" class="form-control" placeholder="Nhập tên nguyên liệu(hoặc để trống)..." name="nguyenlieukhac" value="">
                                                                <?php if (isset($loi['nguyenlieukhac'])) { ?>
                                                                    <p class="text-danger"><?php echo $loi['nguyenlieukhac'] ?></p>
                                                                <?php } ?>
                                                            </div>

                                                        </div><!--end row-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header py-3 bg-transparent">
                                                <div class="d-sm-flex align-items-center">

                                                    <div class="ms-auto">

                                                        <button type="submit" class="btn btn-primary" name="btn_themsp"><i class="fa-solid fa-plus"></i> Thêm sản phẩm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div><!--end row-->

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Hoàng nà - nguyenduchoang522@gmail.com
                        </div>
                        <div class="col-md-6">
                            <div class="text-md-end footer-links d-none d-md-block">
                                <a href="https://www.facebook.com/profile.php?id=100020891342691">Facebook</a>
                                <a href="javascript: void(0);">Ủng hộ</a>
                                <a href="javascript: void(0);">Liện hệ với chúng tôi.</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="end-bar">

        <div class="rightbar-title">
            <a href="javascript:void(0);" class="end-bar-toggle float-end">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0">Cài đặt</h5>
        </div>

        <div class="rightbar-content h-100" data-simplebar="">

            <div class="p-3">
                <div class="alert alert-warning" role="alert">
                    <strong>Tùy chỉnh </strong> Màu nền, màu menu, v.v...
                </div>

                <!-- Settings -->
                <h5 class="mt-3">Bảng màu</h5>
                <hr class="mt-1">

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked="">
                    <label class="form-check-label" for="light-mode-check">Chế độ sáng</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                    <label class="form-check-label" for="dark-mode-check">Chế độ tối</label>
                </div>


                <!-- Width -->
                <h5 class="mt-4">Chiều rộng</h5>
                <hr class="mt-1">
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked="">
                    <label class="form-check-label" for="fluid-check">Mở rộng</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                    <label class="form-check-label" for="boxed-check">Thu nhỏ</label>
                </div>


                <!-- Left Sidebar-->
                <h5 class="mt-4">Tùy chỉnh menu</h5>
                <hr class="mt-1">
                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                    <label class="form-check-label" for="default-check">Mặc định</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked="">
                    <label class="form-check-label" for="light-check">Sáng</label>
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                    <label class="form-check-label" for="dark-check">Tối</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked="">
                    <label class="form-check-label" for="fixed-check">Đã sửa</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                    <label class="form-check-label" for="condensed-check">Cô đọng</label>
                </div>

                <div class="form-check form-switch mb-1">
                    <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                    <label class="form-check-label" for="scrollable-check">Có thể cuộn</label>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary" id="resetBtn">Đặt về mặc định</button>

                    <a href="#" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Nâng cấp ngay</a>
                </div>
            </div> <!-- end padding-->

        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->

    <!-- bundle -->
    <script src="js/vendor.min.js"></script>
    <script src="js/app.min.js"></script>

    <!-- third party js -->
    <script src="js/vendor/apexcharts.min.js"></script>
    <script src="js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="js/pages/demo.dashboard.js"></script>
    <!-- end demo js-->
</body>

</html>