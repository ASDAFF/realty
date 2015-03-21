<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Bargain;

class BargainsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $notes = array(
            '',
            '',
            '',
            '',
            'Приедет с ребенком, желательно недалеко от центра города',
            'Нужна квартира недалеко от фитнесс центра',
            'Приедет с кошкой, договориться с хозяевами квартиры',
            'Неопределленный срок заселения',
            'Срочно нужна квартира',
            'Не вызывает доверия',
            'Нужна квартира в пределах 20 тыс. рублей'

        );

        Bargain::truncate();

        for ($i=0; $i < 20; $i++)
        {
            Bargain::create([
                'bargain_id' => '',
                'flat_id' => $faker->numberBetween($min = 1, $max = 100),
//              'owner_id' => $faker->numberBetween($min = 1, $max = 100),
                'client_id' => $faker->numberBetween($min = 1, $max = 1000),
                'manager_id' => $faker->numberBetween($min = 1, $max = 10),
                'coming_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 year'),
                'day_count' => $faker->numberBetween($min = 1, $max = 20),
                'status_bargain' => $faker->numberBetween($min = 1, $max = 8),
                'bank_account_num' => $faker->creditCardNumber,
                'note' => $notes[$faker->numberBetween($min = 0, $max = 10)],
            ]);
        }


    }

}