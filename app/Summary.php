<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    protected $table="summaries";
    public $primaryKey="id";
    public $timestamps=true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
