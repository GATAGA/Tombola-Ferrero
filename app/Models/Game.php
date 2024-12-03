<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['user_id', 'result', 'receipt', 'playing_time'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id', 'customer_id');
    }
}

