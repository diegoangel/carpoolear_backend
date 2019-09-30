<?php

namespace STS\Entities;

use Illuminate\Database\Eloquent\Model;

class NodesGeo extends Model
{
    protected $table = 'nodes_geo';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'lat',
        'lng',
        'type'
    ];

    protected $hidden = [];

}
