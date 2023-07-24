<?php
    $subject=$Que->subject($_GET['id']);
?>
<fieldset>
    <legend>目前位置：首頁 > 問卷調查 > <?=$subject['text'];?></legend>
    <h3><?=$subject['text'];?></h3>
    <?php 
    foreach($subject['options'] as $idx => $opt){
        $total=($subject['vote']==0)?1:$subject['vote'];
        $rate=($opt['vote']/$total);
    ?>
    <p>
        <div style="display:flex;align-items:center">
            <div style="width:40%"><?=($idx+1).". ".$opt['text'];?></div>
            <div style="width:<?=(40*$rate);?>%;background:#aaa;height:32px;"></div>
            <div style="width:20%">
                <?=$opt['vote'];?>票(<?=round($rate*100);?>%)
            </div>
        </div>
    </p>
    <?php
    }
    ?>

    <div class="ct"><button onclick="location.href='?do=que'">返回</button></div>
</fieldset>