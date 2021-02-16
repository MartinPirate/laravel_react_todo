<?php

    use App\User;
    use Illuminate\Database\Seeder;

    class UserTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $count = 20;
            factory(User::class, $count)->create();
        }
    }
