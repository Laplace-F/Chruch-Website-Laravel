<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Prayer extends Model
{

    use HasFactory;
    protected $table = 'prayer';
    public $timestamps = false;
    protected $primaryKey = 'idpray';

    protected $fillable =[
        'name',
        'phonenumber',
        'hopepray',
        'answerpray',
    ];
}