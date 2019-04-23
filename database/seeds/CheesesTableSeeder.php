<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class CheesesTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/cheeses.csv';
        $this->tablename = 'cheeses';
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