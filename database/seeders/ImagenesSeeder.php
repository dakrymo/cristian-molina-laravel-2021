<?php

namespace Database\Seeders;

use App\Models\imagene;
use Illuminate\Database\Seeder;

class ImagenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        imagene::factory()->count(1)->create();
    }
}
