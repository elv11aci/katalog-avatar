<?php
class Genre{
private $connection;
private $table = &quot;tb_genre&quot;; // nama tabel genre dalam database saya
// public $id;
public $nama;
//membuat method __construct agar koneksi database langsung bisa dibuat Ketika class ini
//membuat object baru.
public function __construct($db){
$this-&gt;connection = $db;
}

public function read(){
try {

$query = &quot;SELECT * FROM &quot;.$this-&gt;table;
$stmt = $this-&gt;connection-&gt;prepare($query);
$stmt-&gt;execute();
return $stmt;
}
catch(\Exception $e){
echo $e-&gt;getMessage();
}
}

public function store(){
try{
$query = &quot;INSERT INTO &quot;.$this-&gt;table.&quot; (nama) VALUES (?)&quot;;
$stmt = $this-&gt;connection-&gt;prepare($query);
$this-&gt;nama = htmlspecialchars(strip_tags($this-&gt;nama));
$stmt-&gt;bind_param(&quot;s&quot;, $this-&gt;nama);
if ($stmt-&gt;execute())
return true;
return false;
}
catch (\Exception $e){
echo $e-&gt;getMessage();
return false;
}
}
}