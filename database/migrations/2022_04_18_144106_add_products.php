<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Product::create([
            'title' => 'Xerox Phaser',
            'model' => '3100 MFP/S',
            'price_ru' => 10000,
            'amount' => 100,
            'produced_at' => '2022-01-18',
            'category_id' => 1,
            'country_id' => 0,
        ]);

        Product::create([
            'title' => 'Xerox WorkCentre 3345',
            'model' => '3345VDNI',
            'price_ru' => 20000,
            'amount' => 200,
            'produced_at' => '2022-01-18',
            'category_id' => 2,
            'country_id' => 0,

        ]);

        Product::create([
            'title' => 'Xerox Phaser',
            'model' => '3100 MFP/S',
            'price_ru' => '10000.00',
            'amount' => 15000,
            'produced_at' => '2022-01-18',
            'category_id' => 1,
            'country_id' => 0,

        ]);

        Product::create([
            'title' => 'Xerox Phaser',
            'model' => '3100 MFP/S',
            'price_ru' => 10000,
            'amount' => 120,
            'produced_at' => '2022-01-18',
            'category_id' => 3,
            'country_id' => 0,

        ]);

        Product::create([
            'title' => 'Xerox Phaser',
            'model' => '3100 MFP/S',
            'price_ru' => 25999,
            'amount' => 20,
            'produced_at' => '2022-01-18',
            'category_id' => 4,
            'country_id' => 0,

        ]);

        Product::create([
            'title' => 'Xerox Phaser',
            'model' => '3100 MFP/S',
            'price_ru' => 12000,
            'amount' => 123,
            'produced_at' => '2022-01-18',
            'category_id' => 2,
            'country_id' => 0,

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
