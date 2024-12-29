<?php

use App\Models\Job;
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
        Schema::create('job_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Job::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Tag::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

        DB::table('job_tag')->insert([
            'job_id' => 1,
            'tag_id' => 1
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 2,
            'tag_id' => 1
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 3,
            'tag_id' => 4
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 3,
            'tag_id' => 2
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 4,
            'tag_id' => 2
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 4,
            'tag_id' => 4
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 5,
            'tag_id' => 3
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 6,
            'tag_id' => 5
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 6,
            'tag_id' => 1
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 7,
            'tag_id' => 5
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 7,
            'tag_id' => 1
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 8,
            'tag_id' => 5
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 8,
            'tag_id' => 1
        ]);

        DB::table('job_tag')->insert([
            'job_id' => 9,
            'tag_id' => 5
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 9,
            'tag_id' => 1
        ]);

        DB::table('job_tag')->insert([
            'job_id' => 10,
            'tag_id' => 5
        ]);
        DB::table('job_tag')->insert([
            'job_id' => 10,
            'tag_id' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_tag');
    }
};
