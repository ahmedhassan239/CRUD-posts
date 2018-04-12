<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='posts';
    protected $fillable =['subject','firstname','lastname','body'];

    //Relationship function
    public function user(){
        return $this->belongsTo('App\User');
    }
}
