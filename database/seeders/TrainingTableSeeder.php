<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainings = [
            [
                'title' => 'Multi Industries',
                'slug' => 'multi-industries',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'title' => 'In House Training',
                'slug' => 'in-house-training',
                'created_at' => date('Y-m-d H:i:s', time()),
                'update_at' => date('Y-m-d H:i:s', time()),
            ],
        ];

        Training::insert($trainings);
    }
}
