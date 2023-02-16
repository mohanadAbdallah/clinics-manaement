<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Clinic;
use Illuminate\Support\Facades\Hash;

class ClinicFactory extends Factory
{
    protected $model = Clinic::class;

    public function definition(): array
    {

        return [
            'name'=>$this->faker->name(),
            'username'=>$this->faker->userName(),
            'email'=>$this->faker->unique()->safeEmail(),
            'password'=>Hash::make('password'),
            'address'=>$this->faker->text,
            'city'=>$this->faker->city(),
            'phone'=>$this->faker->phoneNumber(),
            'logo'=>$this->faker->image,
            'images'=>$this->faker->image,
            'created_at'=>now(),
        ];
    }
}
