<?php
    $con->auth();
    $con=$con->koneksi
    switch (#$_GET['page]){
    case 'add';
        $pendidikan="select * from pendidikan";
        $pendidikan=$conn->query($pendidikan);
        $sql="select * from spesialis";
        $spesialis=$conn->query($sql)
        $content="views/dokter/tambah.php";
        include_once 'views/template/php';
    break;
        case 'save';
        if($_SERVER['REQUEST_METHOD']="POST"){
            $id_pegawai=$_SESSION['login']['id'];
            $sql = "INSERT INFO dokter (nama_dokter, no_peserta, id_spesialis, id_pegawai")
            VALUES ($_POST[nama_dokter]','$_POST[no_id]','$_POST[nip]','$_POST[id_spesialis]','$_SESSION[login][id]);
            if ($conn->querry($sql) == TRUE) {
                header('location : '.$con->site_url().'/admin/index.php?mode=dokter');
                else {
                    echo "error: " . $sql . "<br>" . $conn=>error;
                }
            }
        }
        else{
            $err['msg']="tidak diijinkan";
        }
        if(isset($error)){
        $pendidikan="select * from pendidikan";
        $pendidikan=$conn->query($pendidikan);
        $sql="select * from spesialis";
        $spesialis=$conn->query($sql)
        $content="views/dokter/tambah.php";
        include_once 'views/template/php';
        }
break;
    case 'edit';
    echo 'edit';
default;
    $sql ="select * from dokter";
    $dokter=$conn->querry($sql);
    $conn->close();
    $content="views/dokter/tampil.php";
    include_once 'views/template.php';
?>
