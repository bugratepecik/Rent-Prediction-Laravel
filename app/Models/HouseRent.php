<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseRent extends Model
{    use HasFactory;

    protected $fillable = [
        'posted_on',
        'bhk',
        'rent',
        'size',
        'floor',
        'area_type',
        'area_locality',
        'city',
        'furnishing_status',
        'tenant_preferred',
        'bathroom',
        'point_of_contact',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'posted_on' => 'date',
    ];
}

