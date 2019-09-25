<?php

use App\Schedule;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedules = [
            [
                'day_number' => 1,
                'start_time' => '09:30:00',
                'title' => 'Registration',
                'subtitle' => 'Fugit voluptas iusto maiores temporibus autem numquam magnam.',
                'speaker_id' => null,
            ],
            [
                'day_number' => 1,
                'start_time' => '10:00:00',
                'title' => 'Keynote',
                'subtitle' => 'Facere provident incidunt quos voluptas.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 1,
                'start_time' => '11:00:00',
                'title' => 'Et voluptatem iusto dicta nobis.',
                'subtitle' => 'Maiores dignissimos neque qui cum accusantium ut sit sint inventore.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 1,
                'start_time' => '12:00:00',
                'title' => 'Explicabo et rerum quis et ut ea.',
                'subtitle' => 'Veniam accusantium laborum nihil eos eaque accusantium aspernatur.',
                'speaker_id' => 3,
            ],
            [
                'day_number' => 1,
                'start_time' => '14:00:00',
                'title' => 'Qui non qui vel amet culpa sequi.',
                'subtitle' => 'Nam ex distinctio voluptatem doloremque suscipit iusto.',
                'speaker_id' => 4,
            ],
            [
                'day_number' => 1,
                'start_time' => '15:00:00',
                'title' => 'Quos ratione neque expedita asperiores.',
                'subtitle' => 'Eligendi quo eveniet est nobis et ad temporibus odio quo.',
                'speaker_id' => 5,
            ],
            [
                'day_number' => 1,
                'start_time' => '16:00:00',
                'title' => 'Quo qui praesentium nesciunt',
                'subtitle' => 'Voluptatem et alias dolorum est aut sit enim neque veritatis.',
                'speaker_id' => 6,
            ],
            [
                'day_number' => 2,
                'start_time' => '10:00:00',
                'title' => 'Libero corrupti explicabo itaque.',
                'subtitle' => 'Facere provident incidunt quos voluptas.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 2,
                'start_time' => '11:00:00',
                'title' => 'Et voluptatem iusto dicta nobis.',
                'subtitle' => 'Maiores dignissimos neque qui cum accusantium ut sit sint inventore.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 2,
                'start_time' => '12:00:00',
                'title' => 'Explicabo et rerum quis et ut ea.',
                'subtitle' => 'Veniam accusantium laborum nihil eos eaque accusantium aspernatur.',
                'speaker_id' => 3,
            ],
            [
                'day_number' => 2,
                'start_time' => '14:00:00',
                'title' => 'Qui non qui vel amet culpa sequi.',
                'subtitle' => 'Nam ex distinctio voluptatem doloremque suscipit iusto.',
                'speaker_id' => 4,
            ],
            [
                'day_number' => 2,
                'start_time' => '15:00:00',
                'title' => 'Quos ratione neque expedita asperiores.',
                'subtitle' => 'Eligendi quo eveniet est nobis et ad temporibus odio quo.',
                'speaker_id' => 5,
            ],
            [
                'day_number' => 2,
                'start_time' => '16:00:00',
                'title' => 'Quo qui praesentium nesciunt',
                'subtitle' => 'Voluptatem et alias dolorum est aut sit enim neque veritatis.',
                'speaker_id' => 6,
            ],
            [
                'day_number' => 3,
                'start_time' => '10:00:00',
                'title' => 'Et voluptatem iusto dicta nobis.',
                'subtitle' => 'Maiores dignissimos neque qui cum accusantium ut sit sint inventore.',
                'speaker_id' => 2,
            ],
            [
                'day_number' => 3,
                'start_time' => '11:00:00',
                'title' => 'Explicabo et rerum quis et ut ea.',
                'subtitle' => 'Veniam accusantium laborum nihil eos eaque accusantium aspernatur.',
                'speaker_id' => 3,
            ],
            [
                'day_number' => 3,
                'start_time' => '12:00:00',
                'title' => 'Libero corrupti explicabo itaque.',
                'subtitle' => 'Facere provident incidunt quos voluptas.',
                'speaker_id' => 1,
            ],
            [
                'day_number' => 3,
                'start_time' => '14:00:00',
                'title' => 'Qui non qui vel amet culpa sequi.',
                'subtitle' => 'Nam ex distinctio voluptatem doloremque suscipit iusto.',
                'speaker_id' => 4,
            ],
            [
                'day_number' => 3,
                'start_time' => '15:00:00',
                'title' => 'Quos ratione neque expedita asperiores.',
                'subtitle' => 'Eligendi quo eveniet est nobis et ad temporibus odio quo.',
                'speaker_id' => 5,
            ],
            [
                'day_number' => 3,
                'start_time' => '16:00:00',
                'title' => 'Quo qui praesentium nesciunt',
                'subtitle' => 'Voluptatem et alias dolorum est aut sit enim neque veritatis.',
                'speaker_id' => 6,
            ],
        ];

        foreach($schedules as $schedule)
        {
            Schedule::create($schedule);
        }
    }
}
