<?php
$_nim = $_POST['nim'];
$_nama = $_POST['nama'];
$_prodi = $_POST['prodi'];
$_gender = $_POST['gender'];
$_skill = $_POST['skill'];
$_domisili = $_POST['domisili'];
$_email = $_POST['email'];

function skor_skill($skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0; 
    foreach ($skill as $skill) {
        $result = $result + $skill_list[$skill];
    }

    return $result;
}

function kategori_skill($skill)
{
    $skill_list = [
        'HTML' => 10,
        'CSS' => 10,
        'JavaScript' => 20,
        'RWD Bootstrap' => 20,
        'PHP' => 20,
        'Python' => 30,
        'Java' => 50,
    ];
    $result = 0; 
    foreach ($skill as $skill) {
        $result = $result + $skill_list[$skill];
    }

    
        if ($result >= 100 ) {
            $result = "Sangat Baik";
        } elseif ($result >= 60) {
            $result = "Baik";
        } elseif ($result >= 40) {
            $result = "Cukup";
        } elseif ($result >= 0) {
            $result = "Kurang";
        } else {
            $result = "Tidak Memandai";
        }
    return $result;
}


echo "NIM: $_nim";
echo "<br> Nama: $_nama";
echo "<br> Program Studi: $_prodi";
echo "<br> Jenis Kelamin: $_gender";
echo "<br> Skill Programming: ";
foreach ($_skill as $skil) {
    echo $skil . ", ";
}
echo "<br>Skor Skill : " . skor_skill($_skill);
echo "<br>Kategori Skill: " . kategori_skill($_skill);
echo "<br> Tempat Domisili: $_domisili";
echo "<br> Email: $_email";



?>
