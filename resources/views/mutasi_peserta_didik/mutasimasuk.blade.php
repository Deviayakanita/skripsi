<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../asets/css/login.css">
    <link rel="stylesheet" href="../asets/css/bootstrap.min.css">
  <title>Document</title>
</head>
<body>
  <form action="{{route('mutasimasuk.store')}}" method="post" style="margin-left: 15px">
    {{csrf_field()}}
    <div class="form-group col-md-6">
      <label for="inputsurat">No Surat Pindah</label>
      <input type="text" class="form-control" id="inputsurat" name="no_srt_pindah">
    </div>

    <div class="form-group col-md-6">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis">
    </div>

    <div class="form-group col-md-6">
      <label for="inputasalsekolah">Asal Sekolah</label>
      <input type="text" class="form-control" id="inputasalsekolah" name="asal_sekolah">
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Tingkat Kelas</label>
      <select id="inputState" class="form-control" name="tingkat_kelas">
        <option selected>pilih</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
      </select>
    </div>
        
    <div class="form-group col-md-4">
      <label for="input_tglmasuk">Tanggal Masuk</label>
      <input type="date" class="form-control" id="input_tglmasuk" name="tgl_masuk">
    </div>

    <div class="form-group col-md-6">
      <label for="inputalasan">Alasan Pindah</label>
      <input type="text" class="form-control" id="inputalasan" name="alasan_pindah">
    </div>

     <div class="form-group col-md-4">
      <label for="inputState">Status Mutasi</label>
      <select id="inputState" class="form-control" name="status_mutasi">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>

     <button type="button" class="btn btn-primary" style="margin-left: 15px">TAMBAH</button>
</body>
</html>