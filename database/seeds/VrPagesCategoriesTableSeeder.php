<?php

use Illuminate\Database\Seeder;

class VrPagesCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vr_pages_categories')->delete();
        
        \DB::table('vr_pages_categories')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'without_categories_id',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'name' => 'Does not have a category',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'vr_categories_id',
                'created_at' => '2017-06-08 06:32:29',
                'updated_at' => '2017-06-08 06:32:29',
                'deleted_at' => NULL,
                'name' => 'virtualus_kambariai_kategorija',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'created_at' => '2017-06-08 08:10:50',
                'updated_at' => '2017-06-08 08:16:15',
                'deleted_at' => NULL,
                'name' => 'apie_kategorija',
            ),
        ));
        
        
    }
}