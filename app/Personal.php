<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table="personals";
    public $primaryKey="id";
    public $timestamps=true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
