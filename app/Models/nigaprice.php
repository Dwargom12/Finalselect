<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nigaprice extends Model
{
    /** @use HasFactory<\Database\Factories\NigapriceFactory> */
    use HasFactory;
    protected $fillable = [
        'nigafood_id', 'amount', 'currency'
    ];

    public function food()
    {
        return $this->belongsTo(Nigafood::class, 'nigafood_id');
    }
}

