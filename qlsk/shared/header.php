<?php
session_start();
// Kiểm tra xem có biến phiên đăng nhập hay không
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Nếu chưa đăng nhập, chuyển hướng về trang login.php
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>BDU Event Management - Hệ thống quản lý sự kiện</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.2.2">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.2.2">
    <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">
<div class="nk-app-root">
    <div class="nk-apps-sidebar is-light">
    </div>
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ms-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-app-name">
                            <div class="nk-header-app-logo">
                                <em class="icon ni ni-dashlite bg-purple-dim"></em>
                            </div>
                            <div class="nk-header-app-info">
                                <span class="sub-text">Hệ thống quản lý sự kiện</span>
                                <span class="lead-text">BDU Event Management</span>
                            </div>
                        </div>
                        <div class="nk-header-menu is-light">
                            <div class="nk-header-menu-inner">
                                <!-- Menu -->

                                <!-- Menu -->
                            </div>
                        </div>
                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">

                                <li class="dropdown chats-dropdown hide-mb-xs">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                            <a href="#">Setting</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <ul class="chat-list">
                                                <li class="chat-item">
                                                    <a class="chat-link" href="#">
                                                        <div class="chat-media user-avatar">
                                                            <span>IH</span>
                                                            <span class="status dot dot-lg dot-gray"></span>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Iliash Hossain</div>
                                                                <span class="time">Now</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">You: Please confrim if you got my last messages.</div>
                                                                <div class="status delivered">
                                                                    <em class="icon ni ni-check-circle-fill"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .chat-item -->
                                                <li class="chat-item is-unread">
                                                    <a class="chat-link" href="#">
                                                        <div class="chat-media user-avatar bg-pink">
                                                            <span>AB</span>
                                                            <span class="status dot dot-lg dot-success"></span>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Abu Bin Ishtiyak</div>
                                                                <span class="time">4:49 AM</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">Hi, I am Ishtiyak, can you help me with this problem ?</div>
                                                                <div class="status unread">
                                                                    <em class="icon ni ni-bullet-fill"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .chat-item -->
                                                <li class="chat-item">
                                                    <a class="chat-link" href="#">
                                                        <div class="chat-media user-avatar">
                                                            <img src="./images/avatar/b-sm.jpg" alt="">
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">George Philips</div>
                                                                <span class="time">6 Apr</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">Have you seens the claim from Rose?</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .chat-item -->
                                                <li class="chat-item">
                                                    <a class="chat-link" href="#">
                                                        <div class="chat-media user-avatar user-avatar-multiple">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/c-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-avatar">
                                                                <span>AB</span>
                                                            </div>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Softnio Group</div>
                                                                <span class="time">27 Mar</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                <div class="status sent">
                                                                    <em class="icon ni ni-check-circle"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .chat-item -->
                                                <li class="chat-item">
                                                    <a class="chat-link" href="#">
                                                        <div class="chat-media user-avatar">
                                                            <img src="./images/avatar/a-sm.jpg" alt="">
                                                            <span class="status dot dot-lg dot-success"></span>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Larry Hughes</div>
                                                                <span class="time">3 Apr</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">Hi Frank! How is you doing?</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .chat-item -->
                                                <li class="chat-item">
                                                    <a class="chat-link" href="#">
                                                        <div class="chat-media user-avatar bg-purple">
                                                            <span>TW</span>
                                                        </div>
                                                        <div class="chat-info">
                                                            <div class="chat-from">
                                                                <div class="name">Tammy Wilson</div>
                                                                <span class="time">27 Mar</span>
                                                            </div>
                                                            <div class="chat-context">
                                                                <div class="text">You: I just bought a new computer but i am having some problem</div>
                                                                <div class="status sent">
                                                                    <em class="icon ni ni-check-circle"></em>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .chat-item -->
                                            </ul><!-- .chat-list -->
                                        </div><!-- .nk-dropdown-body -->
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown notification-dropdown">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                        <div class="dropdown-head">
                                            <span class="sub-title nk-dropdown-title">Notifications</span>
                                            <a href="#">Mark All as Read</a>
                                        </div>
                                        <div class="dropdown-body">
                                            <div class="nk-notification">
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Iliash shared <span>Dashlite-v2</span> with you.</div>
                                                        <div class="nk-notification-time">Just now</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Iliash <span>invited</span> you to edit <span>DashLite</span> folder</div>
                                                        <div class="nk-notification-time">2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">You have shared <span>project v2</span> with Parvez.</div>
                                                        <div class="nk-notification-time">7 days ago</div>
                                                    </div>
                                                </div>
                                                <div class="nk-notification-item dropdown-inner">
                                                    <div class="nk-notification-icon">
                                                        <em class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                                    </div>
                                                    <div class="nk-notification-content">
                                                        <div class="nk-notification-text">Your <span>Subscription</span> renew successfully.</div>
                                                        <div class="nk-notification-time">2 month ago</div>
                                                    </div>
                                                </div>
                                            </div><!-- .nk-notification -->
                                        </div><!-- .nk-dropdown-body -->
                                        <div class="dropdown-foot center">
                                            <a href="#">View All</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown list-apps-dropdown d-lg-none">
                                    <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                        <div class="icon-status icon-status-na"><em class="icon ni ni-menu-circled"></em></div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                        <div class="dropdown-body">
                                            <ul class="list-apps">
                                                <li>
                                                    <a href="index.php">
                                                        <span class="list-apps-media"><em class="icon ni ni-dashlite bg-primary text-white"></em></span>
                                                        <span class="list-apps-title">Tổng quan</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="apps/chats.html">
                                                        <span class="list-apps-media"><em class="icon ni ni-chat-circle bg-info-dim"></em></span>
                                                        <span class="list-apps-title">Chats</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="apps/mailbox.html">
                                                        <span class="list-apps-media"><em class="icon ni ni-inbox bg-purple-dim"></em></span>
                                                        <span class="list-apps-title">Mailbox</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="apps/messages.html">
                                                        <span class="list-apps-media"><em class="icon ni ni-chat bg-success-dim"></em></span>
                                                        <span class="list-apps-title">Messages</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="apps/file-manager.html">
                                                        <span class="list-apps-media"><em class="icon ni ni-folder bg-purple-dim"></em></span>
                                                        <span class="list-apps-title">File Manager</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="components.html">
                                                        <span class="list-apps-media"><em class="icon ni ni-layers bg-secondary-dim"></em></span>
                                                        <span class="list-apps-title">Components</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="list-apps">
                                                <li>
                                                    <a href="/demo2/ecommerce/index.php">
                                                        <span class="list-apps-media"><em class="icon ni ni-cart bg-danger-dim"></em></span>
                                                        <span class="list-apps-title">Ecommerce Panel</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/demo4/subscription/index.php">
                                                        <span class="list-apps-media"><em class="icon ni ni-calendar-booking bg-primary-dim"></em></span>
                                                        <span class="list-apps-title">Subscription Panel</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/demo5/crypto/index.php">
                                                        <span class="list-apps-media"><em class="icon ni ni-bitcoin-cash bg-warning-dim"></em></span>
                                                        <span class="list-apps-title">Crypto Wallet Panel</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/demo6/invest/index.php">
                                                        <span class="list-apps-media"><em class="icon ni ni-invest bg-blue-dim"></em></span>
                                                        <span class="list-apps-title">HYIP Invest Panel</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-dropdown-body -->
                                    </div>
                                </li>

                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">
                                                <div class="user-avatar">
                                                    <span>AB</span>
                                                </div>
                                                <div class="user-info">
                                                    <span class="lead-text"><?php echo $_SESSION['user_fullname']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="profile.php"><em class="icon ni ni-user-alt"></em><span>Thông tin cá nhân</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li><a href="core/functions/logout.php"><em class="icon ni ni-signout"></em><span>Đăng xuất</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main header @e -->
            <div class="nk-sidebar" data-content="sidebarMenu">
                <div class="nk-sidebar-inner" data-simplebar>
                    <ul class="nk-menu nk-menu-md">
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Quản lý sự kiện</h6>
                        </li><!-- .nk-menu-heading -->
                        <li class="nk-menu-item">
                            <a href="index.php" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                <span class="nk-menu-text">Tổng quan</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="analytics.html" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                <span class="nk-menu-text">Thống kê</span>
                            </a>
                        </li><!-- .nk-menu-item -->

                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-template"></em></span>
                                <span class="nk-menu-text">Sự kiện</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="categories.php" class="nk-menu-link"><span class="nk-menu-text">Danh mục sự kiện</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="event-list.php" class="nk-menu-link"><span class="nk-menu-text">Danh sách sự kiện</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="add-event.php" class="nk-menu-link"><span class="nk-menu-text">Thêm sự kiện</span></a>
                                </li>

                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="locations.php" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-location"></em></span>
                                <span class="nk-menu-text">Địa điểm tổ chức</span>
                            </a>
                        </li><!-- .nk-menu-item -->


                        <li hidden class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-opt-alt"></em></span>
                                <span class="nk-menu-text">Plugins</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="plugin-add.html" class="nk-menu-link"><span class="nk-menu-text">Add Plugins</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="plugin-installed.html" class="nk-menu-link"><span class="nk-menu-text">Installed Plugins</span></a>
                                </li>
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                        <li style="margin-top: -20px" class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Khác</h6>
                        </li><!-- .nk-menu-heading -->
                        <li class="nk-menu-item">
                            <a href="index.php" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-notice"></em></span>
                                <span class="nk-menu-text">Quản lý thông báo</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="fals.php" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-masonry"></em></span>
                                <span class="nk-menu-text">Quản lý khoa</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="users.php" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                <span class="nk-menu-text">Quản lý người dùng</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="user-list.php" class="nk-menu-link"><span class="nk-menu-text">Danh sách người dùng</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="add-user.php" class="nk-menu-link"><span class="nk-menu-text">Thêm người dùng</span></a>
                                </li>
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-calendar-alt"></em></span>
                                <span class="nk-menu-text">Quản lý năm học</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="years.php" class="nk-menu-link"><span class="nk-menu-text">Danh sách năm học</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="semesters.php" class="nk-menu-link"><span class="nk-menu-text">Danh sách học kỳ</span></a>
                                </li>
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                    </ul><!-- .nk-menu -->

                </div>
            </div>