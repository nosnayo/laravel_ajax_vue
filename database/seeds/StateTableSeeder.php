<?php

use Illuminate\Database\Seeder;
use App\states;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();
        $state1 = [
            'State 1 - Country 1',
            'State 2 - Country 1',
            'State 3 - Country 1',
            'State 4 - Country 1',
            'State 5 - Country 1',
        ];
        $state2 = [
            'State 1 - Country 2',
            'State 2 - Country 2',
            'State 3 - Country 2',
            'State 4 - Country 2',
            'State 5 - Country 2',
        ];
        foreach ($state1 as $key => $value) {
            $State = new states();
            $State->name = $value;
            $State->country_id = 1;
            $State->save();
        }
        foreach ($state2 as $key => $value) {
            $State = new states();
            $State->name = $value;
            $State->country_id = 2;
            $State->save();
        }
        
        
    }
}
