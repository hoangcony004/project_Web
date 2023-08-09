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
                                        <a href="V_trangchu.html">Thương mại</a>
                                    </li>
                                    <li>
                                        <a href="V_phantich.html">Phân tích</a>
                                    </li>
                                    <li>
                                        <a href="dashboard-crm.html">CRM</a>
                                    </li>
                                    <li>
                                        <a href="V_duan.html">Dự án</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item">Ứng dụng</li>

                        <li class="side-nav-item">
                            <a href="V_lich.html" class="side-nav-link">
                                <i class="uil-calender"></i>
                                <span> Lịch </span>
                            </a>
                        </li>

                        <li class="side-nav-item">
                            <a href="V_trochuyen.html" class="side-nav-link">
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
                                        <a href="V_chitietsanpham.html">Chi tiết sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="V_dondathang.html">Đơn đặt hàng</a>
                                    </li>
                                    <li>
                                        <a href="V_chitietdathang.html">Chi tiết đặt hàng</a>
                                    </li>
                                    <li>
                                        <a href="V_danhsachkhachhang.html">Khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="V_nguoiban.html">Giỏ hàng</a>
                                    </li>
                                    <li>
                                        <a href="V_thanhtoan.html">Thanh toán</a>
                                    </li>
                                    <li>
                                        <a href="V_nguoiban.html">Người bán</a>
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
                                        <a href="V_themsanpham.html">Thêm sản phẩm</a>
                                    </li>
                                    <li>
                                        <a href="V_themkhachhang.html">Thêm khách hàng</a>
                                    </li>
                                    <li>
                                        <a href="V_themdonhang.html">Thêm đơn hàng</a>
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
                                        <a href="V_inbox.html">Hộp thư đến</a>
                                    </li>
                                    <li>
                                        <a href="V_read.html">Đọc mail</a>
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
                                        <a href="V_ds_duan.html">Danh sách</a>
                                    </li>
                                    <li>
                                        <a href="V_chitiet_duan.html">Chi tiết</a>
                                    </li>
                                    <li>
                                        <a href="V_gantt_duan.html">Gantt <span class="badge rounded-pill badge-light-lighten font-10 float-end">Mới</span></a>
                                    </li>
                                    <li>
                                        <a href="V_taoduan.html">Tạo dự án <span class="badge rounded-pill badge-success-lighten font-10 float-end">Mới</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="apps-social-feed.html" class="side-nav-link">
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
                            <a href="V_quanlytaptin.html" class="side-nav-link">
                                <i class="uil-folder-plus"></i>
                                <span> Quản lý tập tin </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Phong tục</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                                <i class="uil-copy-alt"></i>
                                <span> Trang </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarPages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="V_hoso.html">Hồ sơ</a>
                                    </li>
                                    <li>
                                        <a href="V_hoso2.html">Hồ sơ 2</a>
                                    </li>
                                    <li>
                                        <a href="V_hoadon.html">Hóa đơn</a>
                                    </li>
                                    <li>
                                        <a href="V_cauhoithuonggap.html">Câu hỏi thường gặp</a>
                                    </li>
                                    <li>
                                        <a href="V_dinhgia.html">Định giá</a>
                                    </li>
                                    <li>
                                        <a href="V_baotri.html">Bảo trì</a>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                                            <span> Xác thực </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPagesAuth">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="V_login.html">Đăng nhập</a>
                                                </li>
                                                <li>
                                                    <a href="V_login2.html">Đăng nhập 2</a>
                                                </li>
                                                <li>
                                                    <a href="V_dki.html">Đăng kí</a>
                                                </li>
                                                <li>
                                                    <a href="V_dki2.html">Đăng kí 2</a>
                                                </li>
                                                <li>
                                                    <a href="V_logout.html">Đăng xuất</a>
                                                </li>
                                                <li>
                                                    <a href="V_logout2.html">Đăng xuất 2</a>
                                                </li>
                                                <li>
                                                    <a href="V_khoiphucmatkhau.html">Khôi phục mật khẩu</a>
                                                </li>
                                                <li>
                                                    <a href="V_khoiphucmatkhau2.html">Khôi phục mật khẩu 2</a>
                                                </li>
                                                <li>
                                                    <a href="V_manhinhkhoa.html">Màn hình khóa</a>
                                                </li>
                                                <li>
                                                    <a href="V_manhinhkhoa2.html">Màn hình khóa 2</a>
                                                </li>
                                                <li>
                                                    <a href="V_xacnhanthu.html">Xác nhận thư</a>
                                                </li>
                                                <li>
                                                    <a href="pages-confirm-mail-2.html">Xác nhận thư 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                                            <span> Lỗi </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="sidebarPagesError">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                <a href="pages-404.html">Error 404</a>
                                            </li>
                                            <li>
                                                <a href="pages-404-alt.html">Error 404-alt</a>
                                            </li>
                                            <li>
                                                <a href="pages-500.html">Error 500</a>
                                            </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="V_trangbatdau.html">Trang bắt đầu</a>
                                    </li>
                                    <li>
                                        <a href="V_taitruoc.html">Tải trước</a>
                                    </li>
                                    <li>
                                        <a href="V_mocthoigian.html">Mốc thời gian</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a href="landing.html" target="_blank" class="side-nav-link">
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
                                        <a href="ui-accordions.html">Accordions</a>
                                    </li>
                                    <li>
                                        <a href="ui-alerts.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="ui-avatars.html">Avatars</a>
                                    </li>
                                    <li>
                                        <a href="ui-badges.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="ui-breadcrumb.html">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a href="ui-buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="ui-cards.html">Cards</a>
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
                                        <a href="extended-dragula.html">Dragula</a>
                                    </li>
                                    <li>
                                        <a href="extended-range-slider.html">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="extended-ratings.html">Ratings</a>
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
                            <a href="widgets.html" class="side-nav-link">
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
                                        <a href="icons-dripicons.html">Dripicons</a>
                                    </li>
                                    <li>
                                        <a href="icons-mdi.html">Material Design</a>
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
                                        <a href="form-elements.html">Basic Elements</a>
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
                                                <img src="images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt=""> </div>
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
                                                <img src="images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt=""> </div>
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
                    </div>
                    <!-- end Topbar -->
                    
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Thương mại</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-5 col-lg-6">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-account-multiple widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Customers">Khách hàng</h5>
                                                <h3 class="mt-3 mb-3">36,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                                    <span class="text-nowrap">Từ tháng trước</span>  
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-cart-plus widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Number of Orders">Đơn đặt hàng</h5>
                                                <h3 class="mt-3 mb-3">5,543</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                                    <span class="text-nowrap">Từ hôm qua</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-currency-usd widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Average Revenue">Doanh thu</h5>
                                                <h3 class="mt-3 mb-3">$6,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                                    <span class="text-nowrap">Từ tuần trước</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->

                                    <div class="col-lg-6">
                                        <div class="card widget-flat">
                                            <div class="card-body">
                                                <div class="float-end">
                                                    <i class="mdi mdi-pulse widget-icon"></i>
                                                </div>
                                                <h5 class="text-muted fw-normal mt-0" title="Growth">Sự phát triển</h5>
                                                <h3 class="mt-3 mb-3">+ 30.56%</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                    <span class="text-nowrap">Từ tháng trước</span>
                                                </p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end card-->
                                    </div> <!-- end col-->
                                </div> <!-- end row -->

                            </div> <!-- end col -->

                            <div class="col-xl-7 col-lg-6">
                                <div class="card card-h-100">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Projections Vs Actuals</h4>

                                        <div dir="ltr">
                                            <div id="high-performing-product" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                                        </div>
                                            
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-3">Revenue</h4>

                                        <div class="chart-content-bg">
                                            <div class="row text-center">
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Current Week</p>
                                                    <h2 class="fw-normal mb-3">
                                                        <small class="mdi mdi-checkbox-blank-circle text-primary align-middle me-1"></small>
                                                        <span>$58,254</span>
                                                    </h2>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="text-muted mb-0 mt-3">Previous Week</p>
                                                    <h2 class="fw-normal mb-3">
                                                        <small class="mdi mdi-checkbox-blank-circle text-success align-middle me-1"></small>
                                                        <span>$69,524</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dash-item-overlay d-none d-md-block" dir="ltr">
                                            <h5>Today's Earning: $2,562.30</h5>
                                            <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                                Etiam rhoncus...</p>
                                            <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                                                <i class="mdi mdi-arrow-right ms-2"></i>
                                            </a>
                                        </div>
                                        <div dir="ltr">
                                            <div id="revenue-chart" class="apex-charts mt-3" data-colors="#727cf5,#0acf97"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Revenue By Location</h4>
                                        <div class="mb-4 mt-4">
                                            <div id="world-map-markers" style="height: 224px"></div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal">New York</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value fw-bold">72k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal">San Francisco</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value fw-bold">39k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal">Sydney</h5>
                                        <div class="progress-w-percent">
                                            <span class="progress-value fw-bold">25k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <h5 class="mb-1 mt-0 fw-normal">Singapore</h5>
                                        <div class="progress-w-percent mb-0">
                                            <span class="progress-value fw-bold">61k </span>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="" class="btn btn-sm btn-link float-end">Export
                                            <i class="mdi mdi-download ms-1"></i>
                                        </a>
                                        <h4 class="header-title mt-2 mb-3">Top Selling Products</h4>

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">ASOS Ridley High Waist</h5>
                                                            <span class="text-muted font-13">07 April 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$79.49</h5>
                                                            <span class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">82</h5>
                                                            <span class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$6,518.18</h5>
                                                            <span class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Marco Lightweight Shirt</h5>
                                                            <span class="text-muted font-13">25 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$128.50</h5>
                                                            <span class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">37</h5>
                                                            <span class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$4,754.50</h5>
                                                            <span class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Half Sleeve Shirt</h5>
                                                            <span class="text-muted font-13">17 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$39.99</h5>
                                                            <span class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">64</h5>
                                                            <span class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$2,559.36</h5>
                                                            <span class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Lightweight Jacket</h5>
                                                            <span class="text-muted font-13">12 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$20.00</h5>
                                                            <span class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">184</h5>
                                                            <span class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$3,680.00</h5>
                                                            <span class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">Marco Shoes</h5>
                                                            <span class="text-muted font-13">05 March 2018</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$28.49</h5>
                                                            <span class="text-muted font-13">Price</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">69</h5>
                                                            <span class="text-muted font-13">Quantity</span>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-14 my-1 fw-normal">$1,965.81</h5>
                                                            <span class="text-muted font-13">Amount</span>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title">Total Sales</h4>

                                        <div id="average-sales" class="apex-charts mb-4 mt-4" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>
                                       

                                        <div class="chart-widget-list">
                                            <p>
                                                <i class="mdi mdi-square text-primary"></i> Direct
                                                <span class="float-end">$300.56</span>
                                            </p>
                                            <p>
                                                <i class="mdi mdi-square text-danger"></i> Affilliate
                                                <span class="float-end">$135.18</span>
                                            </p>
                                            <p>
                                                <i class="mdi mdi-square text-success"></i> Sponsored
                                                <span class="float-end">$48.96</span>
                                            </p>
                                            <p class="mb-0">
                                                <i class="mdi mdi-square text-warning"></i> E-mail
                                                <span class="float-end">$154.02</span>
                                            </p>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-6 order-lg-1">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                            </div>
                                        </div>
                                        <h4 class="header-title mb-2">Recent Activity</h4>

                                        <div data-simplebar="" style="max-height: 419px;"> 
                                            <div class="timeline-alt pb-0">
                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">5 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="fw-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="fw-bold">"Are you there?"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">2 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Audrey Tobey</a>
                                                        <small>Uploaded a photo
                                                            <span class="fw-bold">"Error.jpg"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">14 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info fw-bold mb-1 d-block">You sold an item</a>
                                                        <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">16 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-primary fw-bold mb-1 d-block">Product on the Bootstrap Market</a>
                                                        <small>Dave Gamache added
                                                            <span class="fw-bold">Admin Dashboard</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">22 hours ago</small>
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="timeline-item">
                                                    <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                                                    <div class="timeline-item-info">
                                                        <a href="#" class="text-info fw-bold mb-1 d-block">Robert Delaney</a>
                                                        <small>Send you message
                                                            <span class="fw-bold">"Are you there?"</span>
                                                        </small>
                                                        <p class="mb-0 pb-2">
                                                            <small class="text-muted">2 days ago</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end timeline -->
                                        </div> <!-- end slimscroll -->
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hoàng nà - nguyenduchoang522@gmail.com
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

        .,
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