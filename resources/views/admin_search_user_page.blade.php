@extends('admin_master_page')
@section('CssOrJs')

@endsection
@section('main_content')

    <!-- Content area -->
    <div class="content">

        <div class="row">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h6 class="panel-title">جستجوی کاربر</h6>
                    <div class="heading-elements">

                    </div>
                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                <div class="container-fluid">
                    <div class="col-lg-8">
                        <form id="form_support" method="post"
                              action="{{url('admin/search/user/id')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-lg-3">جستجو با شناسه کاربر</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input name="userid" class="form-control" placeholder="شناسه کاربر...">
                                        <span class="input-group-btn">
													<button class="btn bg-teal" type="submit">جستجو</button>
												</span>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <form id="form_support" method="post"
                              action="{{url('admin/search/user/cellphone')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-lg-3">جستجو با شماره موبایل</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input name="cellphone" type="text" class="form-control"
                                               placeholder="شماره موبایل ...">
                                        <span class="input-group-btn">
													<button class="btn bg-teal" type="submit">جستجو</button>
												</span>
                                    </div>
                                </div>
                            </div>
                        </form>


                        <form id="form_support" method="post"
                              action="{{url('admin/search/user/email')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label col-lg-3">جستجو با ایمیل</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input name="email" type="text" class="form-control"
                                               placeholder="نام کاربری  ...">
                                        <span class="input-group-btn">
													<button class="btn bg-teal" type="submit">جستجو</button>
												</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('CssOrJsFooter')

@endsection
