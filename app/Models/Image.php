<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //parent one to one polymorphic table
    public function imageable()
    {
        return $this->morphTo();
    }
}
