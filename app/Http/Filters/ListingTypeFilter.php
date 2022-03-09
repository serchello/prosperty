<?php

namespace App\Http\Filters;

use App\Models\Type;
use Illuminate\Contracts\Support\Arrayable;
use Spatie\QueryBuilder\AllowedFilter;

class ListingTypeFilter implements Arrayable
{
    protected static string $name = 'type_id';

    protected static string $label = 'Type';

    public static function make(): AllowedFilter
    {
        return AllowedFilter::exact(self::$name);
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
