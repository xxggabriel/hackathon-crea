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
            $table->string('cre_cad_cod', 2);
            $table->string('description', 100); // Adicionando uma coluna de descrição para os códigos CREA
            $table->timestamps();
        });

        // Populando a tabela com os valores de domínio fornecidos
        \DB::table('creas')->insert([
            ['cre_cad_cod' => '01', 'description' => 'CREA-AC'],
            ['cre_cad_cod' => '02', 'description' => 'CREA-AL'],
            ['cre_cad_cod' => '03', 'description' => 'CREA-AP'],
            ['cre_cad_cod' => '04', 'description' => 'CREA-AM'],
            ['cre_cad_cod' => '05', 'description' => 'CREA-BA'],
            ['cre_cad_cod' => '06', 'description' => 'CREA-CE'],
            ['cre_cad_cod' => '07', 'description' => 'CREA-DF'],
            ['cre_cad_cod' => '08', 'description' => 'CREA-ES'],
            ['cre_cad_cod' => '09', 'description' => 'CREA-RR'],
            ['cre_cad_cod' => '10', 'description' => 'CREA-GO'],
            ['cre_cad_cod' => '11', 'description' => 'CREA-MA'],
            ['cre_cad_cod' => '12', 'description' => 'CREA-MT'],
            ['cre_cad_cod' => '13', 'description' => 'CREA-MS'],
            ['cre_cad_cod' => '14', 'description' => 'CREA-MG'],
            ['cre_cad_cod' => '15', 'description' => 'CREA-PA'],
            ['cre_cad_cod' => '16', 'description' => 'CREA-PB'],
            ['cre_cad_cod' => '17', 'description' => 'CREA-PR'],
            ['cre_cad_cod' => '18', 'description' => 'CREA-PE'],
            ['cre_cad_cod' => '19', 'description' => 'CREA-PI'],
            ['cre_cad_cod' => '20', 'description' => 'CREA-RJ'],
            ['cre_cad_cod' => '21', 'description' => 'CREA-RN'],
            ['cre_cad_cod' => '22', 'description' => 'CREA-RS'],
            ['cre_cad_cod' => '23', 'description' => 'CREA-RO'],
            ['cre_cad_cod' => '24', 'description' => 'CREA-TO'],
            ['cre_cad_cod' => '25', 'description' => 'CREA-SC'],
            ['cre_cad_cod' => '26', 'description' => 'CREA-SP'],
            ['cre_cad_cod' => '27', 'description' => 'CREA-SE'],
        ]);

    }

    public function down()
    {
        Schema::dropIfExists('creas');
    }
}
