<?php
$m1 = ['nim'=>'a100', 'name'=>'Lee Haechan', 'score'=>100];
$m2 = ['nim'=>'b101', 'name'=>'Park Jisung', 'score'=>95];
$m3 = ['nim'=>'c302', 'name'=>'Huang Renjun', 'score'=>80];
$m4 = ['nim'=>'b222', 'name'=>'Lee Mark', 'score'=>67];
$m5 = ['nim'=>'c123', 'name'=>'Zhong Chenle', 'score'=>45];
$m6 = ['nim'=>'a145', 'name'=>'Lee Jeno', 'score'=>98];
$m7 = ['nim'=>'b354', 'name'=>'Na Jaemin', 'score'=>86];
$m8 = ['nim'=>'c167', 'name'=>'Jung Jaehyun', 'score'=>93];
$m9 = ['nim'=>'a465', 'name'=>'Kim Jungwoo', 'score'=>70];
$m10 = ['nim'=>'b253', 'name'=>'Kim Doyoung', 'score'=>55];

$title =  ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
$maha = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$scorenya = array_column($maha, 'score');
$scoreTinggi = max($scorenya);
$scoreRendah = min($scorenya);
$totalScore = array_sum($scorenya);
$jmlhMaha = count($maha);
$rataScore = $totalScore/$jmlhMaha;

$tfoot = [
    'Nilai Tertinggi'=>$scoreTinggi,
    'Nilai Terendah'=>$scoreRendah,
    'Nilai Rata-rata'=>$rataScore,
    'Jumlah Mahasiswa'=>$jmlhMaha
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Tugas 3 PHP</title>
</head>
<body>
    <h3 align="center">Daftar Mahasiswa</h3>
    <table class="table" style="width:80%" align="center" border=1>
        <thead class="table-warning">
            <tr>
                <?php
                foreach($title as $ttl){
                    ?>
                <th><?= $ttl ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            for ($a=0; $a<10; $a++){
                $ket[$a] = ($maha[$a]['score']>=60) ? 'Lulus' : 'Tidak Lulus';

                if($maha[$a]['score']>=80 && $maha[$a]['score']<=100){
                    $grade = 'A';
                }
                else if($maha[$a]['score']>=70 && $maha[$a]['score']<80){
                    $grade = 'B';
                }
                else if($maha[$a]['score']>=60 && $maha[$a]['score']<70){
                    $grade = 'C';
                }
                else if($maha[$a]['score']>=30 && $maha[$a]['score']<=50){
                    $grade = 'D';
                }
                else{
                    $grade = 'E';
                }

                switch($grade){
                    case 'A':
                        $predicate = 'Memuaskan';
                        break;
                    case 'B':
                        $predicate = 'Baik';
                        break;
                    case 'C':
                        $predicate = 'Cukup';
                        break;
                    case 'D':
                        $predicate = 'Kurang';
                        break;
                    case 'E':
                        $predicate = 'Buruk';
                        break;
                }
           
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $maha[$a]['nim'] ?></td>
                <td><?= $maha[$a]['name'] ?></td>
                <td><?= $maha[$a]['score'] ?></td>
                <td><?= $ket[$a] ?></td>
                <td><?= $grade ?></td>
                <td><?= $predicate ?></td>
            </tr>
            <?php $no++;  }?>
        </tbody>
        <tfoot class="table-warning">
        <?php
                foreach ($tfoot as $tf => $tfnya) {
                ?>
            <tr>
                <th colspan="6"><?= $tf ?></th>
                <th><?= $tfnya ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>