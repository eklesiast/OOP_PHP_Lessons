<?php 
// PHP Objects Zanstra BOOK


class ShopProdut {

	public $title = "Standart product";
	public $producerMainName = " author's Surname ";
	public $producerFirstName =  " author's name";
	public $price = 0;

	function getProducer() {
		return "{$this->producerFirstName}"
				."{$this->producerMainName}";		
	}

	function __construct($title,$producerMainName,$producerFirstName,$price) {
		$this->title = $title;
		$this->producerMainName = $producerMainName;
		$this->producerFirstName = $producerFirstName;
		$this->price = $price;





	}


}

$product = new ShopProdut("First","Pupkin","Vasya",400);


echo "<pre>";
print_r( $product);
echo "<pre/>";


class AddressManager {
	private $addresses = array(" 09.131.159.106");
		function outputAddresses($resolve) {
			foreach($this->addresses as $address) {
				print $address;
				if($resolve) {
					print"(" . gethostbyaddr($address) . ")";
				}
				print "\n";
				
			}
		}
}