'<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNestedCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('nested_category')->insert([
            ['name' => 'Electronics', 'lft' => 1,'rgt'=>22],

            ['name' => 'Mobile', 'lft' => 1,'rgt'=>7],

            ['name' => 'Apple Phone', 'lft' => 3,'rgt'=>4],

            ['name' => 'Android Phone', 'lft' => 5,'rgt'=>6],

            ['name' => 'PC', 'lft' => 8,'rgt'=>13],

            ['name' => 'Apple PC', 'lft' => 9,'rgt'=>10],

            ['name' => 'Window PC', 'lft' => 11,'rgt'=>12],

            ['name' => 'Tablet', 'lft' => 14,'rgt'=>21],

            ['name' => 'Ipad', 'lft' => 15,'rgt'=>16],

            ['name' => 'Android Tablet', 'lft' => 17,'rgt'=>18],

            ['name' => 'Other Tablet', 'lft' => 19,'rgt'=>20],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nested_category');
    }
}
