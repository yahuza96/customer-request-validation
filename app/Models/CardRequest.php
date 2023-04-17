<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'card_number',
        'status',
    ];
}
