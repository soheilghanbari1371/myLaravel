@extends('user_master_page')
@section('main_content')
    <div class="content">
        <div class="row ">
            <div class="panel panel-flat border-top-black panel-background-lemon">
                <div class="panel-heading panel-background-lemon">
                    <h5 class="panel-title">اگهی شما</h5>
                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                <div class="panel-body">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="bg-gold">
                            <th>نوع ارز</th>
                            <th>تعداد</th>
                            <th data-breakpoints="xs sm ">اختلاف قیمت</th>
                            <th data-breakpoints="xs sm ">تاریخ</th>
                            <th data-breakpoints="xs sm ">وضعیت اگهی</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td>{{$advertisement->coin}}</td>
                            <td>{{$advertisement->min}} ~ {{$advertisement->max}}</td>
                            <td>{{$advertisement->percent}}</td>
                            <td>{{$advertisement->created_at}}</td>

                            @if($advertisement->status=="active")
                                <td><span class='label label-success'>اگهی فعال میباشد</span>
                                    <a class='text-danger' href=''>حذف آگهی</a></td>
                            @endif
                            @if($advertisement->status=="disabled")
                                <td><span class='label label-warning'>اگهی غیر فعال شده است</span></td>
                            @endif
                            @if($advertisement->status=="finished")
                                <td><span class='label label-info'>معامله انجام شده است</span></td>
                            @endif
                            @if($advertisement->status=="removed")
                                <td><span class='label label-danger'>اگهی پاک شده است</span></td>
                            @endif
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-flat border-top-black ">
                <div class="panel-heading">
                    <h5 class="panel-title">خریداران آگهی ارز شما</h5>
                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>
                <div class="panel-body">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="bg-gold">
                            <th>خریدار</th>
                            <th>تعداد مورد تقاضا</th>
                            <th data-breakpoints="xs sm ">قیمت کل</th>
                            <th data-breakpoints="xs sm ">تاریخ درخواست مشتری</th>
                            <th data-breakpoints="xs sm ">وضعیت درخواست</th>
                        </tr>
                        </thead>
                        <tbody>

                            @if($advertisement->requests()->count()>0)

                            @else
                                @foreach($advertisement->requests() as $request)

                                    <tr>
                                   <td>-----</td>
                                    <td>{{$request->amount}}</td>
                                    <td>{{$request->price}}</td>
                                    <td>{{$request->created_at}}</td>
                                    @if ($request->status == "waiting") {
                                        <td><span class='label label-warning '>در انتظار</span>
                                            <a href=''>مشاهده</a>
                                        </td>
                                    @endif
                                    @if ($request->status == "disabled") {
                                        <td><span class='label label-warning'>اگهی غیر فعال شده است</span>
                                            </td>
                                    @endif
                                    @if ($request->status == "in-process") {
                                        <td><span class='label label-success'>پذیرفته شده</span>
                                                <a href=''>مشاهده</a>
                                            </td>
                                    @endif
                                    @if ($request->status == "approved") {
                                        <td><span class='label label-success'>اتمام معامله</span>
                                            </td>
                                    @endif
                                    @if ($request->status == "canseled") {
                                        <td><span class='label label-danger'>کنسل شده</span>
                                            </td>
                                    @endif
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endsection
