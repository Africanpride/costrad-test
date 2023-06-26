<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'dateOfBirth' => $this->faker->date(),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'address_1' => $this->faker->address(),
            'address_2' => $this->faker->optional()->secondaryAddress(),
            'city' => $this->faker->optional()->city(),
            'state' => $this->faker->optional()->state(),
            'zipcode' => $this->faker->optional()->postcode(),
            'country' => $this->faker->optional()->country(),
            'telephone' => $this->faker->phoneNumber(),
            'emergencyContactName' => $this->faker->name(),
            'emergencyContactTelephone' => $this->faker->phoneNumber(),
            'nationality' => $this->faker->randomElement(['Nigeria', 'Ghana', 'South Africa', 'United States', 'United Kingdom']),
            'insurance_id' => $this->faker->numberBetween(0,2),
            'insuranceNumber' => $this->faker->randomNumber(8),
            'insured' => $this->faker->boolean(false),
            'active' => $this->faker->boolean(false),
            'avatar' => $this->faker->imageUrl(640, 480),
        ];
    }

}
