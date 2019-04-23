<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use JeroenZwart\CsvSeeder\CsvSeeder;

class CheeseColorTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/cheese_colors.csv';
        $this->tablename = 'cheese_colors';
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
