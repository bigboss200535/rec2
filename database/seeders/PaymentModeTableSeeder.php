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
        Paymentmode::create( [
            'ModeId'=>'01',
            'PaymentMode'=>'MOBILE MONEY',
            'Status'=>'INACTIVE'
            ] );
            
            
                        
            Paymentmode::create( [
            'ModeId'=>'02',
            'PaymentMode'=>'CASH',
            'Status'=>'ACTIVE'
            ] );
            
            
                        
            Paymentmode::create( [
            'ModeId'=>'03',
            'PaymentMode'=>'VISA',
            'Status'=>'INACTIVE'
            ] );
            
            
                        
            Paymentmode::create( [
            'ModeId'=>'04',
            'PaymentMode'=>'MASTER CARD',
            'Status'=>'INACTIVE'
            ] );
            
            
                        
            Paymentmode::create( [
            'ModeId'=>'05',
            'PaymentMode'=>'CHEQUE',
            'Status'=>'INACTIVE'
            ] );
            
    }
}
