<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name'=>'OnePlus mobile',
            "price"=>"27999",
            "description"=>"OnePlus Nord CE 5G (Charcoal Ink, 12GB RAM, 256GB Storage)",
            "category"=>"mobile",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/61XbSVQO%2BzS._SX679_.jpg"
            ],
            [
                'name'=>'MI 10T mobile',
            "price"=>"20000",
            "description"=>"Mi 10i 5G (Midnight Black, 6GB RAM, 128GB Storage) - 108MP Quad Camera | Snapdragon 750G Processor | Upto 2000 Additional Exchange",
            "category"=>"mobile",
            "gallery"=>"https://images-na.ssl-images-amazon.com/images/I/71%2BKJpeI2rL._SY741_.jpg"
            ],
            [
                'name'=>'OPPO RENO2',
            "price"=>"20000",
            "description"=>"OPPO RENO2 (OCEAN BLUE, 8GB RAM, 256GB STORAGE)",
            "category"=>"mobile",
            "gallery"=>"https://vlebazaar.in/image/cache/catalog//B07S9G65ZQ/OPPO-Reno2-Ocean-Blue-8GB-RAM-256GB-Storage-B07S9G65ZQ-550x550.jpg"
            ],
            [
                'name'=>'Samsung mobile',
            "price"=>"10000",
            "description"=>"Samsung mobile Galaxy F62",
            "category"=>"mobile",
            "gallery"=>"https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1620718533.70231095.jpg"
            ],
            [
                'name'=>'MI TV',
            "price"=>"4000",
            "description"=>"Mi TV 4X",
            "category"=>"Television",
            "gallery"=>"https://i01.appmifile.com/webfile/globalimg/products/pc/mi-tv-4x-55/bg_tv_0321.png"
            ],
         ]);
    }
}
