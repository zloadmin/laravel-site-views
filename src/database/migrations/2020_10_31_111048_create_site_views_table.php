<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sqr_site_views', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('client_id')->unsigned();
            $table->string('session_id');
            $table->string('url');
            $table->string('domain');
            $table->string('ip');
            $table->text('agent');
            $table->timestamps();
            $table->index('client_id');
            $table->index('session_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sqr_site_views');
    }
}
