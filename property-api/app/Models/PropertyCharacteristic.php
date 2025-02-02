<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyCharacteristic extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'price',
        'bedrooms',
        'bathrooms',
        'sqft',
        'price_sqft',
        'date_available',
        'laundry',
        'cooling',
        'heating',
        'parking_area',
        'property_type',
        'status',
    ];
}
