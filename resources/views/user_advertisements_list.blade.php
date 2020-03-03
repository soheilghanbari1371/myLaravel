@extends('user_master_page')
@section('main_content')
    <div class="content">

        <div class="row">
            <div class="panel panel-flat border-top-black">
                <div class="panel-heading">
                    <h6 class="panel-title">آگهی های فروش شما</h6>
                </div>
                <div class="col-md-9">

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="bg-gold">
                                <th data-breakpoints="xs sm ">#</th>
                                <th>نوع ارز</th>
                                <th>تعداد</th>
                                <th data-breakpoints="xs sm ">اختلاف قیمت</th>
                                <th data-breakpoints="xs sm ">تاریخ آگهی</th>
                                <th>وضعیت</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($ads as $item)

                            @if($loop->even)
                                <tr class='bg-table-strippted'>
                            @else
                                <tr>
                                    @endif
                                    <td class='text-bold'>{{$loop->index}}</td>
                                    <td class='text-bold'>{{$item->coin}}</td>
                                    <td class='text-bold'>{{$item->max}} ~ {{$item->min}}</td>
                                    <td class='text-bold'>
                                        @if($item->percent>0)
                                        <span class='text-danger'><i class='icon-stats-growth2 position-left'></i> {{$item->percent}}%</span>
                                        @else
                                        <span class='text-success'><i class='icon-stats-decline2 position-left'></i> - {{$item->percent}}%</span>
                                        @endif


                                    </td>
                                    <td class='text-bold'>{{$item->created_at}}</td>
                                    <td class='text-bold'>
                                        @if($item->status=="active")
                                            <span class="label label-success">فعال</span>
                                        @endif
                                        @if($item->status=="disabled")
                                        <span class="label label-danger">غیرفعال</span>
                                        @endif
                                        @if($item->status=="finished")
                                        <span class="label label-info">پایان یافته</span>
                                        @endif

                                        @if($item->status=="removed")
                                        <span class="label label-danger">حذف شده</span>
                                        @endif
                                        -<a class='text-muted' href='{{url('my/crypto/advertisements/'.$item->id)}}'> مشاهده اگهی</a>

                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
