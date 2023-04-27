<?php

use App\Models\ingatlanok;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ingatlanoks', function (Blueprint $table) {
            $table->id("id");
            $table->foreignId('kategoria')->references('id')->on('kategoriaks');
            $table->string("leiras");
            $table->date("hirdetesDatuma")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean("tehermentes");
            $table->integer("ar");
            $table->string("kepUrl");
            $table->timestamps();
        });

        ingatlanok::create(["kategoria" => 1, "leiras" => "Szép kertes ház", "tehermentes" => true, "ar" => 162000000, "kepUrl" => "kep.jpg"]);
        ingatlanok::create(["kategoria" => 4, "leiras" => "10 férőhelyes garázs", "hirdetesDatuma" => "2022-5-10", "tehermentes" => false, "ar" => 105000000, "kepUrl" => "kep1.jpg"]);
        ingatlanok::create(["kategoria" => 2, "leiras" => "Modern lakás", "hirdetesDatuma" => "2021-2-25", "tehermentes" => false, "ar" => 65000000, "kepUrl" => "kep2.jpg"]);
        ingatlanok::create(["kategoria" => 2, "leiras" => "Modern lakás", "hirdetesDatuma" => "2019-2-10", "tehermentes" => true, "ar" => 15000000, "kepUrl" => "kep3.jpg"]);
        ingatlanok::create(["kategoria" => 5, "leiras" => "Vethető terület",  "tehermentes" => false, "ar" => 23000000, "kepUrl" => "kep4.jpg"]);
        ingatlanok::create(["kategoria" => 3, "leiras" => "Nagy beépíthető telek", "hirdetesDatuma" => "2023-2-9", "tehermentes" => true, "ar" => 53000000, "kepUrl" => "kep5.jpg"]);
        ingatlanok::create(["kategoria" => 6, "leiras" => "Ipari ingatlan", "hirdetesDatuma" => "2020-12-25", "tehermentes" => true, "ar" => 85000000, "kepUrl" => "kep6.jpg"]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingatlanoks');
    }
};
