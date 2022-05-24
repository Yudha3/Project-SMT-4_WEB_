<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionOutDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_out_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transactions_out_id');
            $table->string('id_transaksi');
            $table->integer('product_id');
            $table->string('kd_brg');
            $table->string('nm_brg');
            $table->integer('hrg_jual');
            $table->integer('quantity');
            $table->integer('sub_ttl');
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
        Schema::dropIfExists('transaction_out_details');
    }
}
