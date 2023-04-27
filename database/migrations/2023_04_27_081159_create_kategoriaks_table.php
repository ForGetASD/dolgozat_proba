<?php

use App\Models\kategoriak;
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
        Schema::create('kategoriaks', function (Blueprint $table) {
            $table->id("id");
            $table->string("nev");
            $table->timestamps();
            
        });

        kategoriak::create(["id" => "1", "nev" => "Ház"]);
        kategoriak::create(["id" => "2", "nev" => "Lakás"]);
        kategoriak::create(["id" => "3", "nev" => "Építési telek"]);
        kategoriak::create(["id" => "4", "nev" => "Garázs"]);
        kategoriak::create(["id" => "5", "nev" => "Mezőgazdasági terület"]);
        kategoriak::create(["id" => "6", "nev" => "Ipari ingatlan"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoriaks');
    }
};
