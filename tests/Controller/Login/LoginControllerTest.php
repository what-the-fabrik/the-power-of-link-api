<?php 

namespace App\Tests\Controller\Login;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginControllerTest extends WebTestCase
{
    public function testVisitingWhileLoggedIn()
    {
        $EMAIL_USER = "test@test.com";
        $METHOD = "GET";
        $URL = "login";
        $client = static::createClient();

        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneByEmail($EMAIL_USER);

        $client->loginUser($testUser);

        $client->request($METHOD, $URL);
        $this->assertResponseIsSuccessful();
    }
}