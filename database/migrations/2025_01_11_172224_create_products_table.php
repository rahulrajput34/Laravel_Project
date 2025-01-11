<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 2000)->index();
            $table->string('slug', 2000)->unique();
            $table->text('description');
            $table->foreignId('department_id')
                ->constrained('departments')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('category_id')
                ->constrained('categories')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->decimal('price', 20, 4)->unsigned();
            $table->string('status')->index();
            $table->string('quantity')->nullable();
            $table->foreignIdFor(User::class, 'created_by');
            $table->foreignIdFor(User::class, 'updated_by');
            $table->timestamp('delete_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
