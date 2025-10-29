<?php

namespace App\Http\Controllers;
use App\Models\Statustracking;
use App\Repository\AsStringable;
use App\Repository\StatustrackingRepository;
use Illuminate\Http\Request;
use App\Repository\TrackingStatusEnum;
class StatustrackingController extends Controller
{
    public static function index(){
        $statusList = StatustrackingRepository::getAllStatustracking();
        return view('dashborad.admintecnicialtest',compact('statusList'));
    }

    // public static function changeStatusItem($statustrackingId){
    //     StatustrackingRepository::updateStatus($statustrackingId, AsStringable::RECEIVED);
    //     return redirect()->back()->with('success', 'อัพเดทสถานะเรียบร้อยแล้ว');
    // }
    // public static function changeStatusSupplier($statustrackingId){
    //     StatustrackingRepository::updateStatus($statustrackingId, AsStringable::SENTTOSUPPLIER);
    //     return redirect()->back()->with('success', 'อัพเดทสถานะเรียบร้อยแล้ว');
    // }
    // public static function changeStatusRepair($statustrackingId){
    //     StatustrackingRepository::updateStatus($statustrackingId, AsStringable::REPAIRFINISHED);
    //     return redirect()->back()->with('success', 'อัพเดทสถานะเรียบร้อยแล้ว');
    // }
    public static function changeStatusItem($statustrackingId){
        StatustrackingRepository::updateStatus($statustrackingId, TrackingStatusEnum::RECEIVED);
        return redirect()->back()->with('success', 'อัพเดทสถานะเรียบร้อยแล้ว');
    }
    public static function changeStatusSupplier($statustrackingId){
        StatustrackingRepository::updateStatus($statustrackingId, TrackingStatusEnum::SENTTOSUPPLIER);
        return redirect()->back()->with('success', 'อัพเดทสถานะเรียบร้อยแล้ว');
    }
    public static function changeStatusRepair($statustrackingId){
        StatustrackingRepository::updateStatus($statustrackingId, TrackingStatusEnum::REPAIRFINISHED);
        return redirect()->back()->with('success', 'อัพเดทสถานะเรียบร้อยแล้ว');
    }
    public static function getStatus(){
        // $status = StatustrackingRepository::getNotReceivedItems();
        // $status  = StatustrackingRepository::getNotSentToSupplierItems();
        // dd($status);
        // return $status;
    // $status = StatustrackingRepository::checkstatus();
     return view('dashborad.admintecnicialtest',compact('status'));
    }
    
    public static function showall(){
        $allstatus = StatustrackingRepository::getAllStatustracking();
        // if($allstatus->isEmpty()){
        //     dd($allstatus->first()->status);
        // }
        // dd($allstatus);
        // return $allstatus;
       
    }

}
