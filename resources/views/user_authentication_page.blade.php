@extends('user_master_page')
@section('CssOrJs')
    <script>
        $(document).ready(function () {

            function eror_alarm($error) {
                var stack_top_left = {"dir1": "down", "dir2": "right", "push": "top"};
                new PNotify({
                    title: 'خطا',
                    text: $error,
                    addclass: 'stack-top-left bg-danger alert-styled-right',
                    stack: stack_top_left,
                    type: 'error'
                });
            }



            var error =@json($errors->all());
            if (error.length > 0) {
                eror_alarm(error[0]);
            }



        });


    </script>
@endsection
@section('main_content')

    <!-- Content area -->
    <div class="content">
        <div id="alarm-container" class="row">
            <div id="alarm-color" class="alert  no-border">
                        <span id="text-alarm" class="text-semibold">
								    </span></div>
        </div>

        <div id="form-container" class="row">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-flat">
                        <div class="panel-heading panel-danger" style="margin-bottom:20px;">
                            <h6 class="panel-title text-bold">توجه !</h6>

                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                        <div class="panel-body text-center">
                            <p>- برای انجام معامله نیاز به تایید هویت شما میباشد.</p>
                            <p>- تمامی موارد را به صورت کامل و درست پر کنید.</p>
                            <p>- پشتیبان از طریق شماره تماس وارد شده در زیر برای تایید انها با شما تماس میگیرند.</p>
                        </div>
                    </div>
                </div>
            </div>
            <form id="auth-form" class="steps-basic" method="post"
                  action="{{url('user/fill/user/data')}}"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="form_token"
                       value=""/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading panel-danger" style="margin-bottom:20px;">
                                <h6 class="panel-title text-bold">اطلاعات شخصی</h6>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">نام :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="name" class="form-control"
                                                           placeholder="علی">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">نام خانوادگی :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="family" class="form-control"
                                                           placeholder="رضایی">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">کدملی :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="national_id" class="form-control"
                                                           placeholder="۰۱۲۳۴۵۶۷۸۹">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">تاریخ تولد :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="birthday" class="form-control"
                                                           placeholder="۱۳۷۱/۱/۲۳">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading panel-danger" style="margin-bottom:20px;">
                                <h6 class="panel-title text-bold">اطلاعات پستی</h6>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">استان :</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="state" class="form-control"
                                                           placeholder="سمنان">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">شهر :</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="city" class="form-control"
                                                           placeholder="شاهرود">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3">ادرس پستی :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="address" class="form-control"
                                                           placeholder="خیابان باهنر کوچه یاس پلاک ۳">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-lg-3"> کدپستی :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="postal_code" class="form-control"
                                                           placeholder="0123456789">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading panel-danger" style="margin-bottom:20px;">
                                <h6 class="panel-title text-bold">شماره تماس و ایمیل</h6>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3"> همراه :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="cell_phone" class="form-control"
                                                           placeholder="۰۹۱۲۲۲۲۲۲۲۲">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-lg-3"> ثابت :</label>
                                            <div class="col-lg-9">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="home_phone" class="form-control"
                                                           placeholder="۰۲۱۲۲۲۲۲۲۲۲">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label col-lg-2">ایمیل:</label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="icon-user"></i></span>
                                                    <input type="text" name="email" class="form-control"
                                                           placeholder="xyz@x.com">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading panel-danger" style="margin-bottom:20px;">
                                <h6 class="panel-title text-bold">اپلود مدارک</h6>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span class="">اسکن کارت ملی :</span>
                                            <input id="file-national-id-card" type="file" name="nationalcodeimage"
                                                   class="file-input"
                                                   data-main-class="input-group-xs">
                                            <span class="text-grey-300 text-size-mini">حداکثر حجم فایل ۴ مگابایت</span>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <span class="">اسکن یک قبض:(اب-برق-گاز-تلفن) :</span>
                                            <input type="file" name="feeimage" class="file-input"
                                                   data-main-class="input-group-xs">
                                            <span class="text-grey-300 text-size-mini">حداکثر حجم فایل ۴ مگابایت</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 offset-lg-5">
                        <button type="submit" class="btn btn-primary"><i class="icon-cog3 position-left"></i>ثبت اطلاعات
                            کاربری
                        </button>

                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection
@section('CssOrJsFooter')
    <script type="text/javascript" src="{{asset('/js/plugins/notifications/pnotify.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/pages/components_notifications_pnotify.js')}}"></script>

@endsection
