<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public static function getRandomDateOrNull()
    {
        // Generate a random number between 0 and 1
        $randNum = mt_rand(0, 1);

        // Return now() or null based on the random number
        return $randNum ? now() : null;
    }
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => self::getRandomDateOrNull(),
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'ban' => random_int(0, 1),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             'email_verified_at' => self::getRandomDateOrNull()
    //         ];
    //     });
    // }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    // public function withPersonalTeam()
    // {
    //     if (! Features::hasTeamFeatures()) {
    //         return $this->state([]);
    //     }

    //     return $this->has(
    //         Team::factory()
    //             ->state(function (array $attributes, User $user) {
    //                 return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
    //             }),
    //         'ownedTeams'
    //     );
    // }
}
