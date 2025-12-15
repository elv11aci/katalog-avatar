<?php
class GenreController {
private $db;
private $genre; // deklarasi variable genre
public function __construct(){
$dbase = new Database();
$this-&gt;db = $dbase-&gt;getConnection();
$this-&gt;genre = new Genre($this-&gt;db); // membuat object dari class model Genre

}
public function create() {
include &quot;page/input_genre.php&quot;;
}
public function store() {
$this-&gt;genre-&gt;nama = $_POST[&#39;nama&#39;];
$this-&gt;genre-&gt;create(); /* memanggil method create dari class Genre dalam

model/Genre */

exit;
}
}