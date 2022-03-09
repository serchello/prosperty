<?php

namespace Database\Seeders;

use App\Models\Amenity;
use App\Models\Listing;
use App\Models\Type;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ListingsDemoSeeder extends Seeder
{
    protected int $counter = 0;

    protected Generator $faker;

    protected int $numberOfProperties = 500;

    public function run()
    {
        $this->faker = Faker::create();
        for ($i = 1; $i <= $this->numberOfProperties; $i++) {
            DB::beginTransaction();

            try {
                $type = Type::query()->inRandomOrder()->first();
                $size = random_int(100, 1000);
                $price = $size * 3750;
                $property = new Listing();
                $property->amenities = Arr::random(Amenity::$all, 5);
                $property->available_from = Carbon::now()->addDays(random_int(15, 90));
                $property->bathrooms = random_int(1, 4);
                $property->bedrooms = random_int(1, 5);
                $property->description = $this->faker->sentence;
                $property->floor = $type->slug === 'apartment' ? random_int(1, 15) : 0;
                $property->latitude = $this->faker->latitude;
                $property->longitude = $this->faker->longitude;
                $property->postal_code = trim(chunk_split(random_int(11634, 66666), 3, ' '));
                $property->price = $price;
                $property->size = $size;
                $property->street = $this->faker->streetName;
                $property->street_number = random_int(1, 234);
                $property->title = "{$type->name} {$size}sq.m";
                $property->type_id = $type->id;
                $property->save();
                DB::commit();
                $this->counter++;
            } catch (\Throwable $exception) {
                DB::rollBack();
                $this->command->error($exception->getMessage());
            }
        }

        $this->command->info('Imported '.$this->counter.' properties');
    }
}
