@extends('user_master_page')
@section('CssOrJs')
    <script>
        $(document).ready(function () {
            var request;
            $("#form_support").submit(function (event) {


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
                var myurl ='{{url('user/set/new/ticketchat')}}';

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
                    if(response){
                        var base_url ='ddddd';

                        var message = '<li class="media">' + '<div class="media-left">'
                            + '<img src="' + base_url + '" class="img-circle" alt="">' +
                            '</div><div class="media-body">' +
                            '<div class="media-content">' + $("textarea[name='text']").val() + '</div>' +
                            '</div></li>';


                        $(message).appendTo($("#chatroom"));

                        var element = document.getElementById("chatroom");
                        element.scrollTop = element.scrollHeight;
                        $("#text-area").val(" ");
                    }else {

                    }



                });

                // Callback handler that will be called on failure
                request.fail(function (jqXHR, textStatus, errorThrown) {
                    // Log the error to the console

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
    <!-- Content area -->
    <div class="content">

        <div class="row chatroom">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title text-black">گفتگو با پشتیبان</h6>
                        <div>عنوان: ------</div>
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


                            @foreach ($ticket_chats as $item)

                                @if (!$item->isadmin)
                                    <li class='media'>
                                        <div class='media-left'>
                                            <img src=''/>
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
                              action="">
                            @csrf
                            <textarea id="text-area" name="text"
                                      class="form-control content-group" rows="3"
                                      cols="1" placeholder="تایپ کنید..."></textarea>

                            <input type="hidden" name="ticket_id"
                                   value="{{$ticket->id}}"/>

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

    </div>
@endsection
