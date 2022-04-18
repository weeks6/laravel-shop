<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Category::create([
            'title' => 'МФУ'
        ]);

        Category::create([
            'title' => 'Лазерное МФУ'
        ]);

        Category::create([
            'title' => 'Принтер струйный'
        ]);

        Category::create([
            'title' => 'Принтер'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
