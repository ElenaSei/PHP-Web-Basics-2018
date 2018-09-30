<?php
include "Person.php";
include "Company.php";
include "Car.php";
include "Child.php";
include "Parents.php";
include "Pokemon.php";

$people = [];
while (true){
    $input = explode(' ', readline());

    if ($input[0] == 'End'){
        break;
    }

    $name = $input[0];

    if (!isset($people[$name])){
        $person = new Person($name);
        $people[$name] = $person;
    }

    if ($input[1] == 'company'){
        $companyName = $input[2];
        $department = $input[3];
        $salary = $input[4];

        $company = new Company($companyName, $department, $salary);
        $people[$name]->setCompany($company);

    }elseif ($input[1] == 'pokemon'){
        $pokemonName = $input[2];
        $pokemonType = $input[3];

        $pokemon = new Pokemon($pokemonName, $pokemonType);
        $people[$name]->addPokemon($pokemon);

    }elseif ($input[1] == 'parents'){
        $parentName = $input[2];
        $parentBirthday = $input[3];

        $parent = new Parents($parentName, $parentBirthday);
        $people[$name]->addParent($parent);

    }elseif ($input[1] == 'children'){
        $childName = $input[2];
        $childBirthday = $input[3];

        $child = new Child($childName, $childBirthday);
        $people[$name]->addChild($child);

    }elseif ($input[1] == 'car'){
        $carModel = $input[2];
        $carSpeed = $input[3];

        $car = new Car($carModel, $carSpeed);
        $people[$name]->setCar($car);
    }
}

$name = readline();

echo $name . PHP_EOL;
echo 'Company:' . PHP_EOL;
if ($people[$name]->getCompany() !== null){
    echo $people[$name]->getCompany()->getCompanyName() . ' '. $people[$name]->getCompany()->getDepartment() . ' ' . $people[$name]->getCompany()->getSalary() . PHP_EOL;
};

echo 'Car:' . PHP_EOL;
if ($people[$name]->getCar() !== null){
    echo $people[$name]->getCar()->getCarModel() . ' ' . $people[$name]->getCar()->getCarSpeed() . PHP_EOL;
}

echo 'Pokemon:' . PHP_EOL;
if ($people[$name]->getPokemons() !== null){
    foreach ($people[$name]->getPokemons() as $pokemon){
        echo $pokemon->getPokemonName() . ' ' . $pokemon->getPokemonType() . PHP_EOL;
    }
}

echo 'Parents:' . PHP_EOL;
if ($people[$name]->getParents() !== null){
    foreach ($people[$name]->getParents() as $parent){
        echo $parent->getParentName() . ' ' . $parent->getParentBirthday() . PHP_EOL;
    }

}

echo 'Children:' . PHP_EOL;
if ($people[$name]->getChildren() !== null){
    foreach ($people[$name]->getChildren() as $child){
        echo $child->getChildName() . ' ' . $child->getChildBirthday() . PHP_EOL;
    }
}
