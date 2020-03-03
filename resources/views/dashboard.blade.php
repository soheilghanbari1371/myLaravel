@extends('user_master_page')
@section('main_content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="panel-body">
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-justified custome-nav-tabs">
                            <li class="active text-bold">
                                <div class="form-control-feedback">
                                    <i class="icon-upload4"></i>
                                </div>
                                <a href="#basic-justified-tab1" data-toggle="tab" aria-expanded="true">فروش
                                    ارز دیجیتال</a></li>
                            <li class="text-bold">
                                <div class="form-control-feedback">
                                    <i class="icon-download4"></i>
                                </div>
                                <a href="#basic-justified-tab2" data-toggle="tab" aria-expanded="false">خرید
                                    ارز دیجیتال</a></li>
                        </ul>

                        <div class="tab-content panel-background-lemon">
                            <div class="tab-pane active" id="basic-justified-tab1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-md-right">آگهی فروش ارز خود را ثبت کنید .</h6>
                                    </div>

                                </div>
                                <div class="row">
                                    <form action="{{url('insert/advertisement')}}"
                                          method="post" id="set_ads">
                                        @csrf
                                        <div class="col-md-2">
                                            <select id="coinname" name="coin" class="form-control">
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
                                            <div class="input-group">
                                                <input type="text" name="min" class="form-control"
                                                       placeholder="0.00001">
                                                <span class="input-group-addon"><i
                                                        class="icon-arrow-down7"></i></span>
                                            </div>
                                            <span class="help-block text-center">حداقل مقدار فروش</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" name="max" class="form-control"
                                                       placeholder="0.1">
                                                <span class="input-group-addon"><i
                                                        class="icon-arrow-up7"></i></span>
                                            </div>
                                            <span class="help-block text-center">حداکثر مقدار فروش</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" id="percent" name="percent"
                                                       class="form-control" placeholder="0">
                                                <span class="input-group-addon"><i class="icon-percent"></i></span>
                                            </div>
                                            <span class="help-block text-center">درصد اختلاف با قیمت لحظه ای</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input type="text" id="finalprice" class="form-control"
                                                       placeholder="0" disabled>
                                                <span class="input-group-addon"><i
                                                        class="icon-cash3"></i></span>
                                            </div>
                                            <span class="help-block text-center">قیمت نهایی با در صد اختلاف</span>
                                        </div>
                                        <div class="col-md-1">
                                            <button type="submit" name="btnsubmit" class="btn bg-bittzila">
                                                ثبت کن<i class="icon-arrow-left13 position-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="tab-pane" id="basic-justified-tab2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="text-md-right">نوع ارز مورد نیاز را مشخص کنید .</h6>
                                    </div>

                                </div>
                                <div class="row">
                                    <form action="{{url('search/crypto_list')}}"
                                          method="post" id="search_ads">
                                        @csrf

                                        <div class="col-md-2">
                                            <select id="search_coin" name="coin" class="form-control">
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
                                            <div class="input-group">
                                                <input name="min" id="search_min" type="text"
                                                       class="form-control" placeholder="0.00001">
                                                <span class="input-group-addon"><i
                                                        class="icon-arrow-down7"></i></span>
                                            </div>
                                            <span class="help-block text-center">حداقل مقدار خرید</span>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="input-group">
                                                <input name="max" id="search_max" type="text"
                                                       class="form-control" placeholder="0.1">
                                                <span class="input-group-addon"><i
                                                        class="icon-arrow-up7"></i></span>
                                            </div>
                                            <span class="help-block text-center">حداکثر مقدار خرید</span>
                                        </div>

                                        <div class="col-md-1">
                                            <button type="submit" class="btn bg-bittzila">جستجو کن <i
                                                    class="icon-search4 position-right"></i></button>
                                        </div>
                                    </form>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-flat">
                <div class="panel-heading panel-danger">

                    <h6 class="panel-title">معاملات</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false"><i class="icon-cog3"></i> <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href=""><i
                                                class="icon-folder-upload2"></i>آگهی های من</a></li>
                                    <li><a href=""><i
                                                class="icon-folder-upload2"></i>درخواستهای خرید من</a>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <div  id="deal_alarm"class="icon-object border-black text-green-300"><i class="icon-spinner9"></i></div>
                    <h5 class="text-semibold">پیام های معاملات</h5>
                    <p class="mb-15">دسترسی به آخرین رخداد معاملات</p>
                    <a id="deal_link_alarm" href="" class="btn
                       bg-green-400">مشاهده پیام</a>

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-flat">
                <div class="panel-heading panel-danger">
                    <h6 class="panel-title">پشتیبانی</h6>

                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false"><i class="icon-cog3"></i> <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href=""><i
                                                class="icon-bubbles"></i>گفتگو با پشتیبان</a></li>

                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-folder2"></i>سوالات متداول</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <div id="ticket_alarm" class="icon-object border-black text-danger-300"><i class="icon-headset"></i></div>
                    <h5 class="text-semibold">پیام های پشتیبانی</h5>
                    <p class="mb-15">دسترسی به آخرین پیام پشتیبانی</p>
                    <a id="ticket_link_alarm" href="" class="btn
                       bg-danger-400">مشاهده پیام</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-flat">
                <div class="panel-heading panel-danger">
                    <h6 class="panel-title text-slate-700">بانک</h6>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   aria-expanded="false"><i class="icon-cog3"></i> <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href=""><i
                                                class="icon-minus3"></i>برداشت از حساب</a></li>
                                    <li><a href=""><i
                                                class="icon-plus3"></i>واریز به حساب</a></li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="">><i
                                                class="icon-stack-minus"></i>سوابق برداشت از حساب</a>
                                    </li>
                                    <li>
                                        <a href=""><i
                                                class="icon-stack-plus"></i>سوابق واریز به حساب</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="panel-body text-center">
                    <div id="bank_alarm" data-animation="shake" class="icon-object border-black text-blue-300"><i class="icon-cash2"></i></div>
                    <h5 class="text-semibold">پیام های بانکی</h5>
                    <p class="mb-15">دسترسی به آخرین تراکنش واریز/برداشت وجه</p>
                    <a id="bank_link_alarm" href="" class="btn
                       bg-blue-400">مشاهده پیام</a>
                </div>
            </div>
        </div>
    </div>
@endsection
