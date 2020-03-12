<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function authUserData()
    {


        return view('user_authentication_page');

    }

    public function fillUserData(Request $request)
    {
        $messages = [
            'nationalcodeimage.max' => 'به حد اکثر سایز اپلود فایل توجه کنید',
            'nationalcodeimage.required' => 'تصویر کارت ملی را اپلود کنید',
            'feeimage.max' => 'به حد اکثر سایز اپلود فایل توجه کنید',
            'feeimage.required' => 'تصویر قبض مالیاتی را اپلود کنید',
            'email.required' => 'ایمیل را وارد کنید',
            'email.email' => 'ایمیل معتبر نیست',
            'city.required' => 'شهر خود را وارئ کنید',
            'state.required' => 'استان خود را وارد کنید',
            'postal_code.required' => 'کد پستی خود را وارد کنید',
            'cell_phone.required' => 'شماره همراه خود را وارد کنید',
            'home_phone.required' => 'شماره تلفت ثابت خود را وارد کنید',
            'national_id.required' => 'کد ملی خودر را وارد کنید',
            'birthday.required' => 'تاریخ تولد خود را وارد کنید',
            'name.required' => 'نام خود را وارد کنید',
            'family.required' => 'نام خانوادگی خود را وارد کنید',

        ];

        $request->validate([
            'nationalcodeimage' => 'required|mimes:png|max:2048',
            'feeimage' => 'required|mimes:png|max:2048',
            'email' => 'required|email',
            'city' => 'required|string',
            'state' => 'required|string',
            'postal_code' => 'required',
            'address' => 'required|string',
            'cell_phone' => 'required',
            'home_phone' => 'required',
            'national_id' => 'required',
            'birthday' => 'required|string',
            'name' => 'required|string',
            'family' => 'required|string',
        ], $messages);


        $fileName_national_card = time() . '.' . $request->nationalcodeimage->extension();
        $request->nationalcodeimage->move(public_path('uploads'), $fileName_national_card);
        $fileName_fee_image = time() . '.' . $request->feeimage->extension();
        $request->feeimage->move(public_path('uploads'), $fileName_fee_image);
        $user = Auth::user();
        $user->email = $request->email;
        $user->name = $request->name . " " . $request->family;
        $user->nationalid = $request->national_id;
        $user->birthday = $request->birthday;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->postaladdress = $request->address;
        $user->postalcode = $request->postal_code;
        $user->cellphone = $request->cell_phone;
        $user->homephone = $request->home_phone;

    }
}
