<?php

namespace Database\Seeders;

use App\Visitor;
use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::factory()->count(100)->create();
    }
}
