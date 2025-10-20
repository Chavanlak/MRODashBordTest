<?php

namespace App\Http\Controllers;

use App\Repository\StatustrackingRepository;
use Illuminate\Http\Request;

class StatustrackingController extends Controller
{
    public static function Submit(Request $request){
        $statusupdate = $request->statusupdate;
        $dateReceiveFromBranch = $request->dateReceiveFromBranch;
        $dateReturntoSup = $request->dateReturntoSup;
        $dateReceiveFromsub = $request->dateReceiveFromsub;

        $statustracking = StatustrackingRepository::save($statusupdate, $dateReceiveFromBranch, $dateReturntoSup, $dateReceiveFromsub);
        if($statusupdate == 'รับของเเล้ว'){
            return redirect('/technical');
        }
        else if($statusupdate == 'ยังไม่ได้รับของ'){
            return redirect('/statustracking');
        }
        return view();
    }
}
