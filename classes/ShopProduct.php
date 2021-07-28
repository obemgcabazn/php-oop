<?php

class ShopProduct {
	private $title;
	private $price;
	private $producer;

	private $id = 0;

	/**
	 * @param int $id
	 */
	public function setId( int $id ): void {
		$this->id = $id;
	}

	public static function getInstance ( int $id, \PDO $pdo ) : ?ShopProduct
	{
		$stmt = $pdo->prepare( "SELECT * FROM products WHERE id=?" );
		$result = $stmt->execute( [$id] );
		$row = $stmt->fetch();

		if( empty( $row ) )
			return NULL;

		if( $row['type'] == "book" ) {
			$product = new BookProduct(
				$row['title'],
				$row['producer'],
				(float) $row['price'],
				(int) $row['numpages']
			);
		} elseif ( $row['type'] == 'cd' ) {
			$product = new CDProduct(
				$row['title'],
				$row['producer'],
				(float) $row['price'],
				(int) $row['playlength']
			);
		} else {
			$product = new ShopProduct(
				$row['title'],
				$row['producer'],
				(float) $row['price']
			);
		}
		$product->setId( (int) $row['id'] );
		$product->setDiscount( (int) $row['discount'] );
		return $product;
	}



	public function __construct( $title, $price, $producer ) {
		$this->title = $title;
		$this->price = $price;
		$this->producer = $producer;
	}

	/**
	 *
	 */
	public function __toString() {
		return "$this->title от $this->producer по цене $this->price рублей";
	}

	public function getTitle(){
		return $this->title;
	}
}

class BookProduct extends ShopProduct {
	private $numPages;
	private $str;

	public function __construct( $title, $price, $author, $numPages ) {
		parent::__construct( $title, $price, $author );
		$this->numPages = $numPages;
	}
	public function __toString() {
		$str = "Книга ";
		$str .=  parent::__toString();
		return $str;
	}

	public function getNumberOfPages() {
		return $this->numPages;
	}
}

class CDProduct extends ShopProduct {
	private $playLength;
	private $str;

	public function __construct( $title, $price, $artist, $playLength ) {
		parent::__construct( $title, $price, $artist );
		$this->playLength = $playLength;
	}

	public function __toString() {
		$str = 'Альбом ';
		$str .= parent::__toString();
		return $str;
	}

	public function getPlayLength(){
		return $this->playLength;
	}
}