<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i<=100; $i++){

            $mul = 1000000;
            $miles= mt_rand(1 * $mul, 80000 * $mul) / $mul;


            DB::table('flights')->insert([
                'flight_number'=>Str::random(7),
                'destination_airport'=>$this->airports(),
                'destination_time'=>date('Y-m-d h:i:s', rand(1715684348, 1725784348)), //2024-05-14 12:25:53
                'fly_miles'=>$miles,
                'arrived'=>rand(0,1)
            ]);
        }
    }

    private function airports(){
        
        $airportsList = array('BER', 'MUC', 'LAX', 'JFK', 'HN');
        
        //$array = array_rand($airportsList, 4);
        $int = array_rand($airportsList);
        
        $airport = $airportsList[$int];

        return $airport;
    }
}
