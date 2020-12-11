<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_submissions', function (Blueprint $table) {
            $table->id('id_submission');
            $table->foreignId('id_user')->constrained('users','id');
            $table->string('submission_type',50);
            $table->string('tittle_song',100);
            $table->string('genre',50);
            $table->string('gdrive_link',255);
            $table->boolean('collaboration');
            $table->string('collab_name',100);
            $table->boolean('legal_confirm');
            $table->boolean('on_roaster');
            $table->boolean('explicit');
            $table->boolean('lyric');
            $table->text('lyric_text');
            $table->string('logo_namestage');
            $table->boolean('term_acc');
            $table->date('submit_date');
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
        Schema::dropIfExists('form_submissions');
    }
}
