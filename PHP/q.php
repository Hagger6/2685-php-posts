<?php
function dd($k, $v)
{
  $v = is_string($v) ? $v : ($v ? 'true' : 'false');

  $v = htmlspecialchars($v);
  $k = htmlspecialchars($k);

  echo "<p>$k ➜ <small>$v</small></p>";
}
function title($title)
{
  echo "<h5>$title</h5>";
}

function note($note)
{
  echo "<h6>$note</h6>";
}

$pattern = "/^([a-z0-9._-])+@[a-z0-9._-]+\.([a-z0-9]{2,3}$)/";

$txt_1 = 'maged.yaseen@gmail.com';
$txt_2 = 'maged_yaseen@gmail.com';
$txt_3 = 'maged-yaseen@gmail.com';
$txt_4 = 'maged.yaseen@gmail.com';
$txt_5 = 'maged yaseen@gmail.com';
$txt_6 = 'maged.yaseen@gmail.';
$txt_7 = 'maged.yaseen@gmail.c';
$txt_8 = 'maged.yaseen@gmail.com2';
$txt_9 = 'maged.yaseen@gmailcom';
$txt_10 = 'maged.yaseen@.com';


$res_1 = preg_match($pattern, $txt_1);

$res_2 = preg_match($pattern, $txt_2);

$res_3 = preg_match($pattern, $txt_3);

$res_4 = preg_match($pattern, $txt_4);

$res_5 = preg_match($pattern, $txt_5);

$res_6 = preg_match($pattern, $txt_6);

$res_7 = preg_match($pattern, $txt_7);

$res_8 = preg_match($pattern, $txt_8);

$res_9 = preg_match($pattern, $txt_9);

$res_10 = preg_match($pattern, $txt_10);


title($pattern);

note("Email Validator");

dd($txt_1, $res_1);

dd($txt_2, $res_2);

dd($txt_3, $res_3);

dd($txt_4, $res_4);

dd($txt_5, $res_5);

dd($txt_6, $res_6);

dd($txt_7, $res_7);

dd($txt_8, $res_8);

dd($txt_9, $res_9);

dd($txt_10, $res_10);