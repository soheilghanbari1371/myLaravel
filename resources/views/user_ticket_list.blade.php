@extends('user_master_page')
@section('main_content')

    <!-- Content area -->
    <div class="content">
        <div class="panel panel-body stack-media-on-mobile">
            <div class="media-left">
                <a href="#" class="btn btn-link btn-icon text-teal">
                    <i class="icon-question7 icon-2x no-edge-top"></i>
                </a>
            </div>

            <div class="media-body media-middle">
                <h6 class="media-heading text-semibold">برای مشکل خود راه حلی پیدا نکردید؟</h6>
                همین حالا یک تیکت ارسال کنید....
            </div>

            <div class="media-right media-middle">
                <a href='{{url('user/new/ticket')}}' class="btn bg-warning-400 btn-lg"><i class="icon-mail5 position-left"></i>ارسال تیکت</a>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-flat border-top-black ">
                <div class="panel-heading">
                    <h5 class="panel-title">تیکت های ارسال شده</h5>
                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                <div class="panel-body">
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="bg-gold">
                            <th data-breakpoints="xs sm ">#</th>
                            <th>عنوان</th>
                            <th>وضعیت</th>

                            <th data-breakpoints="xs sm ">بخش</th>
                            <th data-breakpoints="xs sm ">تاریخ ارسال</th>
                            <th data-breakpoints="xs sm "></th>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach($ticket_list as $item)
                            @php
                                $title = strlen($item->title) > 24 ? substr($item->title,0,24)."..." : $item->title;
                            @endphp
                            <tr>
                                <td>{{($loop->index)+1}}</td>
                                <td>{{$item->title}}</td>
                                @if($item->status)
                                    <td><span class='label label-success label-block'>فعال</span></td>


                                @else
                                    <td><span class='label label-danger label-block'>بسته شده</span></td>
                                @endif

                                <td>{{$item->department}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><a href='{{url('user/ticket/detail/'.$item->id)}}'>مشاهده</a></td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
