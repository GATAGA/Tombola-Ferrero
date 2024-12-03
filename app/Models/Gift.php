<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['gifts_number', 'remaining_gifts', 'gift_state'];
}
