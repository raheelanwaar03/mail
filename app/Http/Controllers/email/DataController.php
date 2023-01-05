<?php

namespace App\Http\Controllers\email;

use App\Http\Controllers\Controller;
use App\Models\email\EmailData;
use Illuminate\Http\Request;

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
        return redirect()->back()->with('massage', 'Your request has been submited');
    }
}
