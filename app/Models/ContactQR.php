<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactQR extends Model
{
    use HasFactory;

    public $table = 'contactqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
