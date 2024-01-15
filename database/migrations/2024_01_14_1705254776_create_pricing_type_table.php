<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingTypeTable extends Migration
{
    public function up()
    {
        Schema::create('pricing_type', function (Blueprint $table) {

		$table->string('PricingTypeId',20);
		$table->string('PricingItem',150);
		$table->string('ActivityCategoryId',20);
		$table->string('ServiceDescription',100);
		$table->string('Formular',100);
		$table->string('UserId',20);
		$table->string('ZoneId',20);
		$table->string('MunicipalId',20);
		$table->string('IsActive',10)->default('YES');
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
		$table->primary('PricingTypeId');
		$table->foreign('UserId')->references('UserId')->on('user_accounts');		$table->foreign('ActivityCategoryId')->references('ActivityCategoryId')->on('activity_category');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pricing_type');
    }
}