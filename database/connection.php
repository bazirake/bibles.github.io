 <?php

$con=pg_connect("host=localhost user=postgres  dbname=bible  password=123456");
if (!$con) {
	echo "hello postgres";
}

?>