<?php 

class Publication {
	public $id;
	public $title;
	public $date;
	public $short_content;
	public $content;
	public $preview;
	public $author_name;
	public $type;

	function __construct($row) {

		$this->id = $row['id'];
		$this->title = $row['title'];
		$this->date = $row['date'];
		$this->short_content = $row['short_content'];
		$this->content = $row['content'];
		$this->preview = $row['preview'];
		$this->author_name = $row['author_name'];
		$this->type = $row['type'];

	}
}

class NewsPublication extends Publication {

	public function printItem() {
		echo "<br/> <div class='news-style'><h1>" . $this->title . "</h1>"; 
		echo "<br/>"  . "<img src='images/$this->preview'>" ;
		echo "<br/> authors name " . $this->author_name;
		echo "<br/>Date:" . $this->date;
		echo "<div/>";

	}

}

class ArticlePublication extends Publication {

	public function printItem() {
		echo "<br/><div class='news-style'> <h1> ".  $this->title . "</h1>";
		echo "<br/>"  . "<img src='images/$this->preview'>" ;
		echo "<br/> <p>" . $this->content . "</p>";
		echo "<br/>Date:" . $this->date;
		echo "<div/>";

	}
}

class PhotoReportPublication extends Publication{
	public function printitem() {
		echo "<br/> <div class='news-style'><h1>" .$this->title . "</h1>";
		echo "<br/>"  . "<img src='images/$this->preview'>" ;
		echo "<br/> Authors name:" . $this->author_name;
		echo "<br/>Date:" . $this->date;
		echo "<div/>";	
	}

}

