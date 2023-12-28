<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailQR extends Model
{
    use HasFactory;

    public $table = 'emailqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
