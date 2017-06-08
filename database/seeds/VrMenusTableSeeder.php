<?php

use App\Models\VRMenus;
use App\Models\VRPages;
use Illuminate\Database\Seeder;

class VrMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */




    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('vr_menus')->delete();
        $list = [
            0 => 
            array (
                'count' => 1,
                'id' => 'de03dc0d-79d1-4489-9af6-066eed9ad53c',
                'created_at' => '2017-06-07 17:48:46',
                'updated_at' => '2017-06-07 17:48:46',
                'deleted_at' => NULL,
                'parent_id' => NULL,
                'name' => 'Main',
            ),
            1 => 
            array (
                'count' => 2,
                'id' => 'f6ea3b56-959d-4035-86be-8328f6f66c08',
                'created_at' => '2017-06-07 17:49:13',
                'updated_at' => '2017-06-07 17:49:13',
                'deleted_at' => NULL,
                'parent_id' => 'de03dc0d-79d1-4489-9af6-066eed9ad53c',
                'name' => 'Virtualūs kambariai',
            ),
            2 => 
            array (
                'count' => 3,
                'id' => 'c966cd81-325a-4efb-9fb0-e806debd814e',
                'created_at' => '2017-06-07 17:49:21',
                'updated_at' => '2017-06-07 17:49:21',
                'deleted_at' => NULL,
                'parent_id' => 'de03dc0d-79d1-4489-9af6-066eed9ad53c',
                'name' => 'Apie',
            ),
            3 => 
            array (
                'count' => 4,
                'id' => 'bce43ff5-bbc4-4c7a-b251-9993a1d944de',
                'created_at' => '2017-06-07 17:49:28',
                'updated_at' => '2017-06-07 17:49:28',
                'deleted_at' => NULL,
                'parent_id' => 'de03dc0d-79d1-4489-9af6-066eed9ad53c',
                'name' => 'Kontaktai',
            ),
            4 => 
            array (
                'count' => 5,
                'id' => '5dd9c0ff-286c-4595-93ad-0ea5a4fa7806',
                'created_at' => '2017-06-07 17:50:02',
                'updated_at' => '2017-06-07 17:50:02',
                'deleted_at' => NULL,
                'parent_id' => 'de03dc0d-79d1-4489-9af6-066eed9ad53c',
                'name' => 'Vieta ir laikas',
            ),
        ];

        DB::beginTransaction();
        try {
            foreach ($list as $single) {
                $record = VRMenus::find($single['id']);
                if(!$record) {
                    VRMenus::create($single);
                }
            }
        } catch(Exception $e) {
            DB::rollback();
            throw new Exception($e);
        }
        DB::commit();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }


    }
