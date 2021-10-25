<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagNames = ['FrontEnd', 'BackEnd', 'FullStack', 'UI/UX', 'DevOps'];

        foreach($tagNames as $name) {
            $tag = new Tag();
            $tag->name = $name;
            $tag->save();
        }
    }
}
