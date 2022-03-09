<?php

namespace App\Http\Filters;

use App\Models\Type;
use Illuminate\Contracts\Support\Arrayable;
use Spatie\QueryBuilder\AllowedFilter;

class ListingAmenitiesFilter implements Arrayable
{
    protected static string $name = 'amenities';

    protected static string $label = 'Amenities';

    public static function make(): AllowedFilter
    {
        return AllowedFilter::callback(self::$name, function ($query, $amenitiesCsv) {
            $amenities = is_array($amenitiesCsv) ? $amenitiesCsv : explode(',', $amenitiesCsv);
            $query->whereJsonContains('amenities', $amenities);
        });
    }

    /**
     * @throws \Exception
     */
    public function toArray(): array
    {
        return [
            'name' => self::$name,
            'label' => __(self::$label),
            'options' => self::options(),
            'searchable' => false,
            'placeholder' => '',
            'hint' => '',
        ];
    }

    /**
     * @throws \Exception
     */
    public static function options(): array
    {
        return Type::query()->get(['id', 'name'])->map(function ($type) {
            return [
                    'name' => $type->name,
                    'value' => $type->id,
                ];
        })->values()->toArray();
    }
}
