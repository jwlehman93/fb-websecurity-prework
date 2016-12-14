<form action="tip.php" method="post">
  <h1 class="title">Tip Calculator</h1>
  <div class="bill">
    <label class="<?php if(!$valid) {echo 'invalid';}?>">Bill subtotal: $</label>
    <input type="text" name="bill" placeholder=<?php echo $placeholder; echo ' value="'.$value. '"';?>>
  </div>
  <div class="tip">
    <label>Tip Percentage:</label>
    <div class="percentages">
      <?php
for($i=0; $i<3;$i++) {
    $curTip = $i * 5 + 10;
    ?>
        <p>
          <input type="radio" name="tip" value=<?php echo $curTip?>
          <?php if($curTip==$checked) {echo "checked";}?>>
            <?php echo $curTip . "%" ?>
        </p>
        <?php } ?>
    </div>
  </div>
  <button type="submit">Submit</button>
</form>