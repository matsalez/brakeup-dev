<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
  public function contact(Request $request){
       $subject = "Asunto del correo";
       $for = "administracion@brakeup.com.ar";
       $tel = $request->tel;
       $email = $request->email;
       Mail::send('email',$request->all(), function($msj) use($subject,$for,$tel,$email){
           $msj->from("consultas@brakeup.com.ar","Brake up | Shop");
           $msj->subject($subject);
           $msj->to($for);
       });
       return redirect()->back();
   }
}
