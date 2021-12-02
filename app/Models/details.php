<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;
    protected $table = 'details';
    public function books()
    {
        return $this->hasOne(books::class);
    }
}
