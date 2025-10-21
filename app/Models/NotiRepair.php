<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotiRepair extends Model
{
    protected $table = 'notirepair';
    protected $primaryKey = 'NotirepairId';
    public $timestamps = false;
    use HasFactory;
}
