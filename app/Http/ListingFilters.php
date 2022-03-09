<?php

namespace App\Http;

use App\Http\Filters\ListingAmenitiesFilter;
use App\Http\Filters\ListingTypeFilter;
use Illuminate\Support\Arr;

class ListingFilters
{
    public static array $filters = [
        ListingAmenitiesFilter::class,
        ListingTypeFilter::class,
    ];

    protected array $exclude = [];

    public static function make(): array
    {
        return collect(static::$filters)
            ->map(fn ($filter) => $filter::make())
            ->toArray();
    }

    public function get(): array
    {
        return collect(static::$filters)->reject(fn ($filter) => in_array(
            $filter,
            $this->exclude
        ))->map(fn ($filter) => (new $filter())->toArray())->values()->all();
    }

    public function without($filter): static
    {
        if (is_string($filter)) {
            $filter = Arr::wrap($filter);
        }

        $this->exclude = array_merge($this->exclude, $filter);

        return $this;
    }
}
