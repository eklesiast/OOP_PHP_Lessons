<?php 

//PHP PATTERNS


//employee
/*
abstract class Employee {
	protected $name;
	private static $types = array('Minion', 'CluedUp','WellConected');
	static function recruit($name) {
		$num = rand(1, count(self::$types)) -1;
		$class = self::$types[$num];
		return new $class($name);
	}

	function __construct ($name) {
		$this->name = $name;
	}

	abstract function fire();
}

class WellConected extends Employee {
	function fire() {
		print "{$this->name} : позвони папику" . "<br>";
	}
}


class Minion extends Employee {
	function fire() {
		print "{$this->name} : убери со стола" . "<br/>";
	}
}

class NastyBoss {
	private $employees = array();


	function addEmployee (Employee $employee) {
		$this->employees[] = $employee;
	}

	function projectfaile() {
		if(count ($this->employees) > 0) {
			$emp = array_pop ($this->employees);
			$emp->fire();
		}
	}
}

class CluedUp extends Employee {
	function fire(){
		print "{$this->name} : вызови адвоката " . "<br>";
	}
}

$boss = new NastyBoss();
$boss->addEmployee(Employee::recruit('Vasya'));
$boss->addEmployee(Employee::recruit('Petya'));
$boss->addEmployee(Employee::recruit('Maria'));
$boss->projectfaile();
$boss->projectfaile();
$boss->projectfaile();

*/

// Шаблон Singleton
/*
class Preferences {

	private $props = array();
	private static $instance;

	private function __construct() { }

	public static function getInstance() {
		if(empty(self::$instance)) {
			self::$instance = new Preferences();
		}
		return self::$instance;
	}

	public function setProperty ($key, $val) {
		$this->props[$key] = $val;	
	}

	public function getProperty($key) {
		return $this->props[$key];
	}
}


$pref = Preferences::getInstance();
$pref->setProperty('name','Vasya','petya');

unset($pref);

$pref2 = Preferences::getInstance();

print $pref2->getProperty("name") . "<br\>";

//Шаблон Factory Method
*/

// Шаблон Factory Method

abstract class AppEncoder {
	abstract function encode();
} 


class BloggsApptEncoder extends AppEncoder {
	function encode() {
		return "Данные о встрече закодированы в формате BloggsCal\n";
	}
}

class MegaApptEncoder extends AppEncoder {
	function encode() {
		return new BloggsApptEncoder();
	} 
}

class CommsManager {
	const BLOGGS =1;
	const MEGA =2;
	private $mode =1;

	function __construct($mode) {
		$this->mode = $mode;
	}

	function getHeaderText() {
		switch ($this->mode) {
			case (self::MEGA) :
				return "MegaCal header\n";
			default:
				return "Blogggscal header";
		}
	}


	function getAppEncoder() {
		switch ($this->mode) {
			case (self::MEGA) :
				return new MegaApptEncoder();
			default:
				return new BloggsAppEncoder();	
		}
	}

	function getAppEncoder() {
		switch ($this->mode) {
			case(self::MEGA) :
				return new MegaAppEncoder();
			default:
				return new BloggsAppEncoder();
		}
	}
}


$comms = new CommsManager(CommsManager::MEGA);
$apptEncoder = $comms->getAppEncoder();
print $appEncoder->encode();
