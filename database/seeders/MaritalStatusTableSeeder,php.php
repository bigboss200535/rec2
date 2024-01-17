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
        Maritalstatu::create( [
            'StatusId'=>'001',
            'MaritalStatus'=>'MARRIED'
            ] );
                    
            Maritalstatu::create( [
            'StatusId'=>'002',
            'MaritalStatus'=>'WIDOWED'
            ] );
                    
            Maritalstatu::create( [
            'StatusId'=>'003',
            'MaritalStatus'=>'SINGLE'
            ] );
                        
            Maritalstatu::create( [
            'StatusId'=>'004',
            'MaritalStatus'=>'ENGAGED'
            ] );
                        
            Maritalstatu::create( [
            'StatusId'=>'005',
            'MaritalStatus'=>'DIVORCED'
            ] );
    }
}
