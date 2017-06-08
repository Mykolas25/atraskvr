<?php

use Illuminate\Database\Seeder;

class VrPagesTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('vr_pages_translations')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('vr_pages_translations')->insert(array (
            0 => 
            array (
                'count' => 3,
                'id' => 'ddf72da1-e816-485c-ac95-b37ff51ebaa1',
                'created_at' => '2017-06-07 13:46:26',
                'updated_at' => '2017-06-07 13:46:26',
                'deleted_at' => NULL,
                'pages_id' => '0fe92060-4b9c-4aef-a9fb-6cb6b573f193',
                'languages_id' => 'lt',
                'title' => 'The Lab',
                'description_long' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,',
                'description_short' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab',
                'slug' => 'the-lab',
            ),
            1 => 
            array (
                'count' => 4,
                'id' => '65eb178a-8c7e-4e0d-9010-c15b4f78e7f3',
                'created_at' => '2017-06-07 13:46:26',
                'updated_at' => '2017-06-07 13:46:26',
                'deleted_at' => NULL,
                'pages_id' => '0fe92060-4b9c-4aef-a9fb-6cb6b573f193',
                'languages_id' => 'en',
                'title' => 'Laboratorija',
                'description_long' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee',
                'description_short' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.',
                'slug' => 'laboratorija',
            ),
            2 => 
            array (
                'count' => 5,
                'id' => '80fa3188-0087-4fd3-99d0-f260c001e2b1',
                'created_at' => '2017-06-07 17:33:34',
                'updated_at' => '2017-06-07 17:33:34',
                'deleted_at' => NULL,
                'pages_id' => 'c7f113ff-6049-4a40-a932-4b554c8385f2',
                'languages_id' => 'lt',
                'title' => 'Vaisių nindzė',
                'description_long' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex',
                'description_short' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab',
                'slug' => 'vaisiu-nindze',
            ),
            3 => 
            array (
                'count' => 6,
                'id' => 'c29a5084-c8bf-40ae-bad2-3861ac78a130',
                'created_at' => '2017-06-07 17:33:34',
                'updated_at' => '2017-06-07 17:33:34',
                'deleted_at' => NULL,
                'pages_id' => 'c7f113ff-6049-4a40-a932-4b554c8385f2',
                'languages_id' => 'en',
                'title' => 'Fruit ninja',
                'description_long' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. When, while the lovely valley teems with',
                'description_short' => 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my',
                'slug' => 'fruit-ninja',
            ),
            4 => 
            array (
                'count' => 7,
                'id' => '554d6d0f-9df1-4cae-b06e-d9886cae5f0e',
                'created_at' => '2017-06-07 17:42:23',
                'updated_at' => '2017-06-07 17:42:23',
                'deleted_at' => NULL,
                'pages_id' => '22674233-da7a-4a49-9bc9-956c06e4147f',
                'languages_id' => 'lt',
                'title' => 'KTU Parasparnis',
                'description_long' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.',
                'description_short' => 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular.',
                'slug' => 'ktu-parasparnis',
            ),
            5 => 
            array (
                'count' => 8,
                'id' => '6b240d61-4161-4004-9e81-f45dbb09249d',
                'created_at' => '2017-06-07 17:42:23',
                'updated_at' => '2017-06-07 17:42:23',
                'deleted_at' => NULL,
                'pages_id' => '22674233-da7a-4a49-9bc9-956c06e4147f',
                'languages_id' => 'en',
                'title' => 'KTU Paraglider',
                'description_long' => 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.',
                'description_short' => 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.',
                'slug' => 'ktu-paraglider',
            ),
        ));

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}