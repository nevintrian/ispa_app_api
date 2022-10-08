<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Disease::create([
            'name' => 'Batuk Bukan Pneumonia',
            'definition' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque delectus nostrum assumenda praesentium omnis aut itaque eligendi sapiente tenetur voluptatum possimus ipsum esse placeat sed odit, reiciendis eveniet impedit culpa molestiae aperiam quos magnam. Iste commodi ex, rem suscipit asperiores tenetur corrupti non illum atque sint quos exercitationem ad?",
            'cause' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam corrupti voluptates autem blanditiis sapiente quas itaque voluptatibus expedita nam quia commodi obcaecati tempore ducimus illo perspiciatis rerum ex, eveniet eum eius pariatur et placeat accusamus quam tempora. Architecto nobis voluptatum beatae molestiae deleniti adipisci inventore facilis? Similique, ratione nostrum. Nisi illo obcaecati vitae neque aliquid, non expedita eius. Placeat earum hic reiciendis illo at officiis nostrum itaque illum, molestias quo quia ea unde neque alias libero laudantium aliquam molestiae, accusamus odio, cupiditate quam dolorem atque soluta. Neque obcaecati ipsa nulla in! Suscipit sint, voluptates officiis facere quas ipsa ratione consectetur.",
            'therapy' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quas ipsam facilis suscipit nobis esse nihil tenetur vel cumque. Omnis sint quos, incidunt veritatis amet itaque? Adipisci ullam expedita quae iure perferendis eveniet, repellat cumque suscipit accusamus? Eos quod eveniet, facilis error incidunt deleniti sunt dolore dolorem eligendi aspernatur sed debitis, sequi inventore nobis fuga odit ipsa impedit omnis? Molestias enim nostrum sit culpa vel iste, sapiente velit inventore illo quos iure earum voluptates vero voluptatem vitae quis quae, quo atque perspiciatis quibusdam? Nemo quod quidem, a earum illum dignissimos repellat culpa doloremque similique cupiditate. Corporis quasi dicta saepe optio."
        ]);

        Disease::create([
            'name' => 'Pneumonia',
            'definition' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque delectus nostrum assumenda praesentium omnis aut itaque eligendi sapiente tenetur voluptatum possimus ipsum esse placeat sed odit, reiciendis eveniet impedit culpa molestiae aperiam quos magnam. Iste commodi ex, rem suscipit asperiores tenetur corrupti non illum atque sint quos exercitationem ad?",
            'cause' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam corrupti voluptates autem blanditiis sapiente quas itaque voluptatibus expedita nam quia commodi obcaecati tempore ducimus illo perspiciatis rerum ex, eveniet eum eius pariatur et placeat accusamus quam tempora. Architecto nobis voluptatum beatae molestiae deleniti adipisci inventore facilis? Similique, ratione nostrum. Nisi illo obcaecati vitae neque aliquid, non expedita eius. Placeat earum hic reiciendis illo at officiis nostrum itaque illum, molestias quo quia ea unde neque alias libero laudantium aliquam molestiae, accusamus odio, cupiditate quam dolorem atque soluta. Neque obcaecati ipsa nulla in! Suscipit sint, voluptates officiis facere quas ipsa ratione consectetur.",
            'therapy' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quas ipsam facilis suscipit nobis esse nihil tenetur vel cumque. Omnis sint quos, incidunt veritatis amet itaque? Adipisci ullam expedita quae iure perferendis eveniet, repellat cumque suscipit accusamus? Eos quod eveniet, facilis error incidunt deleniti sunt dolore dolorem eligendi aspernatur sed debitis, sequi inventore nobis fuga odit ipsa impedit omnis? Molestias enim nostrum sit culpa vel iste, sapiente velit inventore illo quos iure earum voluptates vero voluptatem vitae quis quae, quo atque perspiciatis quibusdam? Nemo quod quidem, a earum illum dignissimos repellat culpa doloremque similique cupiditate. Corporis quasi dicta saepe optio."
        ]);

        Disease::create([
            'name' => 'Pneumonia Berat',
            'definition' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque delectus nostrum assumenda praesentium omnis aut itaque eligendi sapiente tenetur voluptatum possimus ipsum esse placeat sed odit, reiciendis eveniet impedit culpa molestiae aperiam quos magnam. Iste commodi ex, rem suscipit asperiores tenetur corrupti non illum atque sint quos exercitationem ad?",
            'cause' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam corrupti voluptates autem blanditiis sapiente quas itaque voluptatibus expedita nam quia commodi obcaecati tempore ducimus illo perspiciatis rerum ex, eveniet eum eius pariatur et placeat accusamus quam tempora. Architecto nobis voluptatum beatae molestiae deleniti adipisci inventore facilis? Similique, ratione nostrum. Nisi illo obcaecati vitae neque aliquid, non expedita eius. Placeat earum hic reiciendis illo at officiis nostrum itaque illum, molestias quo quia ea unde neque alias libero laudantium aliquam molestiae, accusamus odio, cupiditate quam dolorem atque soluta. Neque obcaecati ipsa nulla in! Suscipit sint, voluptates officiis facere quas ipsa ratione consectetur.",
            'therapy' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Error quas ipsam facilis suscipit nobis esse nihil tenetur vel cumque. Omnis sint quos, incidunt veritatis amet itaque? Adipisci ullam expedita quae iure perferendis eveniet, repellat cumque suscipit accusamus? Eos quod eveniet, facilis error incidunt deleniti sunt dolore dolorem eligendi aspernatur sed debitis, sequi inventore nobis fuga odit ipsa impedit omnis? Molestias enim nostrum sit culpa vel iste, sapiente velit inventore illo quos iure earum voluptates vero voluptatem vitae quis quae, quo atque perspiciatis quibusdam? Nemo quod quidem, a earum illum dignissimos repellat culpa doloremque similique cupiditate. Corporis quasi dicta saepe optio."
        ]);
    }
}
