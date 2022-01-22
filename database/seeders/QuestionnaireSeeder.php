<?php

namespace Database\Seeders;

use App\Models\Questionnaire;
use Illuminate\Database\Seeder;

class QuestionnaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questionnaire::create([
            'title' => 'Monitoring PPG',
            'purpose' => 'Untuk monitoring dan evaluasi program PPG'
        ]);
    }
}
