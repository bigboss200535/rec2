<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentModeTable extends Migration
{
    public function up()
    {
        Schema::create('payment_mode', function (Blueprint $table) {

		$table->string('ModeId',20);
		$table->string('PaymentMode',100);
		$table->string('Transactions',20);
		$table->string('UserId',20);
		$table->string('MunicipalId',20);
		$table->string('ZoneId',20);
		$table->string('AddedId',20);
		$table->datetime('AddedDate')->useCurrent();
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('ModeId');
		$table->foreign('UserId')->references('UserId')->on('user_accounts');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_mode');
    }
}