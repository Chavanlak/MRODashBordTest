<?php

namespace App\Http\Controllers;
use App\Repository\NotiRepairRepository;
use Illuminate\Http\Request;

class NotiRepairContoller extends Controller
{
    public static function ShowNotiRepair(){
        return view('notirepair');
    }
    public static function Submit(Request $request){
        $NotirepairId = $request->NotirepairId;
        $dateReceiveFromBranch = $request->dateReceiveFromBranch;
        $dateSenttoSubplier = $request->dateSenttoSubplier;
        $dateReceiveFromSubplier = $request->dateReceiveFromSubplier;
        $dateJobReturnToBranch = $request->dateJobReturnToBranch;
        $StatusJobClosed = $request->StatusJobClosed;

        if($dateReceiveFromBranch =='ยังไม่ได้รับของ'){
            return redirect('/technical');
        }
        $notirepair = NotiRepairRepository::SaveRepair($NotirepairId, $dateReceiveFromBranch, $dateSenttoSubplier, $dateReceiveFromSubplier, $dateJobReturnToBranch, $StatusJobClosed);
        return $notirepair;
      
    }

    
}
