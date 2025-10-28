<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Repository\TrackingStatus; 
//มองหาคลาส enum ที่เก็บสถานะในโฟลเดอร์ Repository
// use App\Enums\TrackingStatus;
// use Illuminate\Database\Eloquent\Casts\AsStringable;
class Statustracking extends Model
{
    protected $table = 'statustracking';

    protected $primaryKey = 'statustrackingId';
    public $timestamps = false;
    
    protected $casts =[
        // 'status' => 'string',
        'status' => TrackingStatus::class,
    ];

    use HasFactory;
}
