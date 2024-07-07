<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndiaLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample Indian country data
        $country = [
            'name' => 'India',
            'code' => 'IN',
        ];

        DB::table('countries')->insert($country);

        // Sample Indian states and cities (replace with comprehensive data)
        $states = [
            [
                'name' => 'Maharashtra',
                'code' => 'MH',
                'country_id' => 1,
            ],
            [
                'name' => 'Karnataka',
                'code' => 'KA',
                'country_id' => 1,
            ],
            [
                'name' => 'Tamil Nadu',
                'code' => 'TN',
                'country_id' => 1,
            ],
        ];

        DB::table('states')->insert($states);

        $cities = [
            [
                'name' => 'Mumbai',
                'state_id' => 1,
            ],
            [
                'name' => 'Bengaluru',
                'state_id' => 2,
            ],
            [
                'name' => 'Chennai',
                'state_id' => 3,
            ],
        ];

        DB::table('cities')->insert($cities);
    }
}
