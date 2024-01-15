<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiConfigurationsTable extends Migration
{
    public function up()
    {
        Schema::create('api_configurations', function (Blueprint $table) {

		$table->string('ApiId',20);
		$table->string('ApiDescription',150);
		$table->string('ApiKey',100);
		$table->string('ApiUrl',200);
		$table->string('Api',100);
		$table->string('Email',100);
		$table->string('UserId',20);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
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
		$table->primary('ApiId');
		$table->foreign('UserId')->references('UserId')->on('user_accounts');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('api_configurations');
    }
}