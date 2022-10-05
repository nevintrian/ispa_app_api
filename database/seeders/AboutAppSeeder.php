<?php

namespace Database\Seeders;

use App\Models\AboutApp;
use Illuminate\Database\Seeder;

class AboutAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutApp::create([
            'title' => 'Halaman Login',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem harum et consequuntur tempora temporibus nobis laborum, eveniet eos impedit fugit ipsam, pariatur similique saepe. Nam aut non eligendi, quia a temporibus. Laudantium veniam autem sint, pariatur, omnis quas dolorem quam recusandae optio, similique atque architecto earum error quisquam amet labore. Porro, quod temporibus itaque labore dicta animi. Harum, a, dolorem aspernatur iure dignissimos vero error delectus ipsum corporis veritatis eum aliquam voluptatum atque fugiat dolorum id neque. Doloremque ipsam voluptatum ex totam impedit eos assumenda fugit beatae, iure illum, consectetur, officia consequuntur placeat id minus reiciendis error iste numquam eius!'
        ]);

        AboutApp::create([
            'title' => 'Data Training',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem harum et consequuntur tempora temporibus nobis laborum, eveniet eos impedit fugit ipsam, pariatur similique saepe. Nam aut non eligendi, quia a temporibus. Laudantium veniam autem sint, pariatur, omnis quas dolorem quam recusandae optio, similique atque architecto earum error quisquam amet labore. Porro, quod temporibus itaque labore dicta animi. Harum, a, dolorem aspernatur iure dignissimos vero error delectus ipsum corporis veritatis eum aliquam voluptatum atque fugiat dolorum id neque. Doloremque ipsam voluptatum ex totam impedit eos assumenda fugit beatae, iure illum, consectetur, officia consequuntur placeat id minus reiciendis error iste numquam eius!'
        ]);

        AboutApp::create([
            'title' => 'Data Uji',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem harum et consequuntur tempora temporibus nobis laborum, eveniet eos impedit fugit ipsam, pariatur similique saepe. Nam aut non eligendi, quia a temporibus. Laudantium veniam autem sint, pariatur, omnis quas dolorem quam recusandae optio, similique atque architecto earum error quisquam amet labore. Porro, quod temporibus itaque labore dicta animi. Harum, a, dolorem aspernatur iure dignissimos vero error delectus ipsum corporis veritatis eum aliquam voluptatum atque fugiat dolorum id neque. Doloremque ipsam voluptatum ex totam impedit eos assumenda fugit beatae, iure illum, consectetur, officia consequuntur placeat id minus reiciendis error iste numquam eius!'
        ]);
    }
}
