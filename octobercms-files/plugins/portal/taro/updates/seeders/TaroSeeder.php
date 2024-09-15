<?php namespace Portal\Taro\Updates\Seeders;

use Portal\Taro\enums\Statuses;
use Portal\Taro\Models\Card;
use Portal\Taro\Models\CardSet;
use Seeder;

/**
 * TaroSeeder
 */
class TaroSeeder extends Seeder
{
    use SeederTools;

    public function run()
    {
        $faker = $this->getFaker();

        foreach (range(0, 4) as $_) {
            CardSet::create([
                'title' => $faker->text(15),
                'description' => $faker->text(500),
                'status' => Statuses::ACTIVE->value
            ]);
        }

        /** @var array<CardSet> $cardSets */
        $cardSets = CardSet::all();

        foreach ($cardSets as $cardSet) {
            Card::create([
                'title' => $faker->text(15),
                'description' => $faker->text(200),
                'image_path' => $faker->imageUrl(),
                'status' => Statuses::ACTIVE->value,
                'set_id' => $cardSet->id
            ]);
        }
    }
}
