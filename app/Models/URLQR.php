<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class URLQR extends Model
{
    use HasFactory;

    public $table = 'urlqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
