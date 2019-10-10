<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
  public function contact(Request $request){
       $subject = "Asunto del correo";
       $for = "matsalez@gmail.com";
       Mail::send('email',$request->all(), function($msj) use($subject,$for){
           $msj->from("consultas@brakeup.com.ar","Brake up | Shop");
           $msj->subject($subject);
           $msj->to($for);
       });
       return redirect()->back();
   }
}
