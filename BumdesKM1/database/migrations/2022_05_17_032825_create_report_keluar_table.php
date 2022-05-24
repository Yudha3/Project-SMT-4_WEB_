<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_keluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transactions_out_id');
            $table->integer('user_id');
            $table->string('id_transaksi');
            $table->date('tgl_keluar');
            $table->string('penerima');
            $table->string('alamat');
            $table->integer('no_tlp');
            $table->integer('ttl_hrg');
            $table->string('pengiriman');
            $table->string('resi');
            $table->integer('transactions_status'); // pending, success, cancel, failed
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_keluar');
    }
}
