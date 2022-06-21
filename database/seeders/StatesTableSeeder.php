<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'Sabah', 'Sarawak', 'Negeri Sembilan', 'Kedah', 'Pahang', 'Selangor', 'Terengganu', 'Perak', 'Melaka', 'Kelantan', 'Johor', 'Perlis','Sarawak','Penang',
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
