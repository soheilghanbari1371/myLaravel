@extends('user_master_page')

@section('main_content')
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <div class="panel panel-flat border-top-black ">
                <div class="panel-heading">
                    <h5 class="panel-title">لیست ارزهای خریداری شده</h5>
                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                <div class="panel-body">
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="bg-gold">
                            <th >فروشنده</th>
                            <th >نوع ارز</th>
                            <th data-breakpoints="xs sm ">تعداد</th>
                            <th data-breakpoints="xs sm ">مبلغ کل</th>
                            <th data-breakpoints="xs sm ">تاریخ</th>
                        </tr>
                        </thead>
                        <tbody>



                        @foreach($buy_history as $item)

                            <tr>
                            <td>----</td>
                            <td>{{$item->coin}}</td>
                            <td>{{$item->amount}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach





                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
