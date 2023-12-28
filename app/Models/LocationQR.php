<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationQR extends Model
{
    use HasFactory;

    public $table = 'locationqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
