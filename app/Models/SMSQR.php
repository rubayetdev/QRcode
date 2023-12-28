<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMSQR extends Model
{
    use HasFactory;

    public $table = 'smsqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
