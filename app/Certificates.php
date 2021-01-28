<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    protected $table="certificates";
    public $primaryKey="id";
    public $timestamps=true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
