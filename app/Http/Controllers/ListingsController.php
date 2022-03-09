<?php

namespace App\Http\Controllers;

use App\Http\Collections\ListingsCollection;
use App\Http\Requests\CreateListingFormRequest;
use App\Http\Resources\ListingResource;
use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use App\Models\Type;
use App\Queries\ListingIndexQuery;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\DB;


class ListingsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['mutateSorting'])->only('index');
    }

    public function index(ListingIndexQuery $query): ListingsCollection
    {
        // $perPage = 15
        return new ListingsCollection($query->paginate($query->count()));
    }


    // public function index2()
    // {
    //     $listings = DB::table('listings')->select('title',  'type')->limit(10)->get();
    //     return $listings;
    // }

    public function show(Listing $listing): ListingResource
    {
        $listing->loadMissing('type');

        return new ListingResource($listing);
    }


    public function add(ListingRequest $request): ListingResource
    {

        $asset = Listing::create($request->all());

        return new ListingResource($asset);
    }
}