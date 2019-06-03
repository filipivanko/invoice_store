<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertifikatFileSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifikat_file_sets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('certificate_title');
            $table->string('certificate_text');
            $table->string('private_key');
            $table->string('chain_of_trust_certificate');
            $table->string('csr');
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
        Schema::dropIfExists('certifikat_file_sets');
    }
}
