<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{

    protected $table        =    'tbl_visitors';


    protected $fillable     =    ['ip_address',  'date_visitor'];

    protected $primaryKey   =    'id_visitors';



    public $timestamps      =    false;      //set time to false
}