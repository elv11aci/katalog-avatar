<?php
class Genre{
private $connection;
private $table = "tb_genre"; // nama tabel genre dalam database saya
// public $id;
public $nama;
//membuat method __construct agar koneksi database langsung bisa dibuat Ketika class ini
//membuat object baru.
public function __construct($db){
$this->connection = $db;
}

public function read(){
try {

$query = "SELECT * FROM".$this>table;
$stmt = $this->connection->prepare($query);
$stmt->execute();
return $stmt;
}
catch(\Exception $e){
echo $e->getMessage();
}
}

public function store(){
try{
$query = "INSERT INTO".$this->table."(nama) VALUES (?)";
$stmt = $this->connection->prepare($query);
$this->nama = htmlspecialchars(strip_tags($this->nama));
$stmt->bind_param("s",$this->nama);
if ($stmt->execute())
return true;
return false;
}
catch (\Exception $e){
echo $e->getMessage();
return false;
}
}
}