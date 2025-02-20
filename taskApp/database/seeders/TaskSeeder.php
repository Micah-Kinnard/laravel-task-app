<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'task_name' => 'Take out trash',
            'task_location' => 'Kitchen',
            'time_complexity' => 1, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Trash bags',
            'deadline' => '2025-02-20 10:00:00',
            'priority' => 2, // (1 => low, 2 => medium, 3 => high)
            'category' => 'chores'
        ]);

        Task::create([
            'task_name' => 'English Essay',
            'task_location' => 'Library',
            'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'Notebook, computer',
            'deadline' => '2025-02-21 12:00:00',
            'priority' => 3, // (1 => low, 2 => medium, 3 => high)
            'category' => 'school'
        ]);

        Task::create([
            'task_name' => 'Workout',
            'task_location' => 'gym',
            'time_complexity' => 4, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'gym bag',
            'deadline' => '2025-02-20 06:00:00',
            'priority' => 2, // (1 => low, 2 => medium, 3 => high)
            'category' => 'health'
        ]);

        Task::create([
            'task_name' => 'Lunch with friends',
            'task_location' => 'Cafe',
            'time_complexity' => 4, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'purse',
            'deadline' => '2025-02-22 12:00:00',
            'priority' => 1, // (1 => low, 2 => medium, 3 => high)
            'category' => 'social'
        ]);

        Task::create([
            'task_name' => 'Psychology Project',
            'task_location' => 'Library',
            'time_complexity' => 3, // (1 => ~10 min, 2 => ~30 min, etc.)
            'materials_required'=> 'laptop',
            'deadline' => '2025-02-20 11:00:00',
            'priority' => 3, // (1 => low, 2 => medium, 3 => high)
            'category' => 'school'
        ]);
    }
}
