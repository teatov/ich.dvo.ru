<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('news_articles', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);
            
            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('news_article_translations', function (Blueprint $table) {
            createDefaultTranslationsTableFields($table, 'news_article');
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
        });

        Schema::create('news_article_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'news_article');
        });

        
    }

    public function down()
    {
        
        Schema::dropIfExists('news_article_translations');
        Schema::dropIfExists('news_article_slugs');
        Schema::dropIfExists('news_articles');
    }
};
