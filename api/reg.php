<?php

include_once "../base.php";

unset($_POST['pw2']);

$User->save($_POST);

