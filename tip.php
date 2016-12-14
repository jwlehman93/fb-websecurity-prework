<!DOCTYPE HTML>
<html>

<head>
  <title>Tip Calculator</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="main-container">
    <?php
function validateForm($bill) {
    if(is_numeric($bill) && ($bill > 0)) {
        return true;
    }
    return false;
}
$bill = $_POST['bill'] ?? '';
$tip = $_POST['tip'] ?? '';
$checked = $tip;
$value = $bill;
$placeholder = 1;

$valid = validateForm($bill);
if($valid) {
    $billAmount= number_format($bill, 2);
    $tipAmount = number_format($tip / 100 * $bill, 2);
    $billTotal = $billAmount + $tipAmount;
}
include 'form.php';
if($valid){
    include 'results.php';
}
?>
  </div>
</body </html>