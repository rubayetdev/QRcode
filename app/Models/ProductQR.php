<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQR extends Model
{
    use HasFactory;

    public $table = 'productqr';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'user_name',
        'company_name',
        'product_name',
        'batch_number',
        'making_date',
        'expired_date'
    ];
}
