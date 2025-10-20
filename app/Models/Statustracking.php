<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statustracking extends Model
{
    protected $table = 'statustracking';

    protected $primaryKey = 'statustrackingId ';
    public $timestamps = false;
    

    use HasFactory;
}
