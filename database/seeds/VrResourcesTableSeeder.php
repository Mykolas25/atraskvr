<?php

use Illuminate\Database\Seeder;

class VrResourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('vr_resources')->delete();
        DB::table('vr_resources')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'ea3e30ba-f425-4304-bb90-26470b836265',
                'created_at' => '2017-06-07 13:37:54',
                'updated_at' => '2017-06-07 13:37:54',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/07/1496842674_the-lab-on-steam-archery.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 67079,
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'b06a1c7f-acb9-44ee-a3a1-7f085642dc5e',
                'created_at' => '2017-06-07 17:31:22',
                'updated_at' => '2017-06-07 17:31:22',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/07/1496856682_fruit-ninja-vr-screenshot-3.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 120937,
            ),
            2 => 
            array (
                'count' => 3,
                'id' => 'b64eca6f-5e35-4615-a764-8fe239eb5fc0',
                'created_at' => '2017-06-07 17:40:59',
                'updated_at' => '2017-06-07 17:40:59',
                'deleted_at' => NULL,
                'mime_type' => 'image/jpeg',
                'path' => 'upload/2017/06/07/1496857258_parasparnis.jpg',
                'width' => NULL,
                'height' => NULL,
                'size' => 47075,
            ),
        ));
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
    }
}