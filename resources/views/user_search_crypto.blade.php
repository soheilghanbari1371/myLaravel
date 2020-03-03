@extends('user_master_page')
@section('main_content')
    <div class="content">
        <div class="row">
            <form action="" method="get" id="set_ads">
                <input type="hidden" name="form_token"
                       value=""/>
                <div class="col-md-2">
                    <select name="coin" class="form-control">
                        <option value="opt">انتخاب کنید</option>
                        <option value="BTC">BTC</option>
                        <option value="DOGE">DOGE</option>
                        <option value="USDT">USDT</option>
                        <option value="BCH">BCH</option>
                        <option value="ETH">ETH</option>

                    </select>
                    <span class="help-block text-center">نوع ارز</span>
                </div>

                <div class="col-md-2">
                    <input name="min" type="text" class="form-control" placeholder="0.00001">
                    <span class="help-block text-center">حداقل مقدار خرید</span>
                </div>
                <div class="col-md-2">
                    <input name="max" type="text" class="form-control" placeholder="0.1">
                    <span class="help-block text-center">حداکثر مقدار خرید</span>
                </div>

                <div class="col-md-1">
                    <button type="submit" class="btn bg-bittzila">جستجو کن <i
                            class="icon-search4 position-right"></i></button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="panel panel-flat border-top-black">
                <div class="panel-heading">
                    <h6 class="panel-title">نتیجه جستجو</h6>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr class="bg-gold">
                                <th data-breakpoints="xs sm ">#</th>
                                <th data-breakpoints="xs sm ">فروشنده</th>
                                <th >نوع ارز</th>
                                <th data-breakpoints="xs sm " >تاریخ آگهی</th>
                                <th >موجودی ارز</th>
                                <th data-breakpoints="xs sm ">اختلاف قیمت</th>
                                <th data-breakpoints="xs sm "></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($advertisement as $item)
                                @if(($loop->odd)==1)
                                    <tr class='bg-table-strippted'>
                                @else
                                   <tr>
                                @endif

                                <td class='text-bold'>({{($loop->index+1)}})</td>
                                <td class='text-bold'>{{$item->user->name}}</td>
                                <td class='text-bold text-indigo-700'>{{$item->coin}}</td>
                                <td class='text-bold'>{{$item->created_at}}</td>
                                <td class='text-bold text-indigo-700'>{{$item->max}} ~ {{$item->min}}</td>
                                <td class='text-bold'>
                                @if($item->percent>0)
                                    <span class='text-danger'><i class='icon-stats-growth2 position-left'></i>{{$item->percent}} % </span>
                                    @else
                                    <span class='text-success'><i class='icon-stats-decline2 position-left'></i>{{$item->percent}} % </span>
                                @endif
                                </td>
                                <td class='text-bold'>
                                    <a href='{{url("crypto/item/".$item->id)}}'><span class='text-success'><i class='icon-eye position-left'></i>مشاهده آگهی</span></a>
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
