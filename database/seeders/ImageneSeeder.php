<?php

namespace Database\Seeders;

use App\Models\imagene;
use Illuminate\Database\Seeder;

class ImageneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone11-white-select-2019_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1567021770073',
            'producto_id'    => '1'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone11-black-select-2019_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1567021766023',
            'producto_id'    => '1'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone11-green-select-2019_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1567021766404',
            'producto_id'    => '1'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone11-yellow-select-2019_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1567021770273',
            'producto_id'    => '1'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone11-purple-select-2019_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1567021766320',
            'producto_id'    => '1'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone11-red-select-2019_GEO_EMEA?wid=940&hei=1112&fmt=png-alpha&qlt=80&.v=1567021767076',
            'producto_id'    => '1'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-pro-graphite-hero?wid=470&hei=556&fmt=png-alpha&.v=1604021660000',
            'producto_id'    => '2'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-pro-silver-hero?wid=470&hei=556&fmt=png-alpha&.v=1604021661000',
            'producto_id'    => '2'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-pro-gold-hero?wid=470&hei=556&fmt=png-alpha&.v=1604021659000',
            'producto_id'    => '2'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-12-pro-blue-hero?wid=470&hei=556&fmt=png-alpha&.v=1604021661000',
            'producto_id'    => '2'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-white-select-2020_GEO_EMEA?wid=470&hei=556&fmt=png-alpha&.v=1586574260599',
            'producto_id'    => '3'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-black-select-2020_GEO_EMEA?wid=470&hei=556&fmt=png-alpha&.v=1586574259781',
            'producto_id'    => '3'
        ]);

        imagene::factory()->times(1)->create([
            'url'            => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-se-red-select-2020_GEO_EMEA?wid=470&hei=556&fmt=png-alpha&.v=1586574260374',
            'producto_id'    => '3'
        ]);
    }
}
