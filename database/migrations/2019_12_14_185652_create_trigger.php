<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER tr_friends_double_accepted AFTER INSERT ON `friends`
            FOR EACH ROW BEGIN
                IF ROW.user_id_1 = NEW.user_id_1 AND ROW.user_id_2 = NEW.user_id_2 THEN
                    UPDATE friends SET isAccepted = `1` WHERE user_id_1 = NEW.user_id_1 AND user_id_2 = NEW.user_id_2;
                END IF;
                IF ROW.user_id_2 = NEW.user_id_1 AND ROW.user_id_1 = NEW.user_id_2 THEN
                    UPDATE friends SET isAccepted = `1` WHERE user_id_1 = NEW.user_id_2 AND user_id_2 = NEW.user_id_1;
                END IF;
            END;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `tr_friends_double_accepted`');
    }
}
