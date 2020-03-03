@extends('user_master_page')
@section('main_content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="panel panel-flat border-top-black">
                <div class="panel-heading">
                    <h6 class="panel-title">درخواست های شما</h6>
                </div>
                <div class="col-md-9">
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="bg-gold">
                                <th>#</th>
                                <th >نوع ارز</th>
                                <th >تعداد</th>
                                <th data-breakpoints="xs sm " >تاریخ درخواست</th>
                                <th data-breakpoints="xs sm ">وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user_request as $item)
                                @if($loop->odd)
                                    <tr class='bg-table-strippted'>
                                @else{
                                    <tr>
                                @endif
                                <td class='text-bold'>{{($loop->index)+1}}</td>
                                <td class='text-bold'>{{$item->coin}}</td>
                                <td class='text-bold'>{{$item->amount}}</td>
                                <td class='text-bold'>{{$item->created_at}}</td>
                                <td class='text-bold text-muted'>
                                    @if($item->status=="waiting")
                                        <span class="label label-info">در انتظار</span>
                                    @endif
                                    @if($item->status=="canceled")
                                        <span class="label label-danger">حذف شده</span>
                                    @endif
                                    @if($item->status=="disabled")
                                        <span class="label label-danger">رد شده</span>
                                    @endif
                                    @if($item->status=="in-process")
                                        <span class="label label-success">در حال اجرا</span>
                                    @endif
                                    @if($item->status=="approved"){
                                    <span class="label label-success">تمام شده</span>
                                    @endif
                                    <a class='text-muted'  href='{{url('deal/buy_advertisement/'.$item->id)}}' class='text-grey-800'><i class='position-left '></i>مشاهده درخواست</a></td>
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
