<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table="courses";
    public $primaryKey="id";
    public $timestamps=true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
