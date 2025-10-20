<?php
namespace App\Repository;
use App\Models\Statustracking;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class StatustrackingRepository{
    public static function getAllStatustracking(){
        return Statustracking::all();
    }

    public static function save($statusupdate,$dateReceiveFromBranch,$dateReturntoSup,$dateReceiveFromsub){
        $statustracking = new Statustracking();
        $statustracking->statusupdate = $statusupdate;
        $statustracking->dateReceiveFromBranch = $dateReceiveFromBranch;
        $statustracking->dateReturntoSup = $dateReturntoSup;
        $statustracking->dateReceiveFromsub = $dateReceiveFromsub;
        $statustracking->save();
        return $statustracking;
    }
    public static function findStatus(){
        return Statustracking::where('statusupdate','ยังไม่ได้รับของ')->get();
    }
}
?>