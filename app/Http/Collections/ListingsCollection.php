<?php

namespace App\Http\Collections;

use App\Http\ListingFilters;
use App\Http\Resources\ListingResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Arr;

class ListingsCollection extends ResourceCollection
{
    public $collects = ListingResource::class;

    protected array $filtersToExclude = [];

    protected bool $includeFilters = true;

    public function with($request)
    {
        if ($this->includeFilters) {
            return [
                'meta' => [
                    'filters' => (new ListingFilters())
                        ->without($this->filtersToExclude)
                        ->get(),
                ],
            ];
        }

        return [];
    }

    public function withoutFilter($filters)
    {
        if (is_string($filters)) {
            $filters = Arr::wrap($filters);
        }
        $this->filtersToExclude = array_merge($this->filtersToExclude, $filters);

        return $this;
    }

    /**
     * @return $this
     */
    public function withoutFilters()
    {
        $this->includeFilters = false;

        return $this;
    }
}
