<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsPaymentTable extends Migration
{
    public function up()
    {
        Schema::create('bills_payment', function (Blueprint $table) {

		$table->string('BillPaymentId',20);
		$table->string('Description',100);
		$table->string('ReceiptNo',50);
		$table->string('TaxPayerId',20);
		$table->string('PaymentType',30);
		$table->string('PaymentMonth',30);
		$table->string('ItemId',20);
		$table->string('UserId',20);
		$table->string('ZoneId',20);
		$table->string('MunicipalId',20);
		$table->string('Refunded',20);
		$table->string('RefundedDate',20);
		$table->text('RefundReason');
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
		$table->primary('BillPaymentId');
		$table->foreign('TaxPayerId')->references('TaxPayerId')->on('tax_payer');		$table->foreign('UserId')->references('UserId')->on('user_accounts');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bills_payment');
    }
}