<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model

    {    protected $fillable = ['name'];
        public function prescriptions() {
            return $this->hasMany('App\Prescription');
        }
}
