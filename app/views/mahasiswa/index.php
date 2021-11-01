<?php Flasher::flash()?>
<div class="container">
<h3>Tambah Data Skp Mahasiswa</h3>
<br>
  <form action="#">
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-100">
        <input type="text" id="nama" name="nama" placeholder="nama..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
    </div>
      <div class="col-100">
        <input type="text" id="nim" name="nim" placeholder="NIM..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-100">
        <select id="jurusan" name="jurusan">
          <option value="ti">Teknik Informatika</option>
          <option value="tek-in">Teknologi Industri</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      </div>
      <div class="col-100">
        <select id="prodi" name="prodi">
          <option value="pti">Pendidikan Teknik Informatika</option>
          <option value="pte">Pendidikan Teknik Elektro</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
    </div>
      <div class="col-100">
        <input type="text" id="kegiatan" name="kegiatan" placeholder="nama kegiatan...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
    </div>
      <div class="col-100">
        <input type="text" id="poin" name="poin" placeholder="masukan poin..">
      </div>
    </div><br>
    <div class="row">
      <input type="submit" value="Tambahkan">
    </div>
  </form>
</div>