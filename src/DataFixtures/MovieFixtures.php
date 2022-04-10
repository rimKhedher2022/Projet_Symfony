<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Movie;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
     
        $movie = new Movie();
        $movie->setTitle('the dark night');
        $movie->setReleaseYear(2008);
        $movie->setDescription('this is a description ');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2021/06/18/11/22/batman-6345897_960_720.jpg');


        $movie->addActor($this->getReference('actor_1')); 
        $movie->addActor($this->getReference('actor_2')); 

        $manager->persist($movie);


        $movie2 = new Movie();
        $movie2->setTitle('avengers');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('this is a description ');
        $movie2->setImagePath('https://pixabay.com/illustrations/captain-america-avengers-marvel-5692937/');

        $movie2->addActor($this->getReference('actor_3')); 
        $movie2->addActor($this->getReference('actor_4'));
         
        $manager->persist($movie2);

        $manager->flush();




    }
}
