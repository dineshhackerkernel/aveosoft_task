<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Session;
class GeneralController extends Controller
{
    public function aboutus(){
    	return view('aboutus');
    }
    public function contactUs(){
    	return view('contactUs');
    }
    public function sendMailToAdmin(Request $request){
    	//return $request->all();
    	$data =  $request->all();
        Mail::to('deeneshsharma681@gmail.com')->send(new SendMail($data));
        Session::flash('message', 'your request sent successfully');
        return redirect('/contactUs');
    }
}
