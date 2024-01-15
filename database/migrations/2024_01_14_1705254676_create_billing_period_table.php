<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingPeriodTable extends Migration
{
    public function up()
    {
        Schema::create('billing_period', function (Blueprint $table) {

		$table->string('BillId',20);
		$table->string('BillPeriod',100);
		$table->string('IsActive',10)->default('YES');
		$table->string('ZoneId',20);
		$table->string('MunicipalId',20);
		$table->string('AddedId',20);
		$table->string('BillValue',10);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->text('Comment');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('BillId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('billing_period');
    }
}