<?php
    $subject=$Que->subject($_GET['id']);
?>
<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
    <h3><?=$subject['text'];?></h3>
    <form action="./api/vote.php" method="post">
    <?php 
    foreach($subject['options'] as $opt){
    ?>
    <p>
        <input type="radio" name="opt" value="<?=$opt['id'];?>">
        <span><?=$opt['text'];?></span>
    </p>
    <?php
    }
    ?>

    <input type="submit" value="我要投票">
</form>
</fieldset>