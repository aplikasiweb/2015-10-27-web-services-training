<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //protected $table = 'custom_table'; // default is cats
    //protected $primaryKey = 'custom_id_column'; // default is id
    //public $incrementing = true; // set to false if $primaryKey not auto_increment
    //public $timestamps = true; // set to false to disable eloquent timestamps
    //const CREATED_AT = 'custom_created_at_column'; // OR null, default is created_at
    //const UPDATED_AT = 'custom_updated_at_column'; // OR null, default is updated_at
    protected $fillable = ['name', 'age' ];
}
