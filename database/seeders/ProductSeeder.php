<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    
    public function run(): void
    {
            $product1 = new Product();
            $product1->name = "Televisor";
            $product1->description = "Esta es la descripción del televisor";
            $product1->price = 500.00;
            $product1->category_id = Category::inRandomOrder()->first()->id; 
            $product1->save();
    
            $product2 = new Product();
            $product2->name = "Laptop";
            $product2->description = "Esta es la descripción de la laptop";
            $product2->price = 1000.00;
            $product2->category_id = Category::inRandomOrder()->first()->id; 
            $product2->save();

            $product3 = new Product();
            $product3->name = "Refrigerador";
            $product3->description = "Esta es la descripción del refrigerador";
            $product3->price = 800.00;
            $product3->category_id = Category::inRandomOrder()->first()->id; 
            $product3->save();


    }
}
