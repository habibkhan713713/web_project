<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestEmail;

class mailer extends Controller
{
    
public function index(){
     $data=['title'=>'test', 'body'=>'testing' ];
    
    Mail::to('habibkhan713713@gmail.com')->send(new SendTestEmail($data));

     dd('Sent succesfully');

}


}
