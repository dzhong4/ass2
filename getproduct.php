<?php
$query = "SELECT * FROM product ORDER BY description DESC";
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol id = 'product'>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["prodID"]." | ".$row["description"]." | ".$row["cost"]."</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>


