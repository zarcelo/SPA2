<?php

use Illuminate\Database\Seeder;
use App\Work;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Work::class, 8)->create();
    }
}
