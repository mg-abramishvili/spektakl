<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            [
                'show_id' => '1',
                'time' => '10:00',
            ],
            [
                'show_id' => '1',
                'time' => '12:00',
            ],
            [
                'show_id' => '1',
                'time' => '14:00',
            ],
            [
                'show_id' => '1',
                'time' => '16:00',
            ],
        ]);
    }
}
