<?php
namespace App\Repository;
use App\Models\Statustracking;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
// use App\Enums\TrackingStatus;
enum TrackingStatus: string
{
    // ค่าต้องตรงกับในฐานข้อมูลเป๊ะๆ
    case ITEM_NOT_RECEIVED = 'ยังไม่ได้รับของ';
    case NOT_SENT_TO_SUPPLIER = 'ยังไม่ส่งSuplier';
    case REPAIR_NOT_STARTED = 'ยังไม่ดำเนินการซ่อม';
    case WORK_NOT_FINISHED = 'ยังไม่เสร็จงาน';
}
class StatustrackingRepository{
   
    public static function getstatustrackingById() {
        return Statustracking::where('statustrackingId')->get();
    }
    public static function getNotReceivedItems() {
        // สามารถใช้ TrackingStatus Enum ได้โดยตรงในไฟล์นี้
     
        return Statustracking::where('status', TrackingStatus::ITEM_NOT_RECEIVED)
                             ->get();
                      
    }
    public static function getAllStatustracking() {
        return Statustracking::all();
    }
    
    
    // ฟังก์ชันสำหรับสร้างรายการสถานะเริ่มต้น
    public static function createNewItem(array $data) {
        $data['status'] = TrackingStatus::ITEM_NOT_RECEIVED; // กำหนดสถานะด้วย Enum
        return Statustracking::create($data);
    }
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
?>