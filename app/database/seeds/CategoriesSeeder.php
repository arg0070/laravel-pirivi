<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriesSeeder
 *
 * @author blank
 */
class CategoriesSeeder extends Seeder {

    public function run() {
// Uncomment the below to wipe the table clean before populating
        DB::table('categories')->truncate();
        // Id: 1
        Categorie::create(array('parent_id' => '0', 'name' => 'Tecnología', 'description' => 'Elementos tecnológicos'));
        // Id: 2
        Categorie::create(array('parent_id' => '0', 'name' => 'Deportes', 'description' => 'Material deportivo'));

        Categorie::create(array('parent_id' => '1', 'name' => 'Televisiones', 'description' => 'TVs'));
        Categorie::create(array('parent_id' => '2', 'name' => 'Futbol', 'description' => 'Futbol'));
        Categorie::create(array('parent_id' => '2', 'name' => 'Tenis', 'description' => 'Tenis'));
    }

}
