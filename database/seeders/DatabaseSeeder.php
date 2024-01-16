<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Zone::create( [
            'ZoneId'=>'Z00101',
            'ZoneName'=>'ZONE 1',
            'MunicipalId'=>'BLI001'
            ] );
            
            
                        
            Zone::create( [
            'ZoneId'=>'Z00102',
            'ZoneName'=>'ZONE 2',
            'MunicipalId'=>'BLI001'
            ] );
            
            
                        
            Zone::create( [
            'ZoneId'=>'Z00103',
            'ZoneName'=>'ZONE 3',
            'MunicipalId'=>'BLI001'
            ] );
            
            
                        
            Zone::create( [
            'ZoneId'=>'Z00104',
            'ZoneName'=>'ZONE 4',
            'MunicipalId'=>'BLI001'
            ] );
    }
}
