<?php

use Illuminate\Database\Seeder;
use App\countries;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $DataCountries = ['Country 1','Country 2'];
        foreach ($DataCountries as $key => $value) {
            $Countries = new countries();
            $Countries->name = $value;
            $Countries->save();
        }
        
    }
}
