<?php

use Illuminate\Database\Seeder;

class VrPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('vr_pages')->delete();
        
        \DB::table('vr_pages')->insert(array (
            5 => 
            array (
                'count' => 1,
                'id' => '0fe92060-4b9c-4aef-a9fb-6cb6b573f193',
                'created_at' => '2017-06-07 13:37:54',
                'updated_at' => '2017-06-07 13:37:54',
                'deleted_at' => NULL,
                'name' => 'The Lab',
                'pages_categories_id' => 'vr_categories_id',
                'cover_image_id' => 'ea3e30ba-f425-4304-bb90-26470b836265',
            ),
            6 => 
            array (
                'count' => 2,
                'id' => 'c7f113ff-6049-4a40-a932-4b554c8385f2',
                'created_at' => '2017-06-07 17:31:22',
                'updated_at' => '2017-06-07 17:31:39',
                'deleted_at' => NULL,
                'name' => 'Vaisių nindzė',
                'pages_categories_id' => 'vr_categories_id',
                'cover_image_id' => 'b06a1c7f-acb9-44ee-a3a1-7f085642dc5e',
            ),
            7 => 
            array (
                'count' => 3,
                'id' => '22674233-da7a-4a49-9bc9-956c06e4147f',
                'created_at' => '2017-06-07 17:40:59',
                'updated_at' => '2017-06-07 17:40:59',
                'deleted_at' => NULL,
                'name' => 'KTU Parasparnis',
                'pages_categories_id' => 'vr_categories_id',
                'cover_image_id' => 'b64eca6f-5e35-4615-a764-8fe239eb5fc0',
            ),
        ));
        
        
    }
}