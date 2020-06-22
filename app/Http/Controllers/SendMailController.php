<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Mail;

class SendMailController extends Controller
{
    public function sendmail(Request $request)
    {
        /* forma1 */
        $data["last_name"] = $request->input("last_name");
        $data["email"] = $request->input("email");
        $data["first_name"] = $request->input("first_name");
        $data["dob"] = $request->input("dob");
        $data["tel"] = $request->input("tel");
        $data["height"] = $request->input("height");
        $data["adress"] = $request->input("adress");
        $data["weight"] = $request->input("weight");
        $data["howareyou"] = $request->input("howareyou");
        $data["yes_no"] = $request->input("yes_no");
        $data["yes_no1"] = $request->input("yes_no1");
        $data["high"] = $request->input("high");
        $data["yes_no2"] = $request->input("yes_no2");
        $data["yes_no3"] = $request->input("yes_no3");
        $data["yes_no4"] = $request->input("yes_no4");
        $data["yes_no5"] = $request->input("yes_no5");
        $data["yes_no6"] = $request->input("yes_no6");
        $data["yes_no7"] = $request->input("yes_no7");
        $data["yes_no8"] = $request->input("yes_no8");
        $data["txt_yes_no"] = $request->input("txt_yes_no");
        $data["txt_yes_no1"] = $request->input("txt_yes_no1");
        $data["txt_yes_no2"] = $request->input("txt_yes_no2");
        $data["txt_yes_no3"] = $request->input("txt_yes_no3");
        $data["txt_yes_no4"] = $request->input("txt_yes_no4");
        $data["txt_yes_no5"] = $request->input("txt_yes_no5");
        $data["txt_yes_no6"] = $request->input("txt_yes_no6");
        $data["txt_yes_no7"] = $request->input("txt_yes_no7");
        $data["txt_yes_no8"] = $request->input("txt_yes_no8");
        /*   forma2 */

        /*  forma 3 */
        $data["yes_no9"] = $request->input("yes_no9");
        $data["txt_yes_no9"] = $request->input("txt_yes_no9");
        $data["last_time"] = $request->input("last_time");
        $data["often"] = $request->input("often");
        $data["time_invest"] = $request->input("time_invest");
        $data["personal_goals"] = $request->input("personal_goals");
        $data["miscellaneus"] = $request->input("miscellaneus");
        $data["date"] = $request->input("date");


        $pdf = PDF::loadView('components.pdfMail', $data);

        try {
            Mail::send('components.mail', $data, function ($message) use ($data, $pdf) {
                $message->to('filuro.apt@gmail.com', 'Filuro Apt ')
                    ->subject("Personal Trainig INVOICE")
                    ->attachData($pdf->output(), "invoice.pdf");
            });
        } catch (JWTException $exception) {
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
            $this->statusdesc  =   "Error sending mail";
            $this->statuscode  =   "0";
        } else {

            $this->statusdesc  =   "Message sent Succesfully";
            $this->statuscode  =   "1";
        }
        return view('site.welcome')->with('invoice_message', $this->statusdesc);
    }
}