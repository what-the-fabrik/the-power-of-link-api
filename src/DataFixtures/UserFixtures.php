<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder=$passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        for($i=0; $i<10 ; $i++){
            $user=new User();
            $email='dwe64_test_'.$i.'@gmail.com';
            $user->setEmail($email);
            if($i%2){
                $role=['ROLE_ADMIN'];
            }else{
                $role=['ROLE_USER'];
            }            
            $user->setRoles($role);
            $password='fabrik_'.$i;
            $user->setPassword($this->passwordEncoder->encodePassword($user,$password));
            
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
