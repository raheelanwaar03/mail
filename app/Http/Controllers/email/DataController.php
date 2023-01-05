<?php

namespace App\Http\Controllers\email;

use App\Http\Controllers\Controller;
use App\Mail\adminEmail;
use App\Mail\userEmail;
use App\Models\email\EmailData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DataController extends Controller
{
    public function getData(Request $request)
    {
        $emailData = new EmailData();
        $emailData->fName = $request->fName;
        $emailData->lName = $request->lName;
        $emailData->email = $request->email;
        $emailData->phone = $request->phone;
        $emailData->mobphone = $request->mobphone;
        $emailData->addr1 = $request->addr1;
        $emailData->addr2 = $request->addr2;
        $emailData->city =  $request->city;
        $emailData->state =  $request->state;
        $emailData->country =  $request->country;
        $emailData->zip =  $request->zip;
        $emailData->help = $request->help;
        $emailData->save();

        $adminEmail = 'billbledsoe@spartanburgmaga.com';

        Mail::to($emailData->email)->send(new userEmail());
        Mail::to($adminEmail)->send(new adminEmail($emailData));
        return redirect()->back()->with('success', 'Your request has been submited');
    }
}
