<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $ingredients =  [
            "Patate",
            "Pâte",
            "Tomate",
            "Poivron",
            "Avocat",
            "Mais",
            "Olive",
            "Oeufs",
            "Beacon",
            "Saucisse",
            "Chorizo",
            "Poulet",
            "Mozarella",
            "Parmesan",
            "Stracatella",
            "Feta",
            "Tapenade",
            "Crème fraiche",
            "Moutarde",
            "Sauce tomate",
            "Huile d'olive",
            "Vinaigre Balsamique",
        ];
        foreach ($ingredients as $ing) {
        $ingredient = new Ingredient();
        $ingredient->setName($ing);
        $ingredient->setQuantity(random_int(2, 100));
        $ingredient->setType('typeIngredient');
        $manager->persist($ingredient);
            
        }
        $manager->flush();
    }
}
