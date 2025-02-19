<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('task_name');
            $table->string('task_location')->nullable();
            // We'll use an integer for time_complexity
            $table->tinyInteger('time_complexity');
            // You could also store multiple materials by making this a TEXT field
            $table->string('materials_required')->nullable();
            // Or use $table->date('deadline') if you only want date
            $table->dateTime('deadline')->nullable();
            // 1 = low, 2 = medium, 3 = high
            $table->tinyInteger('priority')->nullable();
            // E.g. chores, work, health, ...
            $table->string('category')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};