@extends('admin_master_page')
@section('CssOrJs')

@endsection
@section('main_content')


    <!-- Content area -->
    <div class="content">

        <!-- User profile -->
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="tabbable">
                        <div class="tab-content">



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
                                                        <input type="" value="{{$user->name}}" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label>کد ملی </label>
                                                        <input type="text" value="{{$user->nationalid}}" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <label>ادرس</label>
                                                        <input type="text" value="{{$user->postaladdress}}" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>کدپستی</label>
                                                        <input type="text" value="{{$user->postalcode}}" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>موبایل</label>
                                                        <input type="text" value="{{$user->cellphone}}" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>تلفن ثابت</label>
                                                        <input type="text" value="{{$user->homephone}}" class="form-control" disabled>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>ایمیل</label>
                                                        <input type="text" value="{{$user->email}}" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                                <!-- /profile info -->



                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">تصویر کارت ملی </h6>
                            <div class="heading-elements">

                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                        <div class="panel-body">
                            <img src='{{asset('storage/'.$user->nationalcard)}}'/>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title">تصویر  قبض </h6>
                            <div class="heading-elements">

                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                        <div class="panel-body">
                            <img src='{{asset('storage/'.$user->nationalcard)}}'/>
                        </div>
                    </div>

                </div>



            </div>
            <!-- /user profile -->

            <div class="col-lg-3">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">تایید کاربر</h6>
                        <div class="heading-elements">

                        </div>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                    <div class="container-fluid">
                        <div class="row ">
                            @if ($user->state == 'approved')
                                <a href='{{url('admin/approve/user/'.$user->id)}}'>
                                    <button type="button" class="btn btn-success btn-labeled btn-xlg" disabled><b><i class="icon-pin-alt" ></i></b>تایید شده است</button>
                                </a>
                                @else
                                <a href='{{url('admin/approve/user/'.$user->id)}}'>
                                    <button type="button" class="btn btn-success btn-labeled btn-xlg" ><b><i class="icon-pin-alt" ></i></b>تایید اطلاعات کاربر</button>
                                </a>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">عدم تایید تلفن</h6>
                        <div class="heading-elements">

                        </div>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                    <div class="container-fluid">
                        <div class="row ">
                            <a href=''>
                                <button type="button" class="btn btn-warning btn-labeled btn-xlg"><b><i class="icon-pin-alt"></i></b>عدم تایید تلفن</button>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">عدم تایید کاربر</h6>
                        <div class="heading-elements">

                        </div>
                        <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                    <div class="container-fluid">
                        <div class="row ">
                            <div class="form-group">

                                <form id="form_support" method="post"
                                      action="">
                                    <input type="hidden" name="user"
                                           value=""/>
                                    <div class="col-lg-11">
                                        <textarea name="text" rows="5" cols="5" class="form-control" placeholder="علت رد درخواست"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-danger btn-labeled btn-xlg"><b><i class="icon-pin-alt"></i></b>رد اطلاعات کاربر</button>

                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
@section('CssOrJsFooter')

@endsection
