<?php // RAY_utf8_errors.php
error_reporting(E_ALL);

// SEE http://www.experts-exchange.com/Web_Development/Web_Languages-Standards/PHP/Q_28354239.html
// REF http://php.net/manual/en/function.utf8-encode.php
// REF http://php.net/manual/en/function.ord.php
// REF http://php.net/manual/en/function.decbin.php
// REF http://php.net/manual/en/function.json-last-error.php
// REF http://www.json.org/
// REF http://www.asciitable.com/
// REF http://en.wikipedia.org/wiki/UTF-8

// TRY THE SCRIPT BOTH WITH AND WITHOUT THIS STATEMENT
echo '<meta charset="utf8" />';        // GARBLES NON-UTF-8

// PREFORMAT FOR EASY VISUALIZATION
echo '<pre>';

// READ THE JSON TEST DATA
$url = 'json.txt';
$jso = file_get_contents($url);

// IF THE JSON IS VALID
$obj = json_decode($jso);
if ($obj) die("THE JSON AT $url IS VALID");

// IF THE JSON IS NOT VALID
switch (json_last_error())
{
    case JSON_ERROR_NONE:
        $err = 'No errors';
        break;
    case JSON_ERROR_DEPTH:
        $err = 'Maximum stack depth exceeded';
        break;
    case JSON_ERROR_STATE_MISMATCH:
        $err = 'Underflow or the modes mismatch';
        break;
    case JSON_ERROR_CTRL_CHAR:
        $err = 'Unexpected control character found';
        break;
    case JSON_ERROR_SYNTAX:
        $err = 'Syntax error, malformed JSON';
        break;
    case JSON_ERROR_UTF8:
        $err = 'Malformed UTF-8 characters, possibly incorrectly encoded';
        break;
    default:
        $err = 'Unknown error';
        break;
}
echo $err . PHP_EOL;

// LOOK AT THE JSON STRING BYTE-BY-BYTE (NOT THE SAME AS CHARACTER-BY-CHARACTER)
$arr = str_split($jso);
$sig = array();
ob_start();
foreach ($arr as $ptr => $chr)
{
    // GET THE NUMERIC VALUE OF THE BYTE
    $ord = ord($chr);
    $hex = strtoupper(dechex($ord));
    $err = FALSE;

    // FLAG THIS CHARACTER IF THE BYTE-CODE IS GT 127
    if ($ord > 127)
    {
        $bin = decbin($ord);
        echo PHP_EOL . '<a id="' . $ptr . '">' . "<b>BYTE: $ptr</a>, CHR: $chr, ORD: $ord, HEX: $hex, BIN: $bin</b>";

        // GET POINTERS TO THE NEXT CHARACTERS
        $pp1 = $ptr + 1;
        $pp2 = $ptr + 2;
        $pp3 = $ptr + 3;

        // IF A FOUR-BYTE UTF-8 CHARACTER, NEXT 3 BYTES MUST START WITH '10'
        $sub = substr($bin, 0, 5);
        if ($sub == '11110')
        {
            $chs = array();
            $chs[$pp1] = $arr[$pp1];
            $chs[$pp2] = $arr[$pp2];
            $chs[$pp3] = $arr[$pp3];
            foreach ($chs as $ppp => $nxt)
            {
                $cod = decbin(ord($nxt));
                $cod = str_pad($cod, 8, '0', STR_PAD_LEFT);
                $utf = substr($cod,0,2);
                if ($utf !== '10')
                {
                    echo ", ERROR IN BYTE $ppp: $cod";
                    $err = TRUE;
                }
            }
        }

        // IF A THREE-BYTE UTF-8 CHARACTER, NEXT 2 BYTES MUST START WITH '10'
        $sub = substr($bin, 0, 4);
        if ($sub == '1110')
        {
            $chs = array();
            $chs[$pp1] = $arr[$pp1];
            $chs[$pp2] = $arr[$pp2];
            foreach ($chs as $ppp => $nxt)
            {
                $cod = decbin(ord($nxt));
                $cod = str_pad($cod, 8, '0', STR_PAD_LEFT);
                $utf = substr($cod,0,2);
                if ($utf !== '10')
                {
                    echo ", ERROR IN BYTE $ppp: $cod";
                    $err = TRUE;
                }
            }
        }

        // IF A TWO BYTE UTF-8 CHARACTER, NEXT 1 BYTE MUST START WITH '10'
        $sub = substr($bin, 0, 3);
        if ($sub == '110')
        {
            $chs = array();
            $chs[$pp1] = $arr[$pp1];
            foreach ($chs as $ppp => $nxt)
            {
                $cod = decbin(ord($nxt));
                $cod = str_pad($cod, 8, '0', STR_PAD_LEFT);
                $utf = substr($cod,0,2);
                if ($utf !== '10')
                {
                    echo ", ERROR IN BYTE $ppp: $cod";
                    $err = TRUE;
                }
            }
        }

        // SAVE THE ERROR CHARACTER AND ITS APPROXIMATE LOCATION
        if ($err) $sig[$ptr] = $chr;
    }

    // IF THE BYTE-CODE IS LE 127
    else
    {
        echo PHP_EOL . "BYTE: $ptr, CHR: $chr, ORD: $ord, HEX: $hex";
    }
}
$out = ob_get_clean();

// IF THERE WERE ANY CHARACTERS FLAGGED
if (!empty($sig))
{
    echo PHP_EOL . '<b>POSSIBLE UTF-8 ERRORS IN $url</b>';
    foreach ($sig as $ptr => $chr)
    {
        $ord = ord($chr);
        echo PHP_EOL . '<a href="#' . $ptr . '">' . "BYTE: $ptr</a>, CHR: $chr, ORD: $ord";
    }
    echo PHP_EOL;
}

echo PHP_EOL . '<b>ENTIRE STRING IN SINGLE BYTES</b>';
echo $out;