<?php
namespace App\Repository;
use App\Models\NotiRepair;
class NotiRepairRepository{
    public static function getAll(){
        return NotiRepair::all();
    }   
    public static function saveRepair($dateReceiveFromBranch,$dateReturntoSup,$dateReceiveFromsub){
        $notirepair = new NotiRepair();
        $notirepair->dateReceiveFromBranch = $dateReceiveFromBranch;
        $notirepair->dateReturntoSup = $dateReturntoSup;
        $notirepair->dateReceiveFromsub = $dateReceiveFromsub;
        $notirepair->save();
        return $notirepair;


        // switch ($statusupdate) {
        //     case 'รับของเเล้ว':
        //         return redirect('/technical');
        //     case 'ยังไม่ได้รับของ':
        //         return redirect('/statustracking');
        //     default:
        //         return view();
        // }


    }

}


?>