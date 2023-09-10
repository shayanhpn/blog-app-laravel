<?php

namespace Database\Factories;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     private function getFullName(){
        $arr = ['شایان','علی','حسین','نیلی','آرزو','کامران'];
        $index = array_rand($arr);
        return $arr[$index];
     }
    
     private function getTitle(){
        $arr = ['سایت شما خیلی خوب است','سایت شما خیلی بد است','باگ زیاد دارد','باگ ندارد'];
        $index = array_rand($arr);
        return $arr[$index];
     }
     private function setContent(){
        $content = 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.';
        return $content;
    }
    public function definition(): array
    {
        return [
            'fullname' => $this->getFullName(),
            'email' => fake()->unique()->safeEmail(),
            'title' => $this->getTitle(),
            'content' => $this->setContent(),
            'created_at' => Verta::now(),
            'updated_at' =>verta::now() 
        ];
    }
}
