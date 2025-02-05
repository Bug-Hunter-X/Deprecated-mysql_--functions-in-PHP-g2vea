This code snippet demonstrates a common error in PHP related to the usage of the `mysql_*` functions.  These functions are deprecated and no longer supported in newer versions of PHP. Using them can lead to security vulnerabilities and compatibility issues.

```php
<?php
$conn = mysql_connect("localhost", "username", "password");
if (!$conn) {
die("Connection failed: " . mysql_error());
}

mysql_select_db("mydatabase", $conn);

$sql = "SELECT * FROM mytable";
$result = mysql_query($sql, $conn);

if (!$result) {
die("Query failed: " . mysql_error());
}

while ($row = mysql_fetch_assoc($result)) {
  // Process each row
}

mysql_close($conn);
?>
```