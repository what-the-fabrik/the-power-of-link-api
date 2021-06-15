<?php 
namespace App\Tests\Controller\Login;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
public function testIndex(): void
{
$client = static::createClient();
$client->request('GET', '/register');

$client->submitForm('Register', [
'registration_form[email]' => 'test@test.com',
'registration_form[plainPassword]' => '12345678',
'registration_form[agreeTerms]' => true
]);

$this->assertResponseIsSuccessful();

}
}