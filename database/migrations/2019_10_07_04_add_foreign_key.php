<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('posts', function (Blueprint $table) {

            $table -> bigInteger('category_id') -> unsigned() -> index();
            $table -> foreign('category_id', 'category')
                  -> references('id')
                  -> on('categories');

          });

          Schema::table('post_tag', function (Blueprint $table) {

            $table -> bigInteger('tag_id') -> unsigned() -> index();
            $table -> foreign('tag_id', 'tag')
                  -> references('id')
                  -> on('tags');

            $table -> bigInteger('post_id') -> unsigned() -> index();
            $table -> foreign('post_id', 'post')
                  -> references('id')
                  -> on('posts');

          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      Schema::table('posts', function (Blueprint $table) {

        $table -> dropforeign('category');
        $table -> dropColumn('category_id');

      });

      Schema::table('posts_tags', function (Blueprint $table) {

        $table -> dropforeign('tag');
        $table -> dropColumn('tag_id');

        $table -> dropforeign('post');
        $table -> dropColumn('post_id');

      });

    }
}
