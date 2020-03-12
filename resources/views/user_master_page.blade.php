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
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="visible-xs-inline-block position-right">بروزرسانی ها</span>
                    <span class="badge bg-warning-400">9</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        اخرین بروزرسانی ها
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-sync"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-350">
                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...
                                <div class="media-annotation">۴ دقیقه قبل</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                            </div>

                            <div class="media-body">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...
                                <div class="media-annotation">۳۶ دقیقه قبل</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                            </div>

                            <div class="media-body">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...
                                <div class="media-annotation">۲ ساعت قبل</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                            </div>

                            <div class="media-body">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...
                                <div class="media-annotation">۱۸:۳۶</div>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                            </div>

                            <div class="media-body">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت ...
                                <div class="media-annotation">۰۵:۴۶</div>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="تمام فعالیت ها"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="visible-xs-inline-block position-right">کاربران</span>
                </a>

                <div class="dropdown-menu dropdown-content">
                    <div class="dropdown-content-heading">
                        کاربران انلاین
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-gear"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body width-300">
                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">مجتبی</a>
                                <span class="display-block text-muted text-size-small">توسعه دهنده وب</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-success"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">علی</a>
                                <span class="display-block text-muted text-size-small">بازاریاب</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-danger"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">فریبا</a>
                                <span class="display-block text-muted text-size-small">مدیر پروژه</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-success"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">محمد</a>
                                <span class="display-block text-muted text-size-small">توسعه دهنده کسب و کار</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-warning-300"></span></div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading text-semibold">وحید</a>
                                <span class="display-block text-muted text-size-small">طراح گرافیک</span>
                            </div>
                            <div class="media-right media-middle"><span class="status-mark border-grey-400"></span></div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="تمام کاربران"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="visible-xs-inline-block position-right">پیام ها</span>
                    <span class="badge bg-warning-400">۲</span>
                </a>

                <div class="dropdown-menu dropdown-content width-350">
                    <div class="dropdown-content-heading">
                        پیام ها
                        <ul class="icons-list">
                            <li><a href="#"><i class="icon-compose"></i></a></li>
                        </ul>
                    </div>

                    <ul class="media-list dropdown-content-body">
                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">۵</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">علی</span>
                                    <span class="media-annotation pull-right">۰۴:۵۸</span>
                                </a>

                                <span class="text-muted">به قالب مدیریتی اساک خوش امدید...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left">
                                <img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
                                <span class="badge bg-danger-400 media-badge">۴</span>
                            </div>

                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">رضا</span>
                                    <span class="media-annotation pull-right">۱۲:۱۶</span>
                                </a>

                                <span class="text-muted">به قالب مدیریتی اساک خوش امدید...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">وحید</span>
                                    <span class="media-annotation pull-right">هم اکنون</span>
                                </a>

                                <span class="text-muted">به قالب مدیریتی اساک خوش امدید...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">سجاد</span>
                                    <span class="media-annotation pull-right">هم اکنون</span>
                                </a>

                                <span class="text-muted">به قالب مدیریتی اساک خوش امدید...</span>
                            </div>
                        </li>

                        <li class="media">
                            <div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                            <div class="media-body">
                                <a href="#" class="media-heading">
                                    <span class="text-semibold">صادق</span>
                                    <span class="media-annotation pull-right">هم اکنون</span>
                                </a>

                                <span class="text-muted">به قالب مدیریتی اساک خوش امدید...</span>
                            </div>
                        </li>
                    </ul>

                    <div class="dropdown-content-footer">
                        <a href="#" data-popup="tooltip" title="تمام پیام ها"><i class="icon-menu display-block"></i></a>
                    </div>
                </div>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/placeholder.jpg" alt="">
                    <span>علی</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i>پروفایل من</a></li>
                    <li><a href="#"><span class="badge badge-warning pull-right">۵۸</span> <i class="icon-comment-discussion"></i> پیام ها</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> تنظیمات حساب کاربری</a></li>
                    <li><a href="{{url('/user_logout')}}"><i class="icon-switch2"></i> خروج</a></li>
                </ul>
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
                                <span class="media-heading text-semibold">--</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> --
                                    ,--
                                </div>
                            </div>

                            <div class="dropdown media-right media-middle">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="icon-cog3"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href=''><i class="icon-user"></i>حساب کاربری</a></li>
                                            <li class="divider"></li>
                                            <li><a href=''><i class="icon-esc"></i>خروج</a></li>
                                        </ul>
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
                            <li><a href='{{url('user_dashboard')}}'><i
                                        class="icon-home4"></i> <span>داشبورد</span></a>
                            </li>

                            <!-- /main -->

                            <!-- Forms -->
                            <li class="navigation-header"><span>معاملات</span> <i class="icon-menu" title="Forms"></i>
                            </li>
                            <li>
                                <a href="#"><i class="icon-history"></i> <span>سوابق معاملات</span></a>
                                <ul>
                                    <li><a href={{url('user/history/buy')}}>سوابق خرید</a></li>
                                    <li><a href={{url('user/history/sell')}}>سوابق فروش</a></li>

                                </ul>
                            </li>

                            <li class="active">
                                <a href='{{url('my/crypto/advertisements')}}'><i
                                        class="icon-folder-open"></i> <span>اگهی های فروش من</span></a>
                            </li>
                            <li>
                                <a href='{{url('my/crypto/requests')}}'><i
                                        class="icon-folder-open"></i> <span>درخواست های خرید من</span></a>
                            </li>

                            <!-- /forms -->

                            <!-- Appearance -->
                            <li class="navigation-header"><span>مالی</span> <i class="icon-menu" title="Appearance"></i>
                            </li>
                            <li>
                                <a href="#"><i class="icon-calendar3"></i> <span>سوابق مالی</span></a>
                                <ul>
                                    <li><a href=''>سوابق واریز به
                                            حساب</a></li>
                                    <li><a href=''>سوابق برداشت از
                                            حساب</a></li>

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
                                <a href='{{url('user/profile/page')}}'><i
                                        class="icon-user"></i>
                                    <span>حساب کاربری</span></a>
                            </li>
                            <li>
                                <a href={{url('user/authentication/form')}}><i
                                        class="icon-user-check"></i> <span>احراز هویت</span></a>
                            </li>
                            <li>
                                <!-- /extensions -->

                                <!-- Tables -->
                            <li class="navigation-header"><span>پشتیبانی</span> <i class="icon-menu" title="Tables"></i>
                            </li>
                            <li>
                                <a href='{{url('user/tickets/list')}}'><i
                                        class="icon-bubbles"></i> <span>تیکت های عمومی</span></a>
                            </li>

                            <li>
                                <a href=''><i
                                        class="icon-bubbles"></i> <span>تیکت های حل اختلاف</span></a>
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
{{--                        <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">خانه</span> - داشبورد</h4>--}}
                    </div>

                    <div class="heading-elements">
                        <div class="heading-btn-group">
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>امار</span></a>
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>صورتحساب ها</span></a>
                            <a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>برنامه</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        @yield('breadcrumb')
{{--                        <li><a href="index.html"><i class="icon-home2 position-left"></i> خانه</a></li>--}}
{{--                        <li class="active">داشبورد</li>--}}
                    </ul>

                    <ul class="breadcrumb-elements">
                        <li><a href="#"><i class="icon-comment-discussion position-left"></i> پشتیبانی</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear position-left"></i>
                                تنظیمات
                                <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><i class="icon-user-lock"></i> امنیت حساب کاربری</a></li>
                                <li><a href="#"><i class="icon-statistics"></i> انالیز</a></li>
                                <li><a href="#"><i class="icon-accessibility"></i> دسترسی</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="icon-gear"></i>تمام تنظیمات</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /page header -->


            <!-- Content area -->
            <div class="content">

                <!-- Main charts -->
                <div class="row">
                 @yield('main_content')
                </div>

                <div class="footer text-muted">
                    &copy; ۲۰۱۶. <a href="#">فارسی و راستچین شده</a> توسط <a href="http://codecanyons.ir" target="_blank">کدکانیونز</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
@yield('CssOrJsFooter')
