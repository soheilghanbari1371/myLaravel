@extends('admin_master_page')
@section('CssOrJs')

@endsection
@section('main_content')


    <!-- Content area -->
    <div class="content">

        <!-- User profile -->
        <div class="row">
            <div class="col-lg-9">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="activity">

                            <!-- Timeline -->
                            <div class="timeline timeline-left content-group">
                                <div class="timeline-container">

                                    <!-- Sales stats -->
                                    <div class="timeline-row">
                                        <div class="timeline-icon">
                                            <a href="#"><img src="assets/images/placeholder.jpg" alt=""></a>
                                        </div>

                                        <div class="panel panel-flat timeline-content">
                                            <div class="panel-heading">
                                                <h6 class="panel-title">امار روزانه</h6>
                                                <div class="heading-elements">
                                                    <span class="heading-text"><i
                                                                class="icon-history position-left text-success"></i> اخرین برروزرسانی 3 ساعت قبل</span>

                                                    <ul class="icons-list">
                                                        <li><a data-action="reload"></a></li>
                                                    </ul>
                                                </div>
                                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                            <div class="panel-body">
                                                <div class="chart-container">
                                                    <div class="chart has-fixed-height" id="sales"
                                                         _echarts_instance_="1558293659105"
                                                         style="-moz-user-select: none; background-color: rgba(0, 0, 0, 0); cursor: default;">
                                                        <div style="position: relative; overflow: hidden; width: 100px; height: 400px;">
                                                            <div style="position: absolute; left: 0px; top: 0px; width: 909px; height: 400px; -moz-user-select: none;"
                                                                 data-zr-dom-id="bg"></div>
                                                            <canvas style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; -moz-user-select: none;"
                                                                    width="100" height="400"
                                                                    data-zr-dom-id="0"></canvas>
                                                            <canvas style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; -moz-user-select: none;"
                                                                    width="100" height="400"
                                                                    data-zr-dom-id="1"></canvas>
                                                            <canvas style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; -moz-user-select: none;"
                                                                    width="100" height="400"
                                                                    data-zr-dom-id="_zrender_hover_"></canvas>
                                                            <div class="echarts-tooltip"
                                                                 style="position: absolute; display: none; border-style: solid; white-space: nowrap; transition: left 0.4s ease 0s, top 0.4s ease 0s; background-color: rgba(0, 0, 0, 0.8); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); text-align: right; font-family: Roboto, sans-serif; padding: 8px 12px; left: 183px; top: 69.5px;">
                                                                یکشنبه<br>سود : 210<br>مخارج : 420<br>درامد : -210
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /sales stats -->


                                </div>
                            </div>
                            <!-- /timeline -->

                        </div>


                        <div class="tab-pane fade active in" id="settings">

                            <!-- Profile info -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">اطلاعات پروفایل</h6>
                                    <div class="heading-elements">

                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <label>نام </label>
                                                    <input value="{{$user->name}}" class="form-control" disabled>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>کد ملی </label>
                                                    <input type="text" value="{{$user->nationalcode}}"
                                                           class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>ادرس</label>
                                                    <input type="text" value="{{$user->postaladdress}}"
                                                           class="form-control" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>کدپستی</label>
                                                    <input type="text" value="{{$user->postalcode}}"
                                                           class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>موبایل</label>
                                                    <input type="text" value="{{$user->cellphone}}" class="form-control"
                                                           disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>تلفن ثابت</label>
                                                    <input type="text" value="{{$user->homephone}}" class="form-control"
                                                           disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>ایمیل</label>
                                                    <input type="text" value="{{$user->email}}" class="form-control"
                                                           disabled>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <!-- /profile info -->

                            <!-- idcard info -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">کارت ملی کاربر</h6>
                                    <div class="heading-elements">

                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body">
                                    <img src='{{asset('storage/'.$user->nationalidcard)}}'>
                                </div>
                            </div>
                            <!-- /idcard info -->


                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">

                <!-- Navigation -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">وضعیت حساب</h6>
                        <div class="heading-elements">

                        </div>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                    <div class="list-group list-group-borderless no-padding-top">
                        <a href="#" class="list-group-item"><i class="icon-user"></i>
                            حساب کاربری

                            @if($user->state =='approved')
                            <span class='label bg-success-400'>تایید شده</span>
                            @endif

                            @if($user->state =='waiting')
                            <span class='label bg-warning-400'>در حال بررسی</span>
                            @endif
                            @if($user->state =='nodata')
                            <span class='label bg-danger-400'>تایید نشده</span>
                            @endif
                            @if($user->state =='rejected')
                                <span class='label bg-danger-400'>تایید نشده</span>
                            @endif

                        </a>
                        <div class="list-group-divider"></div>
                        <a href='' class="list-group-item"><i class="icon-tree7"></i>درخواست های خرید کاربر<span
                                    class="badge bg-danger pull-right">{{$user->requests->count()}}</span></a>

                        <a href='' class="list-group-item"><i class="icon-calendar3"></i>اگهی های فروش کاربر<span
                                    class="badge bg-teal-400 pull-right">{{$user->advertisements->count()}}</span></a>

                        <a href='' class="list-group-item"><i class="icon-calendar3"></i> درخواست های برداشت از حساب</a>
                        <a href='' class="list-group-item"><i class="icon-calendar3"></i> درخواست های واریز به حساب</a>

                    </div>
                </div>
                <!-- /navigation -->


                <!-- Balance chart -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">پشتیبانی</h6>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                    <div class="panel-body">
                        <div class="row">
                            <a href='' class="list-group-item"><i class="icon-calendar3"></i>تیکت های پشتیبانی</a>

                        </div>


                    </div>
                </div>
                <!-- /balance chart -->


                <!-- Balance chart -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">حساب بانکی</h6>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 text-size-small">موجودی</div>
                            <div class="col-lg-6 text-right text-size-mini"> {{$user->balance}} تومان</div>

                        </div>
                        <div class="list-group-divider"></div>
                        <div class="row">
                            <div class="col-lg-6 text-size-small">مبلغ ضمانت شده</div>
                            <div class="col-lg-6 text-right text-size-mini"> {{$user->blockedmoney}} تومان</div>

                        </div>
                        <div class="list-group-divider"></div>
                        <div class="row">
                            <div class="col-lg-6 text-size-small">شماره کارت</div>
                            <div class="col-lg-6 text-right text-size-mini"> -------</div>

                        </div>

                    </div>
                </div>
                <!-- /balance chart -->


            </div>
        </div>
        <!-- /user profile -->


    </div>

@endsection
@section('CssOrJsFooter')

@endsection
