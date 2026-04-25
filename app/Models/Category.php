<?php

namespace App\Models;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }
}