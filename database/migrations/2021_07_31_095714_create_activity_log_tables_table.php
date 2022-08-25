<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityLogTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try{
            Schema::create('activity_log_tables', function (Blueprint $table) {
                $table->id();
                $table->string('table_name');
                $table->timestamps();
                $table->softDeletes();
            });
        }catch (\Exception $e){
                $this->down();
                throw $e;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activity_log_tables');
    }
}
