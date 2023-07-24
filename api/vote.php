<?php include_once "../base.php";
$opt=$Que->find($_POST['opt']);
$opt['vote']++;
$Que->save($opt);

$subject=$Que->find($opt['subject_id']);
$subject['vote']++;
$Que->save($subject);

to("../index.php?do=result&id={$subject['id']}");