<?php

use App\Models\Tag;
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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $tags = ['war','politics','economy','physical','government','literature','arts','movies'];
        foreach ($tags as $tag) {
            Tag::create(['name'=>$tag]);
        }
        
    }
    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
