<?php

use App\Models\District;
use App\Models\User;
use App\Models\Book;
use App\Models\Municipality;
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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Book::class)->constrained();
            $table->string('address');
            $table->foreignIdFor(District::class)->constrained();
            $table->float('price');
            //$table->integer('image');
            $table->boolean('available')->default(true);
            $table->text('description');

            $table->foreignIdFor(User::class)->constrained();
            $table->float('fee')->nullable();
            //$table->date('date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
