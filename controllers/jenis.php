<?php
if($aksi=='index'){
    $data['jenis']=$db->query($connect,"SELECT * FROM tjenis");
    $helpers->load_view('jenis/jenis.php',$data);
}
if($aksi=='Add'){
    $helpers->load_view('jenis/addjenis.php');
}
if($aksi=='Save'){
    $jenisbarang=$_POST['jenisbarang'];
    $ket=$_POST['ket'];
    $simpan=$db->qry($connect,"INSERT INTO tjenis VALUES('','$jenisbarang','$ket')");
    if($simpan)
        header('location:'.$base_url. 'jenis');
    else{
        header('location:'.$base_url. 'jenis/Add');
    }
}
if($aksi=='edit'){
    $idjenis=$uri[4];
    $data['jenis']=$db->query($connect,"SELECT * FROM tjenis WHERE idjenis='$idjenis'");
    $helpers->load_view('jenis/editjenis.php',$data);
}