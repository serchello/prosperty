<?php

namespace App\Http\Requests;

use App\Models\Listing;
use App\Models\Type;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ListingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "amenities"     => [ 'required' , 'array' ],
            'available_from'=> [ 'required' , 'date' , 'date_format:Y-m-d' , 'after:2022-02-18' ],
            'bathrooms'     => [ 'required' , 'integer' ],
            'bedrooms'      => [ 'required' , 'integer' ],
            'description'   => [ 'required' , 'string'  ],
            'floor'         => [ 'nullable' , 'integer' ],
            'latitude'      => [ 'nullable' , 'string'  ],
            'longitude'     => [ 'nullable' , 'string'  ],
            'postal_code'   => [ 'required' , 'regex:/^[a-zA-Z0-9]+/i' ],
            'price'         => [ 'required' ],
            'size'          => [ 'required' ],
            'street'        => [ 'required' ],
            'street_number' => [ 'required' , 'regex:/^[0-9]+/i' ],
            'title'         => [ 'nullable' , 'string'  ],
          //'type_id'       => [ 'required' , 'integer', 'exists:App\Models\Listing,uuid' ]
            'type_id'       => [ 'required' , 'integer','exists:App\Models\Type,id' ]


//                Example
// {
//     "amenities":["Elevator","Balcony", "Air Conditioning", "Hair Dryer"],
//     "bathrooms": 3,
//     "bedrooms": 2,
//     "description": "65446",
//     "floor": 0,
//     "latitude": "25.441109",
//     "longitude": "-15.729299",
//     "postal_code": "151 7df1",
//     "price": "2936250.0000",
//     "size": 783,
//     "street": "Ruthie Road",
//     "street_number": "154a",
//     "title": "Detached House 783sq.m",
//     "available_from": "2022-05-20",
//     "type_id":2
// }

        ];
    }
}