<?php 



/*
abstract class Lesson {
	protected $duration;
	const FIXED =1;
	const TIMED = 2;
	private $costtype;

	function __construct ($duration, $costtype=1){
		$this->duration = $duration;
		$this->costtype = $costtype;

	}


	function cost() {
		switch ($this->costtype) {
		CASE self::TIMED :
			return (5 * $this->duration);
			break;

		CASE self::FIXED :
			return 30;
			break;
		default :
			$this->costtype = self::FIXED;
			return 30;	
		}
	}


	function chargeType() {
		switch ($this->costtype) {
			CASE self::TIMED :
				return "hourly payment";
				break;
			CASE self::FIXED :
				return "Fixed rate";
				break;
			default:
				$this->costtype = self::FIXED;
				return "Fixed rate";
		}
		

	}

}

class Lecture extends Lesson {
	
}

class Seminar extends Lesson {
	
}


$lecture = new Lecture (5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType()})\n";

$seminar = new Seminar(3, Lesson::TIMED);
print "{$seminar->cost()} ({$seminar->chargeType()})\n";


*/

//Приведем упрощенную версию нового иласса L e s s o n ,

abstract class lesson {
	private $duration;
	private $costStrategy;


	function __construct ($duration, CostStrategy $strategy) {
		$this->duration = $duration;
		$this->costStrategy = $strategy;
	}

	function cost(){
		return $this->costStrategy->cost($this);
	}

	function chargeType() {
		return $this->costStrategy->chargeType();

	}

	function getDuration(){
		return $this->duration;
	}

}

abstract class CostStrategy {
	abstract function cost(Lesson $lesson);
	abstract function chargeType();
}

	class TimedCostStrategy extends CostStrategy {

		function cost(Lesson $lesson) {
			return ($lesson->getDuration() * 5);
		}

		function chargeType(){
			return 'Hourly payment';
		}
	}

	class FixedCostStrategy extends CostStrategy {
		function cost (Lesson $lesson) {
			return 30;
		}

		function chargeType(){
			return 'Fixed rate';
		}
	}

	class Lecture extends Lesson {

	}
	
	class Seminar extends Lesson {

	}


$lessons[] = new Seminar(4, new TimedCostStrategy() );
$lessons[] = new Lecture (4, new FixedCostStrategy() );

foreach ($lessons as $lesson) {
	print " Payment for lesson {$lesson->cost()}. ";
	print " type of Payment: {$lesson->chargeType()}" . "<br>";
}



//realizing Notifications

class RegistrationMgr{

	function register(Lesson $lesson){
		$notifier = Notifier::getNotifier();
		$notifier->inform("Новое занятие : стоимость - ({$lesson->cost()})");
	}
}

abstract class Notifier {

		static function getNotifier(){

			if(rand(1,2) === 1) {
				return new MailNotifier();
			}else{
				return new TextNotifier();
			}
		}
		abstract function inform($message);
	}



	class MailNotifier extends Notifier {
		function inform ($message) {
			print "Уведомление по e-МAIL : {$message}\n";
		}
	}


	class TextNotifier extends Notifier {
		function inform($message) {
			print "Текстовое уведомление : {$message}\n";
		}
	}


$lesson = new Seminar (4, new TimedCostStrategy() );
$lesson = new Lecture (4, new FixedCostStrategy() );
$mgr = new RegistrationMgr();
$mgr->register($lessons1);
$mgr->register($lessons2 );






