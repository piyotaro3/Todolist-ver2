<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;

    protected $fillable = ['todoname'];
    protected $guarded = array('id');

    public function users()
    {
        return $this->belongsTo('App\Models\Users');
    }

    public function tags()
    {
        return $this->belongsTo('App\Models\tags');
    }

}
