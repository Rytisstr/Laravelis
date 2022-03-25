<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function plain_email() {
        $data = array('name'=>"Gerb. xxx");
     
        Mail::send(['text'=>'mail'], $data, function($message) {
           $message->to('rytis.laravelis@gmail.com', 'Rytis Strankauskas')->subject
              ('Testas iš Laravel');
           $message->from('rytis.laravelis@gmail.com','SVAKO IST20');
        });
        echo "Išsiųstas laiškas";
}
public function html_email() {
    $data = array('name'=>"Gerb. xxx");
    Mail::send('mail', $data, function($message) {
        $message->to('rytis.laravelis@gmail.com', 'Rytis Strankauskas')->subject
        ('Testas iš Laravel');
     $message->from('rytis.laravelis@gmail.com','SVAKO IST20');
    });
    echo "HTML Išsiųstas laiškas";
 }
}