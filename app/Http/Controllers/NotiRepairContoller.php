<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Repository\NotiRepairRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\NotiRepair;
use App\Repository\EquipmentRepository;
use App\Repository\EquipmenttypeRepository;

class NotiRepairContoller extends Controller
{
public static function checkNotiRepair(){
    $noti = NotiRepairRepository::getAllNotirepair();
    // dd($noti);
    return view('dashborad.notirepairlist', compact('noti'));
}
// $date = Carbon::now()->subDays(7);
//     $notirepair = NotiRepair::where('status','=','รอดำเนินการ')
//     ->where('created_at','<=',$date)
//     ->get();
//     return $notirepair;

}
