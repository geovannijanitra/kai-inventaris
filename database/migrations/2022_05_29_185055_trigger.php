<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Trigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE TRIGGER urut_before_insert BEFORE INSERT ON `data` FOR EACH ROW
            BEGIN
                declare penanda int;
                SET penanda = (SELECT MAX(urut) FROM data WHERE NEW.kode_jenis = data.kode_jenis);
                IF penanda IS NULL THEN
			      SET penanda = 0;
			    END IF;
                SET NEW.urut = LPAD(penanda + 1, 3, 0);
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `urut_before_insert`');
    }
}
