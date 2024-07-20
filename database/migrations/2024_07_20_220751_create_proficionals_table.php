<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfissionaisTable extends Migration
{
    public function up()
    {
        Schema::create('profissionais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('creCadCodId', 2);
            $table->bigInteger('creCadCodRegIdId', 2);
            $table->string('dscNac', 12);
            $table->string('dscNat', 24);
            $table->timestamp('dtaExpIdt');
            $table->timestamp('dtaGerRnp');
            $table->timestamp('dtaNsc');
            $table->string('estCiv', 1);
            $table->string('nme', 60);
            $table->string('nroIdt', 15);
            $table->string('orgExpIdt', 15);
            $table->string('pisNac', 20);
            $table->string('sisIdtPrfNroCpf', 11);
            $table->string('sisUsuLgn', 25);
            $table->string('tpoEndCor', 1);
            $table->string('tpoFrh', 2);
            $table->string('tpoNecEsp', 3);
            $table->string('tpoNroImpCrt', 1);
            $table->string('tpoReg', 2);
            $table->integer('tpoRnp');
            $table->string('tpoSex', 1);
            $table->string('tpoSng', 2);
            $table->string('cpfAst', 11)->nullable();
            $table->bigInteger('creCadCodRecId', 2)->nullable();
            $table->string('dscMunTitEle', 30)->nullable();
            $table->timestamp('dtaIniReg')->nullable();
            $table->timestamp('dtaIniVclAst')->nullable();
            $table->timestamp('dtaRegCre')->nullable();
            $table->timestamp('dtaValRnp');
            $table->string('eml', 50);
            $table->boolean('flgDoador')->nullable();
            $table->boolean('flgNmeSocial')->nullable();
            $table->string('hpg', 50)->nullable();
            $table->string('nmeAst', 60)->nullable();
            $table->string('nmeMae', 53)->nullable();
            $table->string('nmePai', 53)->nullable();
            $table->string('nmeSocial', 60);
            $table->string('nroCrtCre', 15)->nullable();
            $table->string('nroPisPasep', 20);
            $table->string('nroRegCre', 15)->nullable();
            $table->string('nroTitEle', 12)->nullable();
            $table->string('prfCadCodRnpAst', 10);
            $table->string('secTitEle', 4)->nullable();
            $table->string('ufNat', 2)->nullable();
            $table->string('ufTitEle', 2)->nullable();
            $table->string('zonTitEle', 4)->nullable();
            $table->timestamps();

            $table->foreign('creCadCodId')->references('creCadCod')->on('creas');
            $table->foreign('creCadCodRegId')->references('creCadCod')->on('creas');
            $table->foreign('creCadCodRecId')->references('creCadCod')->on('creas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profissionais');
    }
}
