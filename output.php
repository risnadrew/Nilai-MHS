<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $nilai;

    $nilai = ($tugas*0.25)+($uts*0.35)+($uas*0.4);

    if($nilai > 80){
        $grade = '<b>(A).</b> You are perfect!';
    } elseif ($nilai > 70) {
        $grade = '<b>(B).</b> You are good.';
    } elseif ($nilai > 60) {
        $grade = '<b>(C).</b> Do not give up!';
    } elseif ($nilai > 50) {
        $grade = '<b>(D).</b> Bad.';
    } elseif ($nilai > 0) {
        $grade = '<b>(E).</b> Sooooooo BAD';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="output.css">
    <title>Output Nilai</title>
</head>
<body class="container">
        <form method="POST" name="frmpost" action="">
        <table width="460" border="15" cellpadding="0" cellspacing="0" align="left">
            <tr>
                <td align="center"><h2><b><?php echo "Final Output"; ?></b></h2></td>
            </tr>
            <tr>
                <td>
        <table width="460" border="0" cellpadding="6" cellspacing="6" align="center">
            <tr>
                <td>Your ID</td>
                <td> : </td>
                <td><?php echo ucwords($nim); ?></td>
            </tr>
            <tr>
                <td>The Name of the Student</td>
                <td> : </td>
                <td><?php echo ucwords($nama); ?></td>
            </tr>
            <tr>
                <td>The Course</td> 
                <td> : </td>
                <td><?php echo ucwords($prodi);?></td></td>
            </tr>
            <tr>
                <td>The Grades</td>
                <td> : </td>
                <td><?php echo $nilai; ?></td>
            </tr>
            <tr>
                <td>The Final Grade</td>
                <td> : </td>
                <td><?php echo $grade; ?></td>
            </tr>
        </table>
                </td>
            </tr>
        </table>
        </form>
</body>
</html>