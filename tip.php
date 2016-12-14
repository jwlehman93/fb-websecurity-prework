<!DOCTYPE HTML>
<html>
  <head>
    <title>Tip Calculator</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
  <?php
    $bill = number_format($_POST['bill'], 2);
    $tipAmount = number_format($_POST['tip'] / 100 * $bill, 2);
    $billTotal = $bill + $tipAmount;
    ?>
    <div class="container">
      <form action="tip.php" method="post">
        <div class="row">
          <label>Bill subtotal: $</label>
          <input type="text" name="bill"placeholder="0.00">
        </div>
        <div class="row">
          <label>Tip Percentage:</label>
        </div>
        <div class="radio">
        <?php 
        for($i=0; $i<3;$i++) {
        $tip = $i * 5 + 10;
        ?>
          <label>
          <input type="radio" name="tip" value=<?php print $tip?> <?php $tip==10 ? print "checked" : ""?>>
            <?php echo $tip . "%" ?>
          </label>
          <?php } ?>
        </div>
        <button class="btn btn-default col-md-1 col-md-offset-1" type="submit">Submit</button>
      </form>
     </div>
    <div class="container">
        <?php
        echo "<h1>Bill: $".$bill."</h1>";
        echo "<h1>Tip: $".$tipAmount."</h1>";
        echo "<h1>Total: $".number_format($billTotal, 2)."</h1>";
        ?>
      </div>
  </body
</html>
