<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed --class=Product_Seeder 
        DB::table('products')->insert([
         [
            'name'=>'test mobile',
            'price'=>'10000',
            'category'=>'mobile',
            'gallery'=>'https://picsum.photos/200',
            'description'=>'test',
            'created_at'=>date('Y-m-d H:i:s'),
         ],
         [
            'name'=>'test mobile',
            'price'=>'20000',
            'category'=>'mobile',
            'gallery'=>'https://picsum.photos/200',
            'description'=>'test',
            'created_at'=>date('Y-m-d H:i:s'),
         ],
         [
            'name'=>'test tv',
            'price'=>'10000',
            'category'=>'tv',
            'gallery'=>'https://picsum.photos/200',
            'description'=>'test',
            'created_at'=>date('Y-m-d H:i:s'),
         ],
         [
            'name'=>'test ac',
            'price'=>'10000',
            'category'=>'ac',
            'gallery'=>'https://picsum.photos/200',
            'description'=>'test',
            'created_at'=>date('Y-m-d H:i:s'),
         ],
         
        ]);
    }
}
