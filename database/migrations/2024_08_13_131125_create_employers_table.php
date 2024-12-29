<?php

use App\Models\Employer;
use App\Models\User;
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
        //
        Schema::create('employers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('name');
            $table->string('logo');
            $table->timestamps();
        });
        
        Employer::create(  [
            'name' => 'Tổng kho gia dụng Duy Thảo',
            'logo' => fake()->imageUrl,
            'user_id' => 1
        ]);

        Employer::create(  [
            'name' => 'Tiệm Decor 68',
            'logo' => fake()->imageUrl,
            'user_id' => 2
        ]);


        Employer::create(  [
            'name' => 'Woodland.shop',
            'logo' => fake()->imageUrl,
            'user_id' => 3
        ]);
        //Nội thất phòng khách.
        Employer::create(  [
            'name' => 'SOFA.NN shop',
            'logo' => fake()->imageUrl,
            'user_id' => 4
        ]);
        Employer::create(  [
            'name' => 'Sofa Decor Home',
            'logo' => fake()->imageUrl,
            'user_id' => 5
        ]);
        Employer::create(  [
            'name' => 'JIASHI',
            'logo' => fake()->imageUrl,
            'user_id' => 6
        ]);
        Employer::create(  [
            'name' => 'CB Official Store',
            'logo' => fake()->imageUrl,
            'user_id' => 7
        ]);
        Employer::create(  [
            'name' => 'Topick Global',
            'logo' => fake()->imageUrl,
            'user_id' => 8
        ]);
        Employer::create(  [
            'name' => 'CTA center',
            'logo' => fake()->imageUrl,
            'user_id' => 9
        ]);
        Employer::create(  [
            'name' => 'Home smart',
            'logo' => fake()->imageUrl,
            'user_id' => 10
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('employers');
    }
};
