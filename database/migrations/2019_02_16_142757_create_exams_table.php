<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('day_name');
            
            $table->date('exam_date');
            $table->time('exam_start_at');
            //$table->time('exam_end_at');
            $table->integer('exmam_group');
            $table->string('exam_course');
            $table->integer('exam_room');
            
            $table->string('exam_super_name');
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
        Schema::dropIfExists('exams');
        
        /* Schema::table('exams', function (Blueprint $table) {
            $table->dropColumn('day_name');
            $table->dropColumn('exam_end_at');
        }); */
        
        
    }
}
