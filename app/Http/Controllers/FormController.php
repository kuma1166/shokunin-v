<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// use App\Http\Requests\ContactFormRequest;
// use App\Mail\ContactFormAdminMail;
// use App\Mail\ContactFormUserMail;
use App\Mail\UserConfirmationMail;
use App\Mail\AdminNotificationMail;



class FormController extends Controller
{
    // 情報入力ページ
    public function index()
    {
        return view('contact.index');
    }

    // 確認ページ
    public function confirm(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'number' => 'required|integer',
            'company' => 'nullable',
            'FirstName' => 'required',
            'LastName' => 'required',
            'phone' => 'nullable|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'email' => 'required|email',
            'allergy' => 'nullable',
            'body' => 'nullable',
        ]);
        $date = $request->input('date');
        $number = $request->input('number');
        $packageName = $request->input('packageName');
        $adultPrice = $request->input('adultPrice');
        $childPrice = $request->input('childPrice');
        $image = $request->input('image');
        $description = $request->input('description');
        $plan = $request->input('plan');
        // $sushiArtisanId = $request->input('sushi_artisan_name');

        return view('contact.confirm', [
            'data' => $validatedData,
            'date' => $date,
            'number' => $number,
            'packageName' => $packageName,
            'adultPrice' => $adultPrice,
            'childPrice' => $childPrice,
            'image' => $image,
            'description' => $description,
            'plan' => $plan,
            'sushiArtisanName' => $request->input('sushi_artisan_name'),
        ]);
    }

    // サンクスページ
    public function complete(Request $request)
    {
        $data = $request->all();

        Mail::to($request->user()->email)->send(new UserConfirmationMail($data));
        // Mail::to($request->user())->send(new UserConfirmationMail($data));
        // Mail::to('shokunin.lab16@gmail.com')->send(new AdminNotificationMail($data));
        Mail::to('shokunin.lab16@gmail.com')->send(new AdminNotificationMail($data));

        return view('contact.complete');
    }

}
