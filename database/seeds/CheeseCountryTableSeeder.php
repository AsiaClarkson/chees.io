<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class CheeseCountryTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/cheese_countries.csv';
        $this->tablename = 'cheese_countries';
        $this->delimiter = ',';
    }
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
	    DB::disableQueryLog();
	    parent::run();
    }
}
