<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
use App\Models\User;

class todo extends Model
{
    use HasFactory;

    protected $fillable = ['todoname','tag_id','user_id'];
    protected $guarded = array('id');

  
    public function users()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }

    public function tags()
    {
        return $this->belongsTo('App\Models\Tags','tag_id');
    }

}
