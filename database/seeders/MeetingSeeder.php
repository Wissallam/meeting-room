<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meeting;
use Illuminate\Support\Str;

class MeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Meeting::insert([
            [
                'id' => Str::uuid(),
                'title' => 'Evenement test',
                'start' => '2022-07-28',
                'end' =>'2022-07-30',
        'nb_guest'=>'10',
        'type_event'=>'type1',
        'rooms_id'=>'1',
        'users_id' =>'5',
        'need_itsupport'=>'0',
        'need_media'=>'0',
            ],
            [
                'id' => Str::uuid(),
                'title' => 'Evenement test2',
                'start' => '2022-07-30T12:00:00',
                'end' => '2022-07-30T17:00:00',

                'nb_guest'=>'10',
                'type_event'=>'type1',
                'rooms_id'=>'1',
                'users_id' =>'5',
                'need_itsupport'=>'0',
                'need_media'=>'0',
            ],
        ]);
    }
}
