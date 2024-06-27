<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';


    protected $guarded = ['id'];


    //Upload Path

    const UPLOADPATH = 'images/';


    // fields that will handle upload document

    const UPLOADFIELDS = [];

    ##..........................RELATIONSHIPS

    ##..........................ATTRIBUTES

    ##..........................CUSTOM FUNCTIONS


}
