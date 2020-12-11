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
	<form action="{{route('pesertadidik.store')}}" method="post" style="margin-left: 15px">
		{{csrf_field()}}
    <div class="form-group col-md-6">
      <label for="inputnama">Nama Siswa</label>
      <input type="nama" class="form-control" id="inputnama" name="nm_siswa">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Jenis Kelamin</label>
      <select id="inputState" class="form-control" name="jns_kelamin">
        <option selected>pilih</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputnisn">NISN</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nisn">
    </div>

    <div class="form-group col-md-4">
      <label for="input_tmplahir">Tempat Lahir</label>
      <input type="tempatlahiir" class="form-control" id="input_tmplahir" name="tmp_lahir">
    </div>

     <div class="form-group col-md-4">
      <label for="input_tgllahir">Tanggal Lahir</label>
      <input type="tanggallahiir" class="form-control" id="input_tgllahir" name="tgl_lahir">
    </div>

    <div class="form-group col-md-6">
      <label for="inputagama">Agama</label>
      <input type="agama" class="form-control" id="inputagama" name="agama">
    </div>

    <div class="form-group col-md-4">
      <label for="inputalamat">Alamat Siswa</label>
      <input type="alamatsiswa" class="form-control" id="inputalamat" name="alamat_siswa">
    </div>

    <div class="form-group col-md-6">
      <label for="inputprovinsi">Provinsi</label>
      <input type="provinsi" class="form-control" id="inputprovinsi" name="provinsi">
    </div>

    <div class="form-group col-md-4">
      <label for="inputkabupaten">Kabupaten</label>
      <input type="kabupaten" class="form-control" id="inputkabupaten" name="kabupaten">
    </div>

    <div class="form-group col-md-6">
      <label for="inputnotlpn">No Telpon</label>
      <input type="notelpon" class="form-control" id="inputnotlpn" name="no_tlpn">
    </div>

    <div class="form-group col-md-4">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" name="email">
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Jurusan</label>
      <select id="inputState" class="form-control" name="jurusan">
        <option selected>pilih</option>
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
      </select>
    </div>

   	<div class="form-group col-md-6">
      <label for="inputState">Status Siswa</label>
      <select id="inputState" class="form-control" name="sts_siswa">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>

    <div class="form-group col-md-4">
      <label for="inputket">Keterangan Siswa</label>
      <input type="keterangan" class="form-control" id="inputket" name="keterangan">
    </div>

  <button type="tambah" class="btn btn-primary" style="margin-left: 15px">TAMBAH</button>
</form>	
</body>
</html>