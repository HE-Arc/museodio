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
        $table->renameColumn('long', 'longitude');
      });

      DB::statement('alter table audio_notes modify latitude DOUBLE(15,2)');
      DB::statement('alter table audio_notes modify longitude DOUBLE(15,2)');
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
