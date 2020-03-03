<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('broj_fakture');
            $table->string('broj_otpremnice');
            $table->string('narudzba_br');
            $table->date('dospjece');
            $table->date('datum_izdavanja');
            $table->double('ukupni_iznos_s_pdv_om');
            $table->double('ukupni_iznos_bez_pdv_a');
            $table->integer('customer_id');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
