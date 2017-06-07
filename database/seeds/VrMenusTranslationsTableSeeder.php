<?php

use Illuminate\Database\Seeder;

class VrMenusTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vr_menus_translations')->delete();
        
        \DB::table('vr_menus_translations')->insert(array (
            0 => 
            array (
                'count' => 1,
                'id' => 'd731dc6c-e736-49d6-8a2b-2b566854c441',
                'created_at' => '2017-06-07 17:50:24',
                'updated_at' => '2017-06-07 17:50:24',
                'deleted_at' => NULL,
                'menus_id' => 'f6ea3b56-959d-4035-86be-8328f6f66c08',
                'languages_id' => 'lt',
                'title' => 'Virtualūs kambariai',
                'slug' => 'virtualus-kambariai',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => '6a5cf1bf-a38f-4299-92f3-5e33ee5927da',
                'created_at' => '2017-06-07 17:50:24',
                'updated_at' => '2017-06-07 17:50:24',
                'deleted_at' => NULL,
                'menus_id' => 'f6ea3b56-959d-4035-86be-8328f6f66c08',
                'languages_id' => 'en',
                'title' => 'Virtual rooms',
                'slug' => 'virtual-rooms',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => '17234851-4ae9-467d-8f02-b4d7e821a3be',
                'created_at' => '2017-06-07 17:50:33',
                'updated_at' => '2017-06-07 17:50:33',
                'deleted_at' => NULL,
                'menus_id' => 'c966cd81-325a-4efb-9fb0-e806debd814e',
                'languages_id' => 'lt',
                'title' => 'Apie',
                'slug' => 'apie',
            ),
            3 => 
            array (
                'count' => 4,
                'id' => '70c2c9cf-834e-48b2-aa68-33eed4acaab4',
                'created_at' => '2017-06-07 17:50:33',
                'updated_at' => '2017-06-07 17:50:33',
                'deleted_at' => NULL,
                'menus_id' => 'c966cd81-325a-4efb-9fb0-e806debd814e',
                'languages_id' => 'en',
                'title' => 'About',
                'slug' => 'about',
            ),
            4 => 
            array (
                'count' => 5,
                'id' => 'db584b02-44a9-4061-99d6-f69d37c7df6c',
                'created_at' => '2017-06-07 17:50:42',
                'updated_at' => '2017-06-07 17:50:42',
                'deleted_at' => NULL,
                'menus_id' => 'bce43ff5-bbc4-4c7a-b251-9993a1d944de',
                'languages_id' => 'lt',
                'title' => 'Kontaktai',
                'slug' => 'kontaktai',
            ),
            5 => 
            array (
                'count' => 6,
                'id' => '55256c68-6fa0-432c-beda-53de2d24a7ee',
                'created_at' => '2017-06-07 17:50:42',
                'updated_at' => '2017-06-07 17:50:42',
                'deleted_at' => NULL,
                'menus_id' => 'bce43ff5-bbc4-4c7a-b251-9993a1d944de',
                'languages_id' => 'en',
                'title' => 'Contacts',
                'slug' => 'contacts',
            ),
            6 => 
            array (
                'count' => 7,
                'id' => 'cc9b8bf6-bbfb-4b10-b3f0-fd0ba6049225',
                'created_at' => '2017-06-07 17:51:07',
                'updated_at' => '2017-06-07 17:51:07',
                'deleted_at' => NULL,
                'menus_id' => '5dd9c0ff-286c-4595-93ad-0ea5a4fa7806',
                'languages_id' => 'lt',
                'title' => 'Vieta ir laikas',
                'slug' => 'vieta-ir-laikas',
            ),
            7 => 
            array (
                'count' => 8,
                'id' => '75ef4746-7464-4683-add3-3556cd79a589',
                'created_at' => '2017-06-07 17:51:07',
                'updated_at' => '2017-06-07 17:51:07',
                'deleted_at' => NULL,
                'menus_id' => '5dd9c0ff-286c-4595-93ad-0ea5a4fa7806',
                'languages_id' => 'en',
                'title' => 'Place and time',
                'slug' => 'place-and-time',
            ),
        ));
        
        
    }
}