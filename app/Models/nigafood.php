<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nigafood extends Model
{
    /** @use HasFactory<\Database\Factories\NigafoodFactory> */
    use HasFactory;
    protected $fillable = [
        'name',  'description'
    ];
    
    public function price()
    {
        return $this->hasOne(Nigaprice::class);
    }
}
