<?php

namespace App\Queries;

use App\Http\ListingFilters;
use App\Models\Listing;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ListingIndexQuery extends QueryBuilder
{
    public function __construct(Request $request)
    {
        $query = Listing::query();

        parent::__construct($query, $request);

        $this ->defaultSort('created_at')
              ->allowedSorts('bathrooms', 'bedrooms', 'floor', 'price', 'size', 'available_from', 'created_at')
              ->allowedFilters(ListingFilters::make())
              ->with('type');
    }
}
