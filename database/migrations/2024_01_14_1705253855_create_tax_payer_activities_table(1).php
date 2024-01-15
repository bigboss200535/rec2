<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxPayerActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('tax_payer_activities', function (Blueprint $table) {

		$table->increments(TaxPActivityId);
		$table->string('TaxPayerId',20);
		$table->string('ActivityCategoryId',100);
		$table->string('ActivityId',100);
		$table->string('OtherActivity',100);
		$table->string('OpenAuthorisation',50);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('UserId',20);
		$table->string('TIN',50);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->string('AddedId',20);
		$table->datetime('UpdatedDate');
		$table->string('UpdatedBy',60);
		$table->string('UpdatedNotes',100);
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archive',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->primary('TaxPActivityId');
		$table->foreign('TaxPayerId')->references('TaxPayerId')->on('tax_payer');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('UserId')->references('UserId')->on('user_accounts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tax_payer_activities');
    }
}