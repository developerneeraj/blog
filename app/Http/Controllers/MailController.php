<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    function email(Request $request){
    	$data=array(
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'subject'=>$request->subject,
    		'info'=>$request->message,
    		);
    	// dd($data['message']);
    	
    	Mail::send('email.mail',$data,function($message) use($data){
    		 $message->to($data['email']);
    		 $message->subject($data['subject']);
    		 $message->from('neeraj@gmail.com');
    		 // $message->message($data['message']);

        
    	});
    	// echo"Mail has been send";

  //   	$name=$request->name;
  //   	$email=$request->email;
  //   	$subject=$request->subject;
  //   	$message=$request->message;
  //   		$data=array(
  //   		$name,$email,$subject,$message);
  //   		// dd($data);
  //   		Mail::send('email.mail',$data,$name,$message, function($message){
  //   		 $message->to($email);
  //   		 $message->subject($subject);
  //   		 $message->from('neeraj@gmail.com');
  //   		 // $message->message($data['message']);
  // });
}
}
