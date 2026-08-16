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
        Schema::create('izotops', function (Blueprint $table) {
            $table->id();
            $table->integer("z");
            $table->integer("n");
            $table->double("abundance")->nullable();
            $table->double("unc_a")->nullable();
            $table->boolean("is_stable")->default(0);

            $table->double("ht")->nullable();
            $table->string("operator_hl")->nullable();

            $table->string("unc_hl")->nullable();
            $table->string("unit_hl")->nullable();
            $table->double("half_life_sec")->nullable();

            $table->string("decay_1", 10)->nullable();
            $table->double("decay_1_p")->nullable();
            $table->double("unc_1")->nullable();
            $table->string("decay_2", 10)->nullable();
            $table->double("decay_2_p")->nullable();
            $table->double("unc_2")->nullable();
            $table->string("decay_3", 10)->nullable();
            $table->double("decay_3_p")->nullable();
            $table->double("unc_3")->nullable();
            $table->timestamps();

            $table->foreign("z")->references("z")->on("elements");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izotops');
    }
};
