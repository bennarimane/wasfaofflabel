<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    use \Conner\Tagging\Taggable;
    
    protected $fillable = ['title','age','unite','poids','pathologie_id','indication_id','user_id','tags','description'];
}