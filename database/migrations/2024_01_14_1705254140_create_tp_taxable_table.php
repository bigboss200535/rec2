<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpTaxableTable extends Migration
{
    public function up()
    {
        Schema::create('tp_taxable', function (Blueprint $table) {

		$table->increments(TPTaxableId);
		$table->string('TaxPayerId',20);
		$table->string('TaxableId',20);
		$table->string('Length',20);
		$table->string('Width',20);
		$table->string('Area',20);
		$table->string('OccupancyContract',20)->default('NO');
		$table->string('Reference',200);
		$table->string('PaymentFrequency',50);
		$table->string('Amount',50);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('UserId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->string('AddedId',20);
		$table->datetime('UpdatedDate');
		$table->string('UpdatedBy',60);
		$table->string('UpdatedNotes',100);
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archive',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->primary('TPTaxableId');
		$table->foreign('TaxPayerId')->references('TaxPayerId')->on('tax_payer');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('UserId')->references('UserId')->on('user_accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tp_taxable');
    }
}