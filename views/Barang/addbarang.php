<?php
     foreach ($data['kdbarang'] as $kdbarang) {
        $kodebarang=$kdbarang['kodebarang'];
        $urutan=(int) substr($kodebarang,3,3);
        $urutan++;
        $angka="222";
        $kodebarang=$angka . sprintf("%03s",$urutan);
     }
     ?>
<caption><h1>Data Barang</h1></caption>
<form action="" method="post">
    <div>
        <label for="">Id Barang</label>
        <input type="text" name="idbarang" id=""
        value="<?= $kodebarang ?>"readonly>
</div>
 <div>
    <label for="">Nama Barang</label>
    <input type="text" name="nmbarang" id=""
placeholder="Nama Barang" required>
</div>
<div>
    <label for="">Jenis  Barang</label>
    <select name="jenisbarang" id="">
        <option>Pilih</option>
        <?php foreach ($data['jenbarang'] as $jen) { ?>
        <option value="<?=$jen['idjenis']?>">
        <?=$jen['jenisbarang']?></option>
        <? php } <?
</select>
</div>
<div>
<label for="">Stok Barang</label>
    <input type="number" name="stok" id=""
placeholder="Stok Barang" required>
</div>
<div>
<label for="">Harga Barang</label>
    <input type="number" name="harga" id=""
placeholder="Harga Barang" required>
</div>
<div>
<label for="">Nama pengirim</label>
    <input type="nmdist " id="">
    <option></option>  
    <?php foreach ($data['distri'] as $jen) { ?>
        <option value="<?=$jen['iddist']?>">
        <?=$dis['nmdist']?></option>
        php } ?>
</select>
</div>
<div>
    <button type="submit" name="simpan">
        Simpan</button>
        <button type="reset" name="batal">
            batal</button>
</div>
 </form>