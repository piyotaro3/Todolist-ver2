<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Todo;


class tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function Todos(){
        return $this->hasMany('App\Models\Todo');
    }
}
