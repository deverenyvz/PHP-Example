<?php

class Database {
	private static $dbInstance;

	private $db;

	public static function getInsatnce(){
		if (is_null(Database::$dbInstance)) {
			self::$dnInstance = new Database();
		}
		return self::$dbInstance;
	}

	private function __construct(){
		try{
			$this->db = new PDO(
				'mysql:host=localhost;dbname=carjack;charset=utf8',
				'carjack_admin',
				'c@tg0ty4Tongue?');
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
		} catch(PDOException  $pdo){
			echo "Veritabanı bulunamadı! Devam etmek için lütfen veritabanı sunucusunu çalıştırın!";
		}
	}
	public function getDb(){
		return $this->db;
	}
}