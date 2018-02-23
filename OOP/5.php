<?php 

//php-start OOP





/*
class Man {
	public $name;
	public $hands;
	public $eyes;
	public $head;
	public $legs;

	public function __construct($name,$hands,$head,$eyes,$legs){

		$this->hands = $hands;
		$this->eyes = $eyes;
		$this->head = $head;
		$this->legs = $legs;
		$this->name = $name;
	}



}



$man1 = new Man("Vasya","two hands","two eyes","one head",'two legs');
//$man2 = new Man("Igor");

echo "<pre>";
print_r($man1);
//print_r($man2);
echo "</pre>";

*/




/*


class Car {

	public $color;
	public $speed;
	public $fuel;
	public $brand;

	public function __construct($brand,$speed,$fuel,$color) {
		$this->color = $color;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->brand = $brand;
		
	}


	public function tripTime($distance) {
		$time = $distance / $this->speed;
		return $time;
	}



}



$car1 = new Car('Audi',120,12,"Darkgreen");
$car3 = new Car('Mersedes',130,13,"Black");



echo "<pre>";
	print_r($car1);
	print_r($car3);
echo "<pre/>";



echo " time is " . $car1->tripTime(1000) . "/hours" . "<br/>";

print_r($car1);*/

// constants in class
/*class Car{

	const WHEELS = 4;

	public function test() {
		echo Car::WHEELS;
		echo self::WHEELS;
	}


 }

class Bicycle {
	const WHEELS = 2;
}

echo Bicycle::WHEELS;
//echo Car::WHEELS;

$car1 = new Car;
$car1->test();


//static methods


class Car {
	public static $engine = 1;
	public static function whatlist() {
		echo "Car is Car";

	}
}


echo Car::$engine;
Car::whatist();

*/


//****** INHERITANCE   ԺԱՌԱՆԳԱԿԱՆՈՒԹՅՈՒՆ



/*
 class Vehicle {

 	public $color;
 	public $speed;
 	public $brand;
 	public $fuel;

 	function __construct($color,$speed,$brand,$fuel) {
 		$this->color = $color;
 		$this->speed = $speed;
 		$this->brand = $brand;
 		$this->fuel = $fuel;
 	}

 	public function tripTime($distance) {
 		$time = $distance / $this->speed;
 	}



 }

 class Car extends Vehicle {

 }

 class Bike extends Vehicle {

 	public $model = "Émonda SLR 8";
 	public $color = "RED";
 	const CALORIES_PER_HOUR = 500;

 	public function caloriesBurned($distance) {
 		$time = $this->tripTime($distance);
 		$calories = $time * self::CALORIES_PER_HOUR;
 		return $calories;

 	}

 	public function tripTime($distance) {
 		
 		// օգտագոծում ենք parent ը որպեսզի կարողանանք փոփոխել parent մեթոդի արժեքը , առանց նորից այն գրելու և հայտարերելու
 		return parent::tripTime($distance) * 1.2;
 	}

 }

 class Skate extends Vehicle {

 }


$car = new Car('black',240,'Aston Martin',12);

$skate = new Skate("black",30,"Daewon",0);

$bike = new Bike("darkgreen",70,"TREK",0);



echo "<pre>";
	print_r($car);
	print_r($skate);
	print_r( "bike time " . $bike->tripTime(5) . "<br/>");
	print_r($bike);
echo "</pre>";


*/

//******* Final Method and classes

/*class Vehicle {
	final public function test() {
		//....
	}
}

class Car extends Vehicle {
	public function test() {

	 //FATALL ERROR սխալ , դա նշանակում է որ այս մեթոդը պետք չէ փոփոխել , 
	}
}


class Audi extends Car {

}*/


// Encapsulation ԻՆԿԱՊՍՈՒԼՅԱՑԻԱ
/*
class Phone {
	public function getNumberByName($name) {

	}

	public function dialNumber() {

	}

	public function call() {
		$number = $this->getNumberByName($name);
		$this->dialNumber($number);
	}
}

$phone = new phone;
$phone->call("Vasya");


// {PUBLIC,PROTECTED,PRIVATE}


class Base {
	public $a = 'a public';
	protected $b = "protected";
	private $c = "private";

	function printProperties() {
		echo "<br>" . $this->a;
		echo "<br>" . $this->b;
		echo "<br>" . $this->c;
	}

}


$obj = new Base();
*/

//ՊՈԼԻՄՕՐՖԻԶՄ POLIMORFISME

class Publication {

}

class NewsPublication extends Publication {

}

class PhotoReportPublication extends Publication {

}

class ArticlePublication extends Publication {

}







