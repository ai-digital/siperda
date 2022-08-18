<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSusutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('susuts', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->unsignedBigInteger('vendor_id');
             $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->string('no_sto',25)->nullable();
            $table->date('tgl_sto');
            $table->date('tgl_jt')->nullable();
            $table->string('tonase_susut',10);
            $table->integer('harga_pupuk');
            $table->double('nilai_klaim');
            $table->double('total_klaim');
            $table->double('total_bayar');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
      


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
        Schema::dropIfExists('susuts');
    }
}
