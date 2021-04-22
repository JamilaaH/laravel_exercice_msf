<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('formations')->insert([
            [
                "nom"=>"marketing lab",
                "description"=>"formation de 6 mois pour devenir marketer digital",
                "created_at"=> now(),
            ],
            [
                "nom"=>"coding school",
                "description"=>"formation de 6 mois pour devenir web developpeur",
                "created_at"=> now(),
            ],
            [
                "nom"=>"wordpress",
                "description"=>"formation courte pour apprendre wordpress",
                "created_at"=> now(),
            ],
            [
                "nom"=>"webmaster",
                "description"=>"formation courte pour apprendre les bases du web",
                "created_at"=> now(),
            ],
            [
                "nom"=>"photoshop",
                "description"=>"formation courte pour apprendre les bases d'adobe photoshop",
                "created_at"=> now(),
            ],
            [
                "nom"=>"illustrator",
                "description"=>"formation courte pour apprendre les bases d'illustrator",
                "created_at"=> now(),
            ],
        ]);
    }
}
