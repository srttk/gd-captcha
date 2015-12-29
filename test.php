<?php
require_once('vendor/autoload.php');

$c = new Saratonite\Tools\Captcha();
$c->setText("hello");
$c->make();