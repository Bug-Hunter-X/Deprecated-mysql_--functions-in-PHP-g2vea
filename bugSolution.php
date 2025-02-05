This updated code uses the MySQLi extension, a more secure and modern alternative to the deprecated `mysql_*` functions.

```php
<?php
$conn = new mysqli("localhost", "username", "password", "mydatabase");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);

if (!$result) {
die("Query failed: " . $conn->error);
}

while ($row = $result->fetch_assoc()) {
  // Process each row
}

$conn->close();
?>
```

This solution improves the code's security and ensures compatibility with newer PHP versions.