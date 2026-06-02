<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Repositories\HistoryRepository;
use App\Models\History;

class HistorySeeder extends Seeder
{
    /**
     * Create the database record for this singleton module.
     *
     * @return void
     */
    public function run()
    {
        if (History::count() > 0) {
            return;
        }

        app(HistoryRepository::class)->create([
            'title' => [
                'en' => 'History',
                // add other languages here
            ],
            'description' => [
                'en' => '',
                // add other languages here
            ],
            'published' => false,
        ]);
    }
}
