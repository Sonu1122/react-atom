$hostname = "localhost";
$username = "root";
$password = "";

try {
  $db = new PDO("mysql:host=$hostname;dbname=db_world", $username, $password);
  echo "Connected to database";
}
catch(PDOException $e) {
  echo $e->getMessage();
}
