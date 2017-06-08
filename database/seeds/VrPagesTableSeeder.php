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
            0 => 
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
            1 => 
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
            2 => 
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
            3 => 
            array (
                'count' => 4,
                'id' => '542e06f2-3f77-41ee-aba8-a68b1db6cc5d',
                'created_at' => '2017-06-08 08:51:37',
                'updated_at' => '2017-06-08 08:51:37',
                'deleted_at' => NULL,
                'name' => 'Apie',
                'pages_categories_id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'cover_image_id' => 'f5b0f3cd-23d6-4e19-8769-05a3503bef98',
            ),
            4 => 
            array (
                'count' => 5,
                'id' => 'b852de66-6978-45c9-b467-6824e06052db',
                'created_at' => '2017-06-08 09:02:02',
                'updated_at' => '2017-06-08 09:02:02',
                'deleted_at' => NULL,
                'name' => 'Apie',
                'pages_categories_id' => '69efd427-6091-4f0e-adb3-d320d3e26aac',
                'cover_image_id' => NULL,
            ),
        ));
        
        
    }
}