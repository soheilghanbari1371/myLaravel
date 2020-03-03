@extends('user_master_page')
@section('CssOrJs')
    <script>
        $(document).ready(function () {
            console.log("here1");

            var request;
            $("#form_support").submit(function (event) {

                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
                console.log("here1");
                // Abort any pending request
                if (request) {
                    request.abort();
                }
                // setup some local variables
                var $form = $(this);

                // Let's select and cache all the fields
                var $inputs = $form.find("input, textarea");

                // Serialize the data in the form
                var serializedData = $form.serialize();

                // Let's disable the inputs for the duration of the Ajax request.
                // Note: we disable elements AFTER the form data has been serialized.
                // Disabled form elements will not be serialized.
                $inputs.prop("disabled", true);
                var myurl ='{{url('buyer/set/chat/item')}}';

                // Fire off the request to /form.php
                request = $.ajax({
                    url: myurl,
                    type: "post",
                    data: serializedData
                });

                // Callback handler that will be called on success
                request.done(function (response, textStatus, jqXHR) {
                    // Log a message to the console
                    console.log(response);
                    if (response == "ok") {
                        var base_url = 'ddd';
                        var message = '<li class="media">' + '<div class="media-left">'
                            + '<img src="' + base_url + '" class="img-circle" alt="">' +
                            '</div><div class="media-body">' +
                            '<div class="media-content">' + $("textarea[name='message']").val() + '</div>' +
                            '<span class="media-annotation display-block mt-10"> 9:54 شنبه <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>' +
                            '</div></li>';


                        $(message).appendTo($("#chatroom"));

                        var element = document.getElementById("chatroom");
                        element.scrollTop = element.scrollHeight;
                        $("#text-area").val(" ");
                    } else {

                    }


                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown) {

                    console.error(
                        textStatus
                    );
                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function () {
                    // Reenable the inputs
                    $inputs.prop("disabled", false);
                });

            });

        });


    </script>
@endsection
@section('main_content')
    <div class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="text-semibold no-margin-top">مشخصات اگهی</h6>
                                <ul class="list list-unstyled">
                                    <li> فروشنده : ------</li>
                                    <li> کد آگهی : <span
                                            class="text-semibold">{{$advertisement->id}}
                                                    #</span></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h5 class="text-semibold text-right no-margin-top">
                                    <b>{{$advertisement->coin}}</b></h5>
                                <ul class="list list-unstyled text-right">
                                    <li> بازه فروش: <span
                                            class="text-semibold bg-gray"><b>{{$advertisement->max}}~{{$advertisement->min}}</b></span>
                                    </li>
                                    <li class="dropdown">
                                        وضعیت: &nbsp;
                                        @if ($advertisement->status == "active")
                                            <span class='label bg-success-400'>فعال</span>
                                        @endif
                                        @if ($advertisement->status == "removed")
                                            <span class='label bg-danger-400'>حذف شده</span>
                                        @endif
                                        @if ($advertisement->status == "finished")
                                            <span class='label bg-info-400'>خاتمه یافته</span>
                                        @endif

                                        @if ($advertisement->status == "disabled")
                                            <span class='label bg-warning-400'>غیرفعال</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <ul>
                            <li><span class="status-mark border-danger position-left"></span> تاریخ آگهی: <span
                                    class="text-semibold">{{$advertisement->created_at}}</span>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                @if(isset($request))
                    <div id="order-table"
                         class="panel border-left-lg border-left-success invoice-grid timeline-content">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="text-semibold no-margin-top">درخواست شما</h6>
                                    <ul class="list list-unstyled">
                                        <li>کد معامله : &nbsp;{{$request->id}}#</li>
                                        <li> تعداد ارز تقاضا: <span
                                                class="text-semibold">{{$request->count}}</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <h5 class="text-bold text-right no-margin-top">{{$request->price}}
                                        تومان</h5>
                                    <ul class="list list-unstyled text-right">
                                        <li> پرداخت :
                                            @if($request->warranty)
                                                <span
                                                    class="pay-status text-semibold text-success">ضمانت شده
                                            </span>
                                            @else
                                                <span
                                                    class="pay-status text-semibold text-danger">ضمانت نشده
                                            </span>
                                            @endif
                                        </li>
                                        <li class="dropdown">
                                            وضعیت: &nbsp;
                                            @if ($request->status == "waiting")
                                                <span class='label bg-info-400'>در انتظار</span>
                                            @endif
                                            @if ($request->status == "canceled")
                                                <span class='label bg-danger-400'>حذف شده</span>
                                            @endif
                                            @if ($request->status == "disabled")
                                                <span class='label bg-danger-400'>غیرفعال شده</span>
                                            @endif

                                            @if ($request->status == "in-process")
                                                <span class='label bg-success-400'>در حال انجام</span>
                                            @endif
                                            @if ($request->status == "approved")
                                                <span class='label bg-success-400'>خاتمه یافته</span>
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <ul>
                                <li><span class="status-mark border-success position-left"></span> تاریخ درخواست:
                                    <span
                                        class="text-semibold">{{$request->created_at}}</span>
                                </li>
                            </ul>


                        </div>
                    </div>


                @else
                    <div class=" suggest-count panel border-left-lg border-left-success invoice-grid timeline-content">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="text-semibold no-margin-top">ارسال درخواست</h6>

                                </div>

                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="suggest-count form-group">

                                            <div class="col-lg-8">
                                                <form id="form_set_buy_suggest" method="post"
                                                      action="{{url('deal/set_request/'.$advertisement->id)}}">
                                                    @csrf
                                                    <div class="input-group">
                                                            <span class="input-group-addon"><i
                                                                    class="icon-coins"></i></span>
                                                        <input name="amount" id="suggest_count" class="form-control"
                                                               placeholder="تعداد ارز مورد نیاز شما">

                                                        <span class="input-group-btn btn-submit">
                    													<button class="btn bg-gold" type="submit">ارسال درخواست </button>
                                                                    </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="suggest-count form-group">

                                            <div class="col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-addon"><i
                                                                class="icon-cash3"></i></span>
                                                    <input disabled="disabled" id="totalamount" type="text"
                                                           class="form-control"
                                                           placeholder="مبلغ کل">
                                                    <span class="input-group-addon">تومان</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">


                        </div>
                    </div>
            </div>
            @endif
        </div>
        @if(isset($request)&&$request->status=='in-process')
            <div class="row chatroom">
                <div class="col-md-6">

                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title text-black">گفتگو با فروشنده</h6>
                            <div class="list-group-divider"></div>
                            <div class="heading-elements">
                                <ul class="icons-list">

                                </ul>
                            </div>
                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                        <div class="panel-body body-chatroom">
                            <ul id="chatroom" class="media-list chat-list content-group body-chatroom">
                                <li class="media reversed">
                                    <div class="media-body">
                                        <div class="media-content">کاربر گرامی سلام !


                                            <br>
                                            لطفا در صورت بروز هرگونه مشکل در
                                            فرایند معامله در همین جا پشتیبان معامله خود را مطلع
                                            بفرمایید.
                                            <br>

                                            پشتبان معامله شما در سریع ترین زمان
                                            پاسخ شما را در همین بخش میدهد .

                                            <br>
                                            و همچنین اگر سوالی در مورد مسایلی به
                                            غیر از این معامله داشتید از طریق قسمت پشتبانی پنل خود اقدام
                                            بفرمایید .


                                        </div>

                                    </div>

                                    <div class="media-right">
                                        <a href="assets/images/placeholder.jpg">
                                            <img src=""
                                                 class="img-circle" alt="">
                                        </a>
                                    </div>
                                </li>


                                @foreach($request->chats as $item)

                                    @if ($item->user_id == \Illuminate\Support\Facades\Auth::id())
                                        <li class='media'>
                                            <div class='media-left'>
                                                <img src='' alt=''>
                                            </div>
                                            <div class='media-body'>
                                                <div class='media-content'>{{$item->text}}</div>
                                                <span
                                                    class='media-annotation display-block mt-10'>{{$item->created_at}}</span>
                                            </div>
                                        </li>
                                    @else
                                        <li class='media reversed'>
                                            <div class='media-body'>
                                                <div class='media-content'>{{$item->text}}</div>
                                                <span
                                                    class='media-annotation display-block mt-10'>{{$item->created_at}}</span>
                                            </div>
                                            <div class='media-right'>
                                                <img src='' class='img-circle'
                                                     alt=''>
                                            </div>
                                        </li>
                                    @endif


                                @endforeach

                            </ul>
                            <form id="form_support" method="post"
                                  action="javascript:void(0)">
                                     <textarea id="text-area" name="message"
                                               class="form-control content-group" rows="3"
                                               cols="1" placeholder="تایپ کنید..."></textarea>
                                <input type="text" name="request_id" value="{{$request->id}}" hidden>
                                @csrf
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="icons-list icons-list-extended mt-10">
                                        </ul>
                                    </div>

                                    <div class="col-xs-6 text-right">
                                        <button type="submit"
                                                class="btn bg-teal-400 btn-labeled btn-labeled-right">
                                            <b><i class="icon-circle-left2"></i></b> ارسال
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @if ($request->status == "in-process")
                    <div class="col-md-6">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title text-black">کنترل معامله</h6>
                                <div class="list-group-divider"></div>
                                <div class="heading-elements">
                                    <ul class="icons-list">

                                    </ul>
                                </div>
                                <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form id="form_warranty_deal" method="post"
                                                      action="{{url('deal/set_warranty/'.$request->id)}}">
                                                    @csrf
                                                    <button type="submit" id="btn-warranty"
                                                            class="btn btn-xlg btn-success btn-labeled center-block btn-margin">
                                                        <b><i id="icon-btn-warranty" class="icon-coin-dollar"></i></b>ضمانت
                                                        مبلغ
                                                        معامله
                                                    </button>
                                                </form>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form id="form_release_deal" method="post"
                                                      action="{{url('deal/set_release/'.$request->id)}}">
                                                    @csrf
                                                    <button type="submit" id="btn-release"
                                                            class="btn btn-xlg btn-info btn-labeled center-block btn-margin">
                                                        <b><i
                                                                class="icon-racing"></i></b>
                                                        ازادسازی مبلغ معامله
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form id="form_cancele_deal" method="post"
                                                      action="">
                                                    <input type="hidden" name="request_id"
                                                           value=""/>
                                                    <input type="hidden" name="form_token"
                                                           value=""/>
                                                    <button type="submit" id="btn-cancel"
                                                            class="btn  btn-xlg btn-danger btn-labeled center-block btn-margin">
                                                        <b><i
                                                                class="icon-cancel-circle2"></i></b>انصراف
                                                        از ادامه معامله
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">

                                                <a href=""
                                                   target="_blank">
                                                    <button
                                                        class="btn  btn-xlg btn-warning btn-labeled center-block btn-margin">
                                                        <b><i class="icon-users4"></i></b>
                                                        حل اختلاف توسط پشتیبان
                                                    </button>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endif
            </div>
        @endif

    </div>
@endsection
