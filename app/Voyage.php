<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    //Table Name
    protected $table = 'voyages';

    //PrimaryKey
    public $primaryKey ='id';

    //Timestamps
    public $timestamps = true;

    protected $fillable = ['nom', 'description', 'climat', 'caracteristiques'];

    public function users(){
        return $this->belongsToMany('App\User');
        }
}
