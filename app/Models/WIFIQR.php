<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WIFIQR extends Model
{
    use HasFactory;

    public $table = 'wifiqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
