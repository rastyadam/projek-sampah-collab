<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('menus', function (Blueprint $table) {
        $table->id();
        
        // Relasi ke Penjual (Fitur Multi-Penjual)
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        
        // Detail Menu (Fitur 2 & 3)
        $table->string('name');
        $table->text('description')->nullable();
        $table->integer('price');
        $table->integer('stock')->default(0); // Fitur 6 (Stok)
        $table->string('image')->nullable(); // Fitur 2 (Upload Foto)
        
        // Kategori Menu (Fitur 3)
        $table->enum('category', ['makanan berat', 'minuman', 'snack', 'paket hemat']);
        
        // Status ketersediaan
        $table->boolean('is_available')->default(true);
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
