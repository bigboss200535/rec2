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
        Taxablematerial::create( [
            'TaxableId'=>'x000t1',
            'TaxableItem'=>'OCCUPATION DU DOMAINE PUBLIC'
            ] );
            
            
                        
            Taxablematerial::create( [
            'TaxableId'=>'x000t2',
            'TaxableItem'=>'SUPPORT PUBLICITAIRE'
            ] );
            
            
                        
            Taxablematerial::create( [
            'TaxableId'=>'x000t3',
            'TaxableItem'=>'DISTRIBUTION DE CARBURANT'
            ] );
            
            
                        
            Taxablematerial::create( [
            'TaxableId'=>'x000t4',
            'TaxableItem'=>'LOCATION DE TERRAINS COMMUNICAUX'
            ] );
            
            
                        
            Taxablematerial::create( [
            'TaxableId'=>'x000t5',
            'TaxableItem'=>'LOCATION D\'IMMEUBLE/MAGASIN/MAGASIN DANS LA MUNICIPALITÉ'
            ] );
            
    }
}
