<?php

use Illuminate\Database\Seeder;

class VrPagesCategoriesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vr_pages_categories_translations')->delete();
        
        \DB::table('vr_pages_categories_translations')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'vr_id_lt',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'categories_id' => 'vr_categories_id',
                'languages_id' => 'lt',
                'name' => 'Virtualus kambariai',
                'slug' => 'vrkambariai',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'vr_id_en',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'categories_id' => 'vr_categories_id',
                'languages_id' => 'en',
                'name' => 'Virtual rooms',
                'slug' => 'vrrooms',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => '642ed517-40d3-4cde-8b59-fbf530d44c03',
                'created_at' => '2017-06-08 08:11:22',
                'updated_at' => '2017-06-08 08:11:22',
                'deleted_at' => NULL,
                'categories_id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'languages_id' => 'lt',
                'name' => 'Apie',
                'slug' => 'apie',
            ),
            3 => 
            array (
                'count' => 4,
                'id' => '7f2ccf75-6169-4038-abed-3eb07e51d9b0',
                'created_at' => '2017-06-08 08:11:22',
                'updated_at' => '2017-06-08 08:11:22',
                'deleted_at' => NULL,
                'categories_id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'languages_id' => 'en',
                'name' => 'About',
                'slug' => 'about',
            ),
        ));
        
        
    }
}