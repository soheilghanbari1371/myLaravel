@extends('user_master_page')
@section('CssOrJs')
    <script>
        $(document).ready(function () {
            var request;
            $("#form_support").submit(function (event) {
                console.log('here1');
                // Prevent default posting of form - put here to work in case of errors
                event.preventDefault();
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
                var myurl = '{{url('seller/set/chat/item')}}';

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
                        jqXHR
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
                                <h6 class="text-semibold no-margin-top">مشخصات درخواست خریدار</h6>
                                <ul class="list list-unstyled">
                                    <li> خریدار : ----</li>
                                    <li> کد معامله : <span
                                            class="text-semibold">{{$user_request->id}}#</span></li>
                                    <li> مبلغ کل : <span class="text-bold"><b>
                                                {{$user_request->price}}
                                                    تومان</span></b></li>
                                </ul>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="text-semibold text-right no-margin-top"><b>{{$user_request->coin}}</b></h6>
                                <ul class="list list-unstyled text-right">
                                    <li> تعداد تقاضا: <span
                                            class="text-semibold bg-gray">{{$user_request->amount}}</span>
                                    </li>
                                    <li class="dropdown">
                                        وضعیت: &nbsp;
                                        @if($user_request->status=="waiting")
                                            <span class='label bg-danger-400 text-highlight'>در انتظار</span>
                                        @endif
                                        @if($user_request->status=="canceled")
                                            <td><span class='label bg-danger-400  text-highlight'>حذف شده</span>
                                            </td>
                                        @endif
                                        @if($user_request->status=="disabled")
                                            <td><span class='label bg-danger-400 text-highlight'>غیر فعال</span>
                                            </td>
                                        @endif
                                        @if($user_request->status=="approved")
                                            <td><span class='label bg-success-400 text-highlight'>خاتمه یافته</span>
                                            </td>
                                        @endif
                                        @if($user_request->status=="in-process")
                                            <td><span class='label bg-info-400 text-highlight'>در حال انجام</span>
                                            </td>
                                        @endif

                                    </li>
                                    <li class="dropdown">
                                        گروگذاری: &nbsp;
                                        @if($user_request->warranty)
                                        <td><span class='label bg-success-400  text-highlight'>انجام شده</span>
                                        </td>

                                        @else
                                            <td><span class='label bg-danger-400 text-highlight'>انجام نشده</span>
                                            </td>
                                        @endif
                                    </li>
                                    <li class="dropdown">

                                        @if($user_request->status=="waiting")
                                            <a href='{{url('deal/set_accept/'.$user_request->id)}}'>
                                                <i class='position-left text-success-400'></i>پذیرش درخواست</a>
                                            </td>
                                        @endif

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <ul>
                            <li><span class="status-mark border-danger position-left"></span> تاریخ درخواست: <span
                                    class="text-semibold">{{$user_request->created_at}}</span>
                            </li>

                        </ul>


                    </div>
                </div>
            </div>
            @if($user_request->status =='in-process')
                <div class="col-md-6 control-deal ">
                    <div class="panel border-left-lg border-left-success invoice-grid timeline-content">
                        <div class="panel-heading">
                            <h6 class="panel-title">کنترل معامله</h6>

                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href=""
                                       target="_blank">
                                        <button type="button" class="btn bg-teal-700 btn-labeled"><b><i
                                                    class="icon-pin-alt"></i></b>حل اختلاف به کمک پشتیبان
                                        </button>
                                    </a>

                                </div>
                                <div class="col-lg-6">
                                    <button type="button" class="btn btn-danger btn-labeled"><b><i
                                                class="icon-pin-alt"></i></b>لغو
                                        این معامله
                                    </button>

                                </div>
                            </div>
                            <div class="notes row">
                                - لطفا در انجام معامله سریع عمل کنید .
                            </div>
                            <div class="row">
                                - در صورت بروز هر گونه مشکل از پشتیبان کمک بخواهید.
                            </div>

                        </div>
                    </div>
                </div>
            @endif
        </div>
        @if($user_request->status =='in-process')
            <div class="row control-deal">
                <div class="col-md-12">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title"> گفتگو با خریدار</h6>

                            <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                        <div class="panel-body">
                            <ul id="chatroom" class="media-list chat-list content-group">
                                <li class="media reversed">
                                    <div class="media-body">
                                        <div class="media-content media-custome">کاربر گرامی سلام !
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



                                    @foreach($user_request->chats as $item)
                                        @if ($item->user_id == \Illuminate\Support\Facades\Auth::id())
                                            <li class='media'>
                                                <div class='media-left'>
                                                    <img src='' class='img-circle' alt=''>
                                                </div>
                                                <div class='media-body'>
                                                    <div class='media-content'>{{$item->text}}</div>

                                                    <span class='media-annotation display-block mt-10'> 9:54 شنبه <a
                                                            href='#'><i
                                                                class='icon-pin-alt position-right text-muted'></i></a></span>
                                                </div>
                                            </li>
                                        @else
                                            <li class='media reversed'>
                                                <div class='media-body'>
                                                    <div class='media-content'>{{$item->text}}
                                                    </div>

                                                    <span class='media-annotation display-block mt-10'> 9:54 شنبه <a
                                                            href='#'><i
                                                                class='icon-pin-alt position-left text-muted'></i></a>{{$item->created_at}}</span>
                                                </div>
                                                <div class='media-right'>
                                                    <img src='' class='img-circle' alt=''>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach

                            </ul>
                            <form id="form_support" method="post"
                                  action="">
                                @csrf
                            <textarea id="text-area" name="message"
                                      class="form-control content-group" rows="3"
                                      cols="1" placeholder="تایپ کنید..."></textarea>
                                <input type="text" name="request_id" value="{{$user_request->id}}" hidden>

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

            </div>
        @endif


    </div>
@endsection
