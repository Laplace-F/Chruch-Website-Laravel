<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shermon extends Model
{
    use HasFactory;

    protected $table = 'shermon';

    public $timestamps = false;

    protected $primaryKey = 'idshermon';

    protected $fillable = [
        'namashermon',
        'deskripsishermon',
        'tanggalshermon',
        'foto',
        'link',
    ];
}
