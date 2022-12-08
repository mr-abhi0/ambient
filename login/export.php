
<?php
session_start();
if (!$_SESSION['username']) {
    header("location:index.php");
    die();
} else {
    $conn = new mysqli('localhost', 'root', '');
    mysqli_select_db($conn, 'ambient');
    $sql = "SELECT `id`,`fullname`,`email` , `phone_number` , `company` , `product_cata`, `state`, `messages` ,`date` FROM `get_query`";
    $setRec = mysqli_query($conn, $sql);
    $columnHeader = '';
    $columnHeader = "Id" . "\t" . "fullname" . "\t" . "email" . "\t" . "phone_number" . "\t" . "company" . "\t" . "product_cata" . "\t" . "state" . "\t" . "messages" . "\t" . "date" . "\t";
    $setData = '';
    while ($rec = mysqli_fetch_row($setRec)) {
        $rowData = '';
        foreach ($rec as $value) {
            $value = '"' . $value . '"' . "\t";
            $rowData .= $value;
        }
        $setData .= trim($rowData) . "\n";
    }
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=data.csv");
    header("Pragma: no-cache");
    header("Expires: 0");
    echo ucwords($columnHeader) . "\n" . $setData . "\n";
}
