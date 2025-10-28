<?php

namespace App\Http\Controllers;
use App\Models\Statustracking;
use App\Repository\StatustrackingRepository;
use Illuminate\Http\Request;

class StatustrackingController extends Controller
{
    public static function getStatus(){
        $status = StatustrackingRepository::getNotReceivedItems();
        // dd($status);
     
    }
    public static function showall(){
        $allstatus = StatustrackingRepository::getAllStatustracking();
        // if($allstatus->isEmpty()){
        //     dd($allstatus->first()->status);
        // }
        dd($allstatus);
        return $allstatus;
       
    }
    // ใน Controller หรือ Service
public function checkItemStatus(Statustracking $item)
{
    // $status = $item->status;
    // $status = StatustrackingRepository::getNotReceivedItems();
    // ตรวจสอบว่าสถานะที่ดึงมาคือ ITEM_NOT_RECEIVED หรือไม่
    if ($item->status === TrackingStatus::ITEM_NOT_RECEIVED) {
        // ... โค้ดสำหรับรายการที่ยังไม่ได้รับของ
        return "สถานะปัจจุบัน: รอรับของ";
    }
    // return "Case Name: " . $item->status->name . ", Value: " . $item->status->value;
    // หรือเรียกใช้ชื่อ Case หรือ Value
    // return "Case Name: " . $item->status->name . ", Value: " . $item->status->value;
}
}
