<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Cours;

return new class extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entraineurs', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();   
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Cours::class)->constrained();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entraineurs');
    }
};



