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
            'TaxableId'=>`TaxableId`,
            'TaxableItem'=>`TaxableItem`,
            'ZoneId'=>`ZoneId`,
            'MunicipalId'=>`MunicipalId`,
            'IsActive'=>`IsActive`,
            'AddedId'=>`AddedId`,
            'AddedDate'=>`AddedDate`,
            'UpdatedDate'=>`UpdatedDate`,
            'UpdatedId'=>`UpdatedId`,
            'UpdatedNotes'=>`UpdatedNotes`,
            'Status'=>`Status`,
            'Archived'=>`Archived`,
            'ArchiveId'=>`ArchiveId`,
            'ArchiveDate'=>`ArchiveDate`,
            'ArchiveTime'=>`ArchiveTime`
            ] );
                        
            Taxablematerial::create( [
            'TaxableId'=>END
            ] );
                        
            Taxablematerial::create( [
            'TaxableId'=>/
            ] );
                        
            Taxablematerial::create( [
            'TaxableId'=>/
            ] );
                        
            Taxablematerial::create( [
            'TaxableId'=>DELIMITER
            ] );
    }
}
