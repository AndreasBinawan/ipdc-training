<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainingCategory;

class TrainingCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trainingCategories = [
            [
                'training_id' => 1,
                'name' => 'Communication Skill',
            ],
            [
                'training_id' => 1,
                'name' => 'Administration & Secretarial',
            ],
            [
                'training_id' => 1,
                'name' => 'Innovation & Creativity',
            ],
            [
                'training_id' => 1,
                'name' => 'Human Resources Management',
            ],
            [
                'training_id' => 1,
                'name' => 'Purchasing, Logistic, & Supply Chain Management',
            ],
            [
                'training_id' => 2,
                'name' => 'Request In House Training',
            ],
            [
                'training_id' => 2,
                'name' => 'In House Training Program Offer',
            ],
        ];

        TrainingCategory::insert($trainingCategories);
    }
}
