<?php

use App\Models\Abonnement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Cours;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_abonnements', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['PERSONNEL', 'GROUPE']);
            $table->enum('periode', ['JOUR', 'SEMAINE', 'MOIS']); 
            $table->integer('prix');
            $table->foreignIdFor(Cours::class)->constrained();
            $table->timestamps();
        });

    
    }

    public function down(): void
    {
    
        Schema::dropIfExists('type_abonnements');
    }
};
