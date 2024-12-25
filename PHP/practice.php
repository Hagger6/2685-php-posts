<?php

function dd($pat, $txt)
{
    $match = preg_match($pat, $txt);

    echo "<p><strong>($txt)</strong> " . ($match ? ' Matches ' : ' Does Not Match ') . "<strong>($pat)</strong></p>";

}

// code to accept only 4 letters
$pattern = '/^([a-z]{4})$/i';

$code = 'sFff';
dd($pattern, $code);


$code = 'sF0f';
dd($pattern, $code);


// code to accept only 2 letters, then 2 numbers
$pattern = '/^([a-z]{2})([\d]{2})$/i';

$code = 'Se34';
dd($pattern, $code);

$code = 'fd22x';
dd($pattern, $code);