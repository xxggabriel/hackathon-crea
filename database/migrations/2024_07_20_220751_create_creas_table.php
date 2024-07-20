<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreasTable extends Migration
{
    public function up()
    {
        Schema::create('creas', function (Blueprint $table) {
            $table->id();
            $table->string('creCadCod', 2);
            $table->string('description', 100); // Adicionando uma coluna de descrição para os códigos CREA
            $table->timestamps();
        });

        // Populando a tabela com os valores de domínio fornecidos
        \DB::table('creas')->insert([
            ['creCadCod' => '01', 'description' => 'CREA-AC'],
            ['creCadCod' => '02', 'description' => 'CREA-AL'],
            ['creCadCod' => '03', 'description' => 'CREA-AP'],
            ['creCadCod' => '04', 'description' => 'CREA-AM'],
            ['creCadCod' => '05', 'description' => 'CREA-BA'],
            ['creCadCod' => '06', 'description' => 'CREA-CE'],
            ['creCadCod' => '07', 'description' => 'CREA-DF'],
            ['creCadCod' => '08', 'description' => 'CREA-ES'],
            ['creCadCod' => '09', 'description' => 'CREA-RR'],
            ['creCadCod' => '10', 'description' => 'CREA-GO'],
            ['creCadCod' => '11', 'description' => 'CREA-MA'],
            ['creCadCod' => '12', 'description' => 'CREA-MT'],
            ['creCadCod' => '13', 'description' => 'CREA-MS'],
            ['creCadCod' => '14', 'description' => 'CREA-MG'],
            ['creCadCod' => '15', 'description' => 'CREA-PA'],
            ['creCadCod' => '16', 'description' => 'CREA-PB'],
            ['creCadCod' => '17', 'description' => 'CREA-PR'],
            ['creCadCod' => '18', 'description' => 'CREA-PE'],
            ['creCadCod' => '19', 'description' => 'CREA-PI'],
            ['creCadCod' => '20', 'description' => 'CREA-RJ'],
            ['creCadCod' => '21', 'description' => 'CREA-RN'],
            ['creCadCod' => '22', 'description' => 'CREA-RS'],
            ['creCadCod' => '23', 'description' => 'CREA-RO'],
            ['creCadCod' => '24', 'description' => 'CREA-TO'],
            ['creCadCod' => '25', 'description' => 'CREA-SC'],
            ['creCadCod' => '26', 'description' => 'CREA-SP'],
            ['creCadCod' => '27', 'description' => 'CREA-SE'],
        ]);

    }

    public function down()
    {
        Schema::dropIfExists('creas');
    }
}
