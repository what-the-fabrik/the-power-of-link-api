<?php 

namespace App\Tests\Controller\Login;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testVisitingWhileLoggedIn()
    {
        $client = static::createClient();

        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail('test@test.com');

        $client->loginUser($testUser);

        $client->request('GET', 'login');
        $this->assertResponseIsSuccessful();
    }
}