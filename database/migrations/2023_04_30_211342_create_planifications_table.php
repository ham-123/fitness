<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Cours;
use App\Models\Entraineur;

return new class extends Migration
{
    public function up()
    {
        Schema::create('planifications', function (Blueprint $table) {
            $table->id();
            $table->enum('jour', ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche']);
            $table->time('heure_debut')->nullable();
            $table->time('heure_fin')->nullable();
            $table->foreignIdFor(Cours::class)->constrained();
            $table->foreignIdFor(Entraineur::class)->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('planifications');
    }
};