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
        Religion::create( [
            'ReligionId'=>'001',
            'Religions'=>'ISLAM'
            ] );
            
            
                        
            Religion::create( [
            'ReligionId'=>'002',
            'Religions'=>'CHRISTIANITY'
            ] );
            
            
                        
            Religion::create( [
            'ReligionId'=>'003',
            'Religions'=>'TRADITIONALIST'
            ] );
            
            
                        
            Religion::create( [
            'ReligionId'=>'004',
            'Religions'=>'ATHEIST'
            ] );
            
    }
}
