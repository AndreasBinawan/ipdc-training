<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([

            'name' => 'Rafihan Aryu',
            'email' => 'rafihan012@gmail.com',
            'message' => 'Lorem ipsum dolor sit, amet consectetur adipisicing?',
        ]);
    }
}
