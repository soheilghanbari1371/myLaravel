@extends('user_master_page')
@section('main_content')
    <!-- Content area -->
    <div class="content">

        <!-- User profile -->
        <div class="row">
            <div class="col-lg-9">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade" id="activity">
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
                                                <div class="col-md-4">
                                                    <label>نام کاربری</label>
                                                    <input type="text" value="" class="form-control" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>نام </label>
                                                    <input type="" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" class="form-control" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>کد ملی </label>
                                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->nationalid}}" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>ادرس</label>
                                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->address}}" class="form-control" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>کدپستی</label>
                                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->postalcode}}" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>موبایل</label>
                                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->cellphone}}" class="form-control" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>تلفن ثابت</label>
                                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->homephone}}" class="form-control" disabled>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>ایمیل</label>
                                                    <input type="text" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>
                            <!-- /profile info -->


                            <!-- Account settings -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h6 class="panel-title">تنظیمات  رمز عبور</h6>
                                    <div class="heading-elements">

                                    </div>
                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                <div class="panel-body">
                                    <form id ="form_change_password" action="#">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>نام کاربری</label>
                                                    <input type="text" name="user_username" value="" readonly="readonly" class="form-control">
                                                </div>

                                                <div class="col-md-6">
                                                    <label>کلمه عبور فعلی</label>
                                                    <input name="current_password" type="password" value=""  class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>کلمه عبور جدید</label>
                                                    <input name="new_password" type="password" placeholder="یک کلمه عبور جدید وارد کنید" class="form-control">
                                                </div>

                                                <div class="col-md-6">
                                                    <label>تکرار کلمه عبور جدید</label>
                                                    <input name="new_password_retype" type="password" placeholder="تکرار کلمه عبور جدید" class="form-control">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="text-right">
                                            <button type="submit" id="btn-change-password" class="btn btn-primary">تغییر رمز عبور<i class="icon-arrow-left13 position-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /account settings -->

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
<!--                            --><?php
//                            if($account_detail['profile']['user_status']=='approved'){
//                                echo "<span class='label bg-success-400'>تایید شده</span>";
//                            }
//
//                            if($account_detail['profile']['user_status']=='waiting'){
//                                echo "<span class='label bg-warning-400'>در حال بررسی</span>";
//                            }
//                            ?>
                        </a>
                        <div class="list-group-divider"></div>
                        <a href="" class="list-group-item"><i class="icon-tree7"></i>تعداد درخواست<span class="badge bg-danger pull-right"></span></a>

                        <a href="" class="list-group-item"><i class="icon-calendar3"></i> تعداد اگهی <span class="badge bg-teal-400 pull-right"></span></a>

                    </div>
                </div>
                <!-- /navigation -->





                <!-- Balance chart -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">حساب بانکی</h6>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 text-size-small">موجودی حساب </div>
                            <div class="col-lg-6 text-right text-size-mini"> تومان </div>

                        </div>
                        <div class="list-group-divider"></div>
                        <div class="row">
                            <div class="col-lg-6 text-size-small">مبلغ ضمانت شده </div>
                            <div class="col-lg-6 text-right text-size-mini">  تومان  </div>

                        </div>
                        <div class="list-group-divider"></div>

                        <div class="row">
                            <div class="col-lg-6 text-size-small">کارت </div>
                            <div class="col-lg-6 text-right text-size-mini">  </div>

                        </div>

                    </div>
                </div>
                <!-- /balance chart -->



            </div>
        </div>
        <!-- /user profile -->




    </div>
@endsection
