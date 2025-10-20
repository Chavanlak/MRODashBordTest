<?php
namespace App\Repository;
use App\Models\NotiRepair;
class NotiRepairRepository{
    public static function getAll(){
        return NotiRepair::all();
    }   
    //dateReceiveFromBranch วันที่รับมาจากสาขา
    //dateSenttoSubplier  วันที่เเจ้งส่งซัพพลายเออร์
    //วันที่ซัพพลายเออร์ซ่อมเสณ้จเเล้วส่งคืน dateReceiveFromSubplier เเสดงว่าเรียบร้อยรอกดปิดงาน
    //ซ่อมเสร็จเเล้วส่งคืนสาขา (วันที่)dateJobReturnToBranch (สถานะการปิดงาน) StatusJobClosed
public static function SaveRepair($NotirepairId,$dateReceiveFromBranch,$dateSenttoSubplier,$dateReceiveFromSubplier,$dateJobReturnToBranch,$StatusJobClosed){
    $notirepair = new NotiRepair();
    $notirepair->NotirepairId = $NotirepairId;
    $notirepair->dateReceiveFromBranch = $dateReceiveFromBranch;
    $notirepair->dateSenttoSubplier = $dateSenttoSubplier;
    $notirepair->dateJobReturnToBranch = $dateJobReturnToBranch;
    $notirepair->StatusJobClosed = $StatusJobClosed;

    return $notirepair;
}

}


?>