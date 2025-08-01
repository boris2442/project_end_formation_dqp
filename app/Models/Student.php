<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $guarded = [];
    public function specialite(){
        return $this->belongsTo(Specialite::class);
    }
    public function niveau(){
        return $this->belongsTo(Niveau::class);
    }
}
