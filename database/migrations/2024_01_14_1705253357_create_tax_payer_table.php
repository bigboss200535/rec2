<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxPayerTable extends Migration
{
    public function up()
    {
        Schema::create('tax_payer', function (Blueprint $table) {

		$table->string('TaxPayerId',20);
		$table->string('Firstname',100);
		$table->string('Othername',100);
		$table->string('GenderId',20);
		$table->string('NationalIdNumber',50);
		$table->string('VoterNumber',50);
		$table->string('Telephone1',50);
		$table->string('Telephone2',50);
		$table->string('Telephone3',50);
		$table->string('Geolocation',50);
		$table->decimal('Latitude',10,10);
		$table->decimal('Longitude',10,10);
		$table->string('Altitute',20);
		$table->string('GeoPrecision',20);
		$table->string('CollectorId',20);
		$table->text('GeoComment');
		$table->string('Language',20);
		$table->string('Email',500);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('UserId',20);
		$table->string('FileNumber',20);
		$table->text('Address');
		$table->string('City',100);
		$table->string('Village',100);
		$table->string('Neighborhood',100);
		$table->string('AddedId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('TaxPayerId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tax_payer');
    }
}