<?php
include('dbcon.php');
?>
<?php
$sql = "SELECT * FROM Users";
$result = $connection->query($sql);

$totalRows = $result->num_rows;
$sumColumn1 = 0;
$sumColumn2 = 0;

while ($row = $result->fetch_assoc()) {
    $sumColumn1 += $row['UserID'];
    $sumColumn2 += $row['UserRole'];
}

$averageColumn1 = $sumColumn1 / $totalRows;
$averageColumn2 = $sumColumn2 / $totalRows;

echo "Total Rows: $totalRows<br>";
echo "Average Column1: $averageColumn1<br>";
echo "Average Column2: $averageColumn2<br>";

// Close the connection
$connection->close();
