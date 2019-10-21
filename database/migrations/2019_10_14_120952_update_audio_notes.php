<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAudioNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('audio_notes', function (Blueprint $table) {
        $table->renameColumn('lat', 'latitude');
      });

      Schema::table('audio_notes', function(Blueprint $table) {
        $table->renameColumn('long', 'longitude');
      });

      DB::statement('AlTER TABLE audio_notes MODIFY latitude DOUBLE');
      DB::statement('AlTER TABLE audio_notes MODIFY longitude DOUBLE');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('audio_notes', function (Blueprint $table) {
        $table->renameColumn('latitude', 'lat');
        $table->renameColumn('longitude', 'long');

        $table->decimal('lat', 10, 7)->change();
        $table->decimal('long', 10, 7)->change();
      });
    }
}
