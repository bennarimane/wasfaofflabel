<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{ protected $fillable = ['user_id','classification_id','categorie_id','medicament_id','pathologie_id','titre','age','poids','unite','quantite','dure','descr','etat','type','matin','midi'];
    //
    public function classification() {
    	return $this->hasOne("App\Classification");
    }
}
