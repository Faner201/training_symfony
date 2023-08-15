<?php

namespace App\Tests\Functional\Users\Infrastructure\Repository;

use App\Users\Domain\Factory\UserFactory;
use App\Users\Infrastructure\Repository\UserRepository;
use Faker\Factory;
use Faker\Generator;

class UserRepositoryTest extends RegisterDB
{
    private Generator $faker;
    protected function createRepository(): string
    {
        return  UserRepository::class;
    }

    public function test_user_added_successfully(): void
    {
        $this->faker = Factory::create();
        $email = $this->faker->email();
        $password = $this->faker->password();
        $user = (new UserFactory())->create($email, $password);

        // act
        $this->repository->add($user);

        // assert
        $existingUser = $this->repository->findByUlid($user->getId());
        $this->assertEquals($user->getId(), $existingUser->getId());
    }
}
