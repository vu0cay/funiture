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
            $table->string('name')->unique();
            $table->timestamps();
        });
        Tag::create([
            'name' => 'kệ và giá đỡ'
        ]);
        Tag::create([
            'name' => 'Đèn tường'
        ]);
        Tag::create([
            'name' => 'Thiết Bị Điện Gia Dụng'
        ]);
        Tag::create([
            'name' => 'Đèn'
        ]);
        Tag::create([
            'name' => 'Đồ nội thất'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
