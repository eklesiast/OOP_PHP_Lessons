<?php 

//Notifications

class RegistrationMgr{
	function register (Lesson  $lesson) {
		$notifier = Notifier::getNotifier();
		$notifier->inform('Новое занятие : стоимость - ({$lesson->cost()})');
	}
}

abstract class Notifier {

	static function getNotifier() {
		if(rand(1,2) === 1) {
			return new MailNotifier();
		}else{
			return new TextNotifier();
		}
	}

	abstract Function inform($message);
}

class MailNotifier extends Notifier {
	function inform ($message) {
		print "Уведомление по e-МAIL : {$message} ) \n";
	}
}

class Textnotifier extends Notifier {
	function inform ($message) {
		print "Текстовое уведомление : {$message}\n";
	}
}

$lesson1 = new Seminar