<?php

namespace Database\Factories;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    private function categoryLists(){
        $arr = [
            ['title' => 'وب' , 'description' => 'این یک متن ساختگی وب است'],
            ['title' => 'برنامه نویسی' , 'description' => 'این یک متن ساختگی برنامه نویسی است'],
            ['title' => 'اینترنت' , 'description' => 'این یک متن ساختگی اینترنت است'],
            ['title' => 'بازی' , 'description' => 'این یک متن ساختگی بازی است'],
            ['title' => 'طبیعت' , 'description' => 'این یک متن ساختگی طبیعت است']
        ];
        $index = array_rand($arr);
        $title = $arr[$index]['title'];
        $desc =  $arr[$index]['description'];
        return array($title,$desc);

    }
    public function definition(): array
    {
        $cat = $this->categoryLists();
        return [
            'title' => $cat[0],
            'description' => $cat[1],
            'created_at' => Verta::now(),
            'updated_at' =>verta::now() 
        ];
    }
}
