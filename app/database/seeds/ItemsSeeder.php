<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ItemsSeeder
 *
 * @author blank
 */
class ItemsSeeder extends Seeder {

    public function run() {
// Uncomment the below to wipe the table clean before populating
        DB::table('items')->truncate();
        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' .
                'Praesent vel ligula scelerisque, vehicula dui eu, fermentum velit.' .
                'Phasellus ac ornare eros, quis malesuada augue. Nunc ac nibh at mauris dapibus fermentum.' .
                'eget accumsan nulla nisi ut nisi. Etiam non convallis ligula. Nulla urna augue, ' .
                'dignissim ac semper in, ornare ac mauris. Duis nec felis mauris.';
        for ($i = 1; $i <= 20; $i++) {
            $item = new Item;
            $item->name = "Item no $i";
            $item->categorie_id = mt_rand(3, 5);
            $item->description = $description;
            $item->price_day = mt_rand(1, 100);
            $item->price_week = mt_rand(1, 100);
            $item->price_weekend = mt_rand(1, 100);
            $item->price_month = mt_rand(1, 100);
            $item->days_min = mt_rand(1, 15);
            $item->days_max = mt_rand(1, 15);
            $item->save();
        }
    }

}
