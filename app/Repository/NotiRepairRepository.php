<?php

namespace App\Repository;

use App\Models\NotiRepair;
use Carbon\Carbon;

class NotiRepairRepository
{
    // public static function getNotirepirById()
    //     {
    //         // return NotiRepair::where('NotirepairId')->get();
    //         return NotiRepair::where('NotirepairId')->first();

    //     }


    // public static function getNotirepirById($statustrackingId)
    // {
    //     // สมมติว่าในตาราง NotiRepair มีฟิลด์ 'statustrackingId' สำหรับเชื่อมโยง

    //     // ใช้ where() ตามด้วย get() ซึ่งจะคืนค่าเป็น Collection (Array/Object) เสมอ
    //     // ถ้าไม่พบข้อมูล จะคืนค่าเป็น Collection เปล่า ซึ่ง foreach สามารถจัดการได้
    //     return NotiRepair::where('statustrackingId', $statustrackingId)->get();

    //     // หรือถ้าคุณต้องการให้สามารถใช้ foreach ได้แม้ว่าจะดึงข้อมูลเดียว:
    //     // return NotiRepair::where('statustrackingId', $statustrackingId)->get(); 
    // }
    // ใน NotiRepairRepository 

public static function getNotirepirById($notiRepairId) 
{
    return NotiRepair::where('NotirepairId', $notiRepairId)->get();
}
    public static function getAllNotirepair()
    {
        return NotiRepair::all();
    }
}
