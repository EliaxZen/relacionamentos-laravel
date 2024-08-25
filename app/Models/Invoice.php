<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    public $table = 'invoice';

    protected $fillable = [
        'description',
        'valor',
        'address_id',
        'user_id',
    ];
    use HasFactory;
}
