<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FormatFilmSeeder::class);
        $this->call(CinemaSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(TicketPriceSeeder::class);
        $this->call(SeatSeeder::class);

    }
}
