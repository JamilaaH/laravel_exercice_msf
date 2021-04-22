<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeformations')->insert([
            [
                "nom" => "coding school 16",
                "created_at" => now(),
            ],
            [
                "nom" => "coding school 17",
                "created_at" => now(),
            ],
            [
                "nom" => "coding school 18",
                "created_at" => now(),
            ],
            [
                "nom" => "coding school 19",
                "created_at" => now(),
            ],
            [
                "nom" => "marketing lab 3",
                "created_at" => now(),
            ],
            [
                "nom" => "marketing lab 4",
                "created_at" => now(),
            ],
            [
                "nom" => "marketing lab 5",
                "created_at" => now(),
            ],
            [
                "nom" => "webmaster 1",
                "created_at" => now(),
            ],
            [
                "nom" => "webmaster 2",
                "created_at" => now(),
            ],
            [
                "nom" => "webmaster 3",
                "created_at" => now(),
            ],
        ]);
    }
}
