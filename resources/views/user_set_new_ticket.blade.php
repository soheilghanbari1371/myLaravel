@extends('user_master_page')

@section('main_content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="col-md-8 col-lg-offset-2">
                <!-- Vertical form -->
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">ثبت تیکت جدید<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <form action="{{url('user/set/new/ticket')}}"  method="post">
                           @csrf
                            <div class="form-group">
                                <label>عنوان تیکت</label>
                                <input type="text" name="subject" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label>بخش</label>
                                <select name="department" class="form-control">
                                    <option value="">انتخاب کنید</option>
                                    <option value="مالی">بخش مالی</option>
                                    <option value="احراز هویت">بخش احراز هویت</option>
                                    <option value="فنی">بخش فنی</option>
                                    <option value="سایر موارد">دیگر موارد</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>متن</label>
                                <textarea rows="4" cols="4" name="text" class="form-control"></textarea>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right">
                                    <b><i class="icon-circle-left2"></i></b> ارسال
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /vertical form -->
            </div>

        </div>



    </div>
@endsection
