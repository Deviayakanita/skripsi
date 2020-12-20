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
  <form action="{{route('alumni.store')}}" method="post" style="margin-left: 15px">
    {{csrf_field()}}

    <!-- <div class="form-group col-md-6">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis">
    </div>
     -->
    <div class="form-group col-md-6">
      <label for="inputnama">Nama Perguruan Tinggi</label>
      <input type="text" class="form-control" id="inputnama" name="nm_pt">
    </div>

     <div class="form-group col-md-6">
      <label for="inputState">Jenis Perguruan Tinggi</label>
      <select id="inputState" class="form-control" name="jns_pt">
        <option selected>pilih</option>
        <option value="Negri">Negri</option>
        <option value="Swasta">Swasta</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputnamafk">Nama Fakultas</label>
      <input type="text" class="form-control" id="inputnamafk" name="nm_fak">
    </div>

    <div class="form-group col-md-6">
      <label for="inputnamajurus">Nama Jurusan</label>
      <input type="text" class="form-control" id="inputnamajurus" name="nm_jurusan">
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Melanjutkan</label>
      <select id="inputState" class="form-control" name="melanjutkan">
        <option selected>pilih</option>
        <option value="Bekerja">Bekerja</option>
        <option value="Belum Bekerja">Kuliah</option>
      </select>
    </div>

     <div class="form-group col-md-4">
      <label for="inputState">Status Alumni</label>
      <select id="inputState" class="form-control" name="status_alumni">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>

     <button type="button" class="btn btn-primary" style="margin-left: 15px">TAMBAH</button>
   </form>
</body>
</html>