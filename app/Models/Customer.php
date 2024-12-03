<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_id';
    protected $fillable = ['name', 'surname', 'phone', 'address', 'receipt', 'address_ip', 'nbr_of_games', 'win', 'lose','receipt_value'];

    public function games()
    {
        return $this->hasMany(Game::class, 'user_id', 'customer_id');
    }
}
