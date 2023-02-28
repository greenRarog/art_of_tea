<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cards_of_tea')->insert([
           [
               'name' => NULL,
               'group' => NULL,
               'country' => NULL,
               'cost' => NULL,
               'season' => NULL,
               'appearance' => NULL,
               'aroma_dry_tea' => NULL,
               'infusion' => NULL,
               'color' => NULL,
               'aroma_infusion' => NULL,
               'taste_infusion' => NULL,
               'aftertaste' => NULL,
               'impression' => NULL,
               'rating' => 1,
               'author_id' => 1,
           ],
        ]);
    }
}
