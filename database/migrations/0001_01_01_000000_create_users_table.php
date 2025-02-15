<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up(): void
{
Schema::create('users', function (Blueprint $table) {
$table->id(); // Clave primaria auto-incremental
$table->string('name'); // Nombre
$table->string('email')->unique(); // Email único
$table->integer('age'); // Edad
$table->text('actions')->nullable(); // Acciones (campo opcional de tipo texto)
$table->timestamps(); // Campos created_at y updated_at
});
}
/**
* Reverse the migrations.
*
* @return void
*/
public function down(): void
{
Schema::dropIfExists('users'); // Elimina la tabla si se revierte la migración
}
};