@extends('admin_master_page')
@section('CssOrJs')

@endsection
@section('main_content')

    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="panel-body panel panel-flat border-top-black">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="bg-gold">
                            <th data-breakpoints="xs sm " >#</th>
                            <th >شناسه کاربر</th>
                            <th >نام کاربر</th>
                            <th >وضعیت درخواست</th>
                            <th data-breakpoints="xs sm ">عملیات</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($auth_list_requests as $item)

                            @if($loop->even)
                                <tr class='bg-table-strippted'>
                            @else
                                <tr>
                            @endif

                            <td class='text-bold'>{{($loop->index)+1}}</td>
                            <td class='text-bold'>{{$item->id}}</td>
                            <td class='text-bold'>{{$item->name}}</td>

                            @if($item->state=="waiting")
                                <td class='text-bold'><span class='label bg-success-400'>درخواست جدید</span></td>

                            @else
                                <td class='text-bold'><span class='label bg-warning-400'>عدم تایید تلفن</span></td>

                            @endif

                            <td class='text-bold'> -

                                         <a class='text-muted' href='{{url("admin/auth/request/detail/".$item->id)}}'>مشاهده درخواست</a>

                                      </td>
                                </tr>
                      @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


@endsection
@section('CssOrJsFooter')

@endsection
