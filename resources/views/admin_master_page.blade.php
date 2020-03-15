<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="fa">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>قالب مدیریتی اساک</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{mix('/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('/js/core/app.js')}}"></script>
    <!-- /theme JS files -->
    @yield('CssOrJs')

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <h5><a class="navbar-brand" href="#"> 𝔻𝕚𝕘𝕚 𝔹𝕚𝕥 𝕄𝕒𝕝𝕝</a></h5>
        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>

            </li>


        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img
                                        src=""
                                        class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">---</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> -----
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href=""><i
                                                    class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>اصلی</span> <i class="icon-menu" title="Main pages"></i>
                            </li>
                            <li class="active"><a href=''><i
                                            class="icon-home4"></i> <span>داشبورد</span></a>
                            </li>

                            <!-- /main -->

                            <!-- Forms -->
                            <li class="navigation-header"><span>کاربران</span> <i class="icon-menu" title="Forms"></i>
                            </li>

                            <li>
                                <a href='{{url('admin/auth/request')}}'><i
                                            class="icon-folder-open"></i> <span>احراز هویت</span></a>
                            </li>
                            <li>
                                <a href='{{url('admin/search/user')}}'><i
                                            class="icon-folder-open"></i> <span>جستجوی کاربر</span></a>
                            </li>

                            <!-- /forms -->

                            <!-- Appearance -->
                            <li class="navigation-header"><span>مالی</span> <i class="icon-menu" title="Appearance"></i>
                            </li>
                            <li>
                                <a href="#"><i class="icon-calendar3"></i> <span>تراکنش مالی</span></a>
                                <ul>
                                    <li><a href=''>درخواست های برداشت</a></li>
                                    <li><a href=''>درخواست های واریز</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href=''><i
                                            class="icon-coins"></i> <span>وضعیت حساب</span></a>

                            <li>

                            </li>


                            <!-- /appearance -->

                            <!-- Data visualization -->
                            <li>
                            </li>

                            </li>
                            <!-- /data visualization -->

                            <!-- Extensions -->
                            <li class="navigation-header"><span>حساب کاربری</span> <i class="icon-menu"
                                                                                      title="Extensions"></i></li>
                            <li>
                            </li>
                            <li>
                                <a href=''><i
                                            class="icon-user"></i>
                                    <span>حساب کاربری</span></a>
                            </li>
                            <li>
                                <a href=''><i
                                            class="icon-user-check"></i> <span>احراز هویت</span></a>
                            </li>
                            <li>
                                <!-- /extensions -->

                                <!-- Tables -->
                            <li class="navigation-header"><span>پشتیبانی</span> <i class="icon-menu" title="Tables"></i>
                            </li>
                            <li>
                                <a href=''><i
                                            class="icon-bubbles"></i> <span>ارسال تیکت</span></a>
                            </li>
                            <li>
                                <a href=''><i
                                            class="icon-bubbles"></i> <span>تیکت ها</span></a>
                            </li>
                            <li>
                                <a href="table_styling.html"><i class="icon-book3"></i> <span>سوالات متداول</span></a>
                            </li>
                            </li>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">
                <div class="page-header-content">
                    <div class="page-title">
                        @yield('big_directory')
                    </div>
                    <div class="heading-elements">

                    </div>
                </div>

                <div class="breadcrumb-line">
                    @yield('breadcrumb')

                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">
                @yield('main_content')

            </div>

        </div>

    </div>


    <!-- Footer -->
    <div class="footer text-muted">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;کلیه حقوق سایت محفوظ میباشد.&copy; &nbsp;&nbsp;&nbsp;
    </div>
    <!-- /footer -->

</div>
<!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>



</body>
</html>
@yield('CssOrJsFooter')
