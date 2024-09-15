<?php

namespace Portal\Taro\Updates\Seeders;

use Faker\Factory;

trait SeederTools
{
    private $faker;

    public function getFaker($locale = 'en_US')
    {
        if (empty($this->faker)) {
            $this->faker = Factory::create($locale);
        }


        return $this->faker;
    }
}
