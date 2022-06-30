<?php

use App\Comics;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics_file = config('comics');
        foreach($comics_file as $comic){
            $new_comics = New Comics();
            $new_comics -> title = $comic['title'];
            $new_comics -> description = $comic['description'];
            $new_comics -> thumb = $comic['thumb'];
            $new_comics -> price = $comic['price'];
            $new_comics -> series = $comic['series'];
            $new_comics -> sale_date = $comic['sale_date'];
            $new_comics -> type = $comic['type'];
            $new_comics -> save();
        }
    }
}
