<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'size';

    protected $fillable = [
        'size',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
