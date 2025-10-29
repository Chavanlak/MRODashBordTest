<?php

namespace App\Repository;

use App\Models\Statustracking;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

// use App\Enums\TrackingStatus;
// enum AsStringable: string
enum TrackingStatusEnum: string
{
    // ค่าต้องตรงกับในฐานข้อมูล'('ยังไม่ได้รับของ','ได้รับของเเล้ว','ยังไม่ส่งSuplier','ส่งSuplierเเล้ว','ยังไม่ดำเนินการซ่อม','ซ่อมงานเสร็จเเล้ว'
    case NOTRECEIVED = 'ยังไม่ได้รับของ';
    case RECEIVED = 'ได้รับของเเล้ว';
    case NOTSENTTOSUPPLIER = 'ยังไม่ส่งSuplier';
    case SENTTOSUPPLIER = 'ส่งSuplierเเล้ว';
    case REPAIRNOTSTARTED = 'ยังไม่ดำเนินการซ่อม';
    case REPAIRFINISHED = 'ซ่อมงานเสร็จเเล้ว';
    // case WORKNOTFINISHED = 'ยังไม่เสร็จงาน';
}
class StatustrackingRepository
{


    public static function getstatustrackingById()
    {
        return Statustracking::where('statustrackingId')->get();
    }
    //การรับของ
    // public static function getNotReceivedItems() {

    //     return Statustracking::where('status', AsStringable::NOTRECEIVED)
    //                          ->get();

    // }
    // public static function getNotReceivedItems():Collection{
    //     return Statustracking::where('status', AsStringable::NOTRECEIVED->value)
    //                          ->get();
    // }
    // public static function updateStatus($statustrackingId, AsStringable $newStatus) {
    //     $status = Statustracking::find($statustrackingId);
    //    if(!$status){
    //     return false; 
    //    }
    //    $status->status = $newStatus->value; 
    //      $status->save();

    //      return true;

    // }
    public static function updateStatus($statustrackingId, $status)
    {
        DB::table('statustracking')
            ->where('statustrackingId', $statustrackingId)
            ->update(['status' => $status->value]); // enum -> string
    }

    // public static function getNotSentToSupplierItems()
    // {

    //     return Statustracking::where('status', AsStringable::NOTSENTTOSUPPLIER)
    //         ->get();
    // }
    // public static function checkstatus()
    // {

    //     $status = AsStringable::NOTRECEIVED;
    //     if ($status->value === 'ยังไม่ได้รับของ') {
    //     }
    // }
    //     if(Statustracking::where('status', AsStringable::NOTRECEIVED)->exists()){
    //         return true;
    // }
    // if(AsStringable::NOTRECEIVED === 1){
    //     return true;
    // }
    // if(AsStringable::NOTRECEIVED->value === 'ยังไม่ได้รับของ'){
    //     return true;
    // }

    public static function getAllStatustracking()
    {
        return Statustracking::all();
    }


    // ฟังก์ชันสำหรับสร้างรายการสถานะเริ่มต้น
    // public static function createNewItem(array $data)
    // {
    //     $data['status'] = AsStringable::NOTRECEIVED; // กำหนดสถานะด้วย Enum
    //     return Statustracking::create($data);
    // }
    // public static function getNotReceivedItems() {
    //     // ✅ แก้: ใช้ชื่อ Namespace นำหน้า
    //     return Statustracking::where('status', \App\Repository\TrackingStatus::ITEM_NOT_RECEIVED)
    //                          ->get();
    // }

    // public static function createNewItem(array $data) {
    //     // ✅ แก้: ใช้ชื่อ Namespace นำหน้า
    //     $data['status'] = \App\Repository\TrackingStatus::ITEM_NOT_RECEIVED; 
    //     return Statustracking::create($data);
    // }
}
