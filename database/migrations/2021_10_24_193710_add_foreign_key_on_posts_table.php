<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //definisco la nuova colonna: 

            $table->unsignedBigInteger('category_id')->after('id')->nullable();

            //indico la foreign key e definisco a cosa si riferisce: 

                $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

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
            // elimino il vincolo definito in up qui sopra: 

            $table->dropForeign('posts_category_id_foreign');

            // elimino la nuova colonna creata in up: 

            $table->dropColumn('category_id');
        });
    }
}
