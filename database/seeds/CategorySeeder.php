<?php

use Illuminate\Database\Seeder;

// Importare il model
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Richiamo il factor per inserire,tramite il faker, dati random
        factory(Category::class, 10) -> create();
    }
}
