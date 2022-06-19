<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsOutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_out', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
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
        Schema::dropIfExists('transactions_out');
    }
}
