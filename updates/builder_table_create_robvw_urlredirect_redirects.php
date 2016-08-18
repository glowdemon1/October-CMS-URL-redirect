<?php namespace RobVW\UrlRedirect\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateRobvwUrlredirectRedirects extends Migration
{
    public function up()
    {
        Schema::create('robvw_urlredirect_redirects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('redirect_from');
            $table->string('redirect_to');
            $table->boolean('redirect_active')->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('robvw_urlredirect_redirects');
    }
}
