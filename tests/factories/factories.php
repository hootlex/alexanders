<?php
$factory('App\Receipt', [
    'aa' => $faker->numberBetween(10000, 1000000),
    'afm' => $faker->numberBetween(100000000, 999999999),
    'eponimia' => 'Μασούτης',
    'poso' => $faker->randomFloat(2, 1, 5000),
    'image' => 'http://www.xblog.gr/wp-content/uploads/2008/05/apodeiksi.jpg',
    'printed_at' => $faker->dateTime(),
    'user_id' => 1
]);
$factory('App\Category', [
    'name' => $faker->word,
    'user_id' => 1
]);
$factory('App\Promotion', [
    'title' => $faker->sentence(4),
    'type' => $faker->word,
    'receipts_count' => $faker->numberBetween(5, 20),
    'money_count' => $faker->numberBetween(5, 2000),
    'business_afm' => '509645501'
]);