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
        Gender::create( [
            'GenderId'=>'c000P1X',
            'GenderName'=>'HOMME',
            'AddedId'=>'DEVELOPER',
            'Differential'=>'0'
            ] );
            
            
                        
            Gender::create( [
            'GenderId'=>'c000P2X',
            'GenderName'=>'FEMME',
            'AddedId'=>'DEVELOPER',
            'Differential'=>'0'
            ] );
            
            
                        
            Gender::create( [
            'GenderId'=>'c000P3X',
            'GenderName'=>'ALL',
            'AddedId'=>'DEVELOPER',
            'Differential'=>'1'
            ] );
    }
}
