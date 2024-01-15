<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {

		$table->string('InvoiceId',20);
		$table->string('TaxPayerId',20);
		$table->string('InvoiceMonth',30);
		$table->string('SystemGenerate',20)->default('SYSGEN');
		$table->string('UserId',20);
		$table->string('ZoneId',20);
		$table->string('TeamId',20);
		$table->string('CollectorId',20);
		$table->string('MunicipalId',20);
		$table->decimal('AmountDue',10,2);
		$table->decimal('Penalty',10,2);
		$table->decimal('QtyPayable',10,2);
		$table->decimal('AmountPayable',10,2);
		$table->decimal('Balance',10,2);
		$table->datetime('DateIssued');
		$table->string('Description',100);
		$table->string('ReceiptNo',50);
		$table->string('IsIssued',20)->default('0');
		$table->string('IssuedBy',20);
		$table->string('AddedId',20);
		$table->string('TaxOfficerApproval',20)->default('0');
		$table->string('TaxOfficerId',20);
		$table->string('TaxManagerApproval',20)->default('0');
		$table->string('TaxManagerId',20);
		$table->string('TaxCollectorApproval',20)->default('0');
		$table->string('TaxCollectorId',20);
		$table->datetime('AddedDate')->default('current_timestamp');
		$table->datetime('UpdatedDate');
		$table->string('UpdatedId',60);
		$table->text('UpdatedNotes');
		$table->string('Status',10)->default('ACTIVE');
		$table->string('Archived',10)->default('NO');
		$table->string('ArchiveId',10);
		$table->datetime('ArchiveDate');
		$table->datetime('ArchiveTime');
		$table->primary('InvoiceId');
		$table->foreign('MunicipalId')->references('MunicipalId')->on('municipal');		$table->foreign('ZoneId')->references('ZoneId')->on('zones');		$table->foreign('TaxPayerId')->references('TaxPayerId')->on('tax_payer');		$table->foreign('UserId')->references('UserId')->on('user_accounts');		$table->foreign('TeamId')->references('TeamId')->on('team');
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}