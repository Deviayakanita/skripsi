<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../asets/css/login.css">
    <link rel="stylesheet" href="../../asets/css/bootstrap.min.css">
	<title>Creat Peserta Didik</title>
</head>
<body>
	<form action="{{url('pesertadidikedit/' .$pesertadidik->siswa)}}" method="post" style="margin-left: 15px">
		@method('patch')
		{{csrf_field()}}

    <div class="form-group col-md-6">
      <label for="inputnama">Nama Lengkap Siswa</label>
      <input type="nama" class="form-control" id="inputnama" name="nm_siswa" value="{{$pesertadidik->nm_siswa}}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Jenis Kelamin</label>
      <select id="inputState" class="form-control" name="jns_kelamin" value="{{$pesertadidik->jns_kelamin}}">
        <option selected>pilih</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

  <div class="form-row col-md-4"> 
    <div class="form-group col-md-6">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis" value="{{$pesertadidik->nis}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Jurusan</label>
      <select id="inputState" class="form-control" name="jurusan" value="{{$pesertadidik->jurusan}}">
        <option selected>pilih</option>
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
      </select>
    </div>
  </div>

  <div class="form-row col-md-4">
    <div class="form-group col-md-6">
      <label for="input_tmplahir">Tempat Lahir</label>
      <input type="text" class="form-control" id="input_tmplahir" name="tmp_lahir"value="{{$pesertadidik->tmp_lahir}}">
    </div>
    <div class="form-group col-md-6">
      <label for="input_tgllahir">Tanggal Lahir</label>
      <input type="date" class="form-control" id="input_tgllahir" name="tgl_lahir" value="{{$pesertadidik->tgl_lahir}}">
    </div>
  </div>

    <div class="form-group col-md-4">
      <label for="inputagama">Agama</label>
      <input type="agama" class="form-control" id="inputagama" name="agama" value="{{$pesertadidik->agama}}">
    </div>

    <div class="form-group col-md-6">
      <label for="alamatsiswa">Alamat Siswa</label>
      <textarea class="form-control" id="alamatsiswa" rows="3" name="alamat_siswa" value="{{$pesertadidik->alamat_siswa}}"></textarea>
    </div>

  <div class="form-row col-md-4">
    <div class="form-group col-md-6">
      <label for="inputprovinsi">Provinsi</label>
      <input type="provinsi" class="form-control" id="inputprovinsi" name="provinsi" value="{{$pesertadidik->provinsi}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputkabupaten">Kabupaten</label>
      <input type="kabupaten" class="form-control" id="inputkabupaten" name="kabupaten" value="{{$pesertadidik->kabupaten}}">
    </div>
  </div>

  <div class="form-row col-md-4">
    <div class="form-group col-md-6">
      <label for="inputnotlpn">No Telpon</label>
      <input type="notelpon" class="form-control" id="inputnotlpn" name="no_tlpn" value="{{$pesertadidik->no_tlpn}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" name="email" value="{{$pesertadidik->email}}">
    </div>
  </div>

  <div>
    <div class="form-row col-md-4">
    <div class="form-group col-md-6">
      <label for="input_tahunajaran">Tahun Ajaran</label>
      <input type="text" class="form-control" id="input_tahunajaran" name="tahun_ajaran" value="{{$pesertadidik->tahun_ajaran}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Status Siswa</label>
      <select id="inputState" class="form-control" name="sts_siswa" value="{{$pesertadidik->sts_siswa}}">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>
    </div>
  </div>
   	
    <div class="form-group col-md-6">
      <label for="keterangan">Keterangan Siswa</label>
      <textarea class="form-control" id="keterangan" rows="3" name="keterangan" value="{{$pesertadidik->keterangan}}">
      </textarea>
    </div>
    

		<button type="tambah" class="btn btn-primary" style="margin-left: 15px">TAMBAH</button>
	</form>	
</body>
</html>