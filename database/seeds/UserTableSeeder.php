<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'brye.ebora@gmail.com',
            'name_id'   =>  1,
            'role_id'   =>  1,
            'status_id' =>  1,
            'password'  =>  '$2y$10$ZLicy/YZ25GAtVKwzYxrGeYd73uIJ.zJ6MBlJ64V/eRpKy01IHzvi',
        ]);

        User::create([
            'email' => 'mary.gregana@gmail.com',
            'name_id'   =>  2,
            'role_id'   =>  2,
            'status_id' =>  2,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);
        User::create([
            'email' => 'khevin.delvalle@gmail.com   ',
            'name_id'   =>  3,
            'role_id'   =>  3,
            'status_id' =>  2,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);

        User::create([
            'email' => 'nicko.bontigao@gmail.com',
            'name_id'   =>  4,
            'role_id'   =>  3,
            'status_id' =>  2,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);
        User::create([
            'email' => 'felix.bontigao@gmail.com',
            'name_id'   =>  5,
            'role_id'   =>  3,
            'status_id' =>  3,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);

        User::create([
            'email' => 'julius.lo@gmail.com',
            'name_id'   =>  6,
            'role_id'   =>  3,
            'status_id' =>  2,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);
        User::create([
            'email' => 'may.martin@gmail.com',
            'name_id'   =>  7,
            'role_id'   =>  3,
            'status_id' =>  2,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);

        User::create([
            'email' => 'hannie.villegas@gmail.com',
            'name_id'   =>  8,
            'role_id'   =>  3,
            'status_id' =>  2,
            'password'  =>  '$2y$10$jWavLHg0aZpNozhU7.PAS.khQ05Ez8AWxLYhz.E34bxDjLA7RJbI.',
        ]);
    }
}
