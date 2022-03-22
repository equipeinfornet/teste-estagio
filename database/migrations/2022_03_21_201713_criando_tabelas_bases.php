<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriandoTabelasBases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiario', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable(false);
            $table->string('documento', 14)->nullable(false);
            $table->date('dataNascimento')->nullable(false);
            $table->enum('sexo', ['F', 'M', 'O'])->comment('F => Feminino, M => Masculino, O => Outro')->nullable(false);
            $table->enum('situacao', ['A', 'I'])->comment('A => Ativo, I => Inativo')->default("A")->nullable(false);
            $table->string('logradouro');
            $table->string('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado', 2);
            $table->string('email')->unique();
            $table->string('telefone');
        });

        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idBeneficiario');
            $table->string('placa', 7)->nullable(false);
            $table->string('chassi', 17)->nullable(false);
            $table->string('renavam', 11)->nullable(false);
            $table->string('modelo')->nullable(false);
            $table->string('montadora')->nullable(false);
            $table->date('anoFabricacao')->nullable(false);
            $table->date('anoModelo')->nullable(false);
            $table->enum('situacao', ['A', 'I'])->comment('A => Ativo, I => Inativo')->default("A")->nullable(false);

            $table->foreign('idBeneficiario')->references('id')->on('beneficiario');
        });

        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255)->nullable(false);
            $table->enum('situacao', ['A', 'I'])->comment('A => Ativo, I => Inativo')->default("A")->nullable(false);
        });

        Schema::create('produtoVeiculo', function (Blueprint $table) {
            $table->unsignedBigInteger('idProduto');
            $table->unsignedBigInteger('idVeiculo');

            $table->foreign('idProduto')->references('id')->on('produto');
            $table->foreign('idVeiculo')->references('id')->on('veiculo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtoVeiculo');
        Schema::dropIfExists('produto');
        Schema::dropIfExists('veiculo');
        Schema::dropIfExists('beneficiario');
    }
}
