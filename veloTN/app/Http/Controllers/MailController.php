<?php

namespace App\Http\Controllers;
use App\Models\booking_bike;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    /**
     * @param string $eamil
     * @param string $username
     * @param string $price
     * @return void
     */
    public static function basic_email( string $eamil ,string $username,string $price,string $bike,string $quantite,string $start_date) {
        $data = array('name'=>$username,'email'=>$eamil,'price'=>$price,'bike'=>$bike,'quantite'=>$quantite,'start_date'=>$start_date);

        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('elyes.zarrad@esprit.tn', 'Tutorials Point')->subject
            ('VELO TN new order');
            $message->from('elyes.zarrad@esprit.tn','elyes');
        });

    }
    public function html_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}
