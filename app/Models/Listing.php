<?php

namespace App\Models;

use Dyrynda\Database\Support\BindsOnUuid;
use Dyrynda\Database\Support\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Listing extends Model
{
    use HasFactory;
    use BindsOnUuid;
    use GeneratesUuid;

    protected $guarded = [];

    protected $casts = [
        'amenities' => 'array',
    ];

    protected $dates = [
        'available_from',
    ];

     protected $fillable = [
        'amenities',
        'bathrooms',
        'bedrooms',
        'description',
        'floor',
        'latitude',
        'longitude',
        'postal_code',
        'price',
        'size',
        'street',
        'street_number',
        'title',
        'available_from',
        'type_id'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}