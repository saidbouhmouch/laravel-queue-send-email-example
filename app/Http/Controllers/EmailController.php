<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Jobs\SendEmailJob;

class EmailController extends Controller
{
    public function sendEmail(Request $request){
        $data = array(
            "name"=> $request->input('name'),
            "email"=> $request->input('email'),
            "msg"=> $request->input('msg'),
        );
        $emailJob = (new SendEmailJob($data))->delay(Carbon::now()->addMinutes(3));
        dispatch($emailJob);
        return redirect('/')->with('message', 'Your message has been sent to us');
    }
}
