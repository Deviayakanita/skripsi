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
	<form action="{{route('orangtua.store')}}" method="post" style="margin-left: 15px">
		{{csrf_field()}}

   <!--  <div class="form-group col-md-6">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis">
    </div> -->

    <div class="form-group col-md-6">
      <label for="inputnama">Nama Ayah</label>
      <input type="text" class="form-control" id="inputnama" name="nm_ayah">
    </div>

    <div class="form-group col-md-6">
      <label for="inputpekerjaan">Pekerjaan Ayah</label>
      <input type="text" class="form-control" id="inputpekerjaan" name="job_ayah">
    </div>

    <div class="form-group col-md-6">
      <label for="inputpendidikan">Pendidikan Terakhir</label>
      <input type="text" class="form-control" id="inputpendidikan" name="pddk_ayah">
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Penghasilan Ayah</label>
      <select id="inputState" class="form-control" name="penghasilan_ayah">
        <option selected>pilih</option>
        <option value="Kurang dari Rp.500,000">Kurang dari Rp.500,000</option>
        <option value="Rp.500,000 - Rp.1,000,000">Rp.500,000 - Rp.1,000,000</option>
        <option value="Rp.1,000,000 - Rp.2,000,000">Rp.1,000,000 - Rp.2,000,000</option>
        <option value="Rp.2,000,000 - Rp.5,000,000">Rp.2,000,000 - Rp.5,000,000</option>
        <option value="Rp.5,000,000 - Rp.20,000,000">Rp.5,000,000 - Rp.20,000,000</option>
        <option value="Lebih dari Rp.20,000,000">Lebih dari Rp.20,000,000</option>
        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputnama">Nama Ibu</label>
      <input type="text" class="form-control" id="inputnama" name="nm_ibu">
    </div>

    <div class="form-group col-md-6">
      <label for="inputpekerjaan">Pekerjaan Ibu</label>
      <input type="text" class="form-control" id="inputpekerjaan" name="job_ibu">
    </div>

    <div class="form-group col-md-6">
      <label for="inputpendidikan">Pendidikan Terakhir</label>
      <input type="text" class="form-control" id="inputpendidikan" name="pddk_ibu">
    </div>

    <div class="form-group col-md-6">
      <label for="inputState">Penghasilan Ibu</label>
      <select id="inputState" class="form-control" name="penghasilan_ibu">
        <option selected>pilih</option>
        <option value="Kurang dari Rp.500,000">Kurang dari Rp.500,000</option>
        <option value="Rp.500,000 - Rp.1,000,000">Rp.500,000 - Rp.1,000,000</option>
        <option value="Rp.1,000,000 - Rp.2,000,000">Rp.1,000,000 - Rp.2,000,000</option>
        <option value="Rp.2,000,000 - Rp.5,000,000">Rp.2,000,000 - Rp.5,000,000</option>
        <option value="Rp.5,000,000 - Rp.20,000,000">Rp.5,000,000 - Rp.20,000,000</option>
        <option value="Lebih dari Rp.20,000,000">Lebih dari Rp.20,000,000</option>
        <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
      </select>
    </div>
    
    <div class="form-group col-md-4">
      <label for="inputState">Status Orang Tua</label>
      <select id="inputState" class="form-control" name="sts_orang_tua">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>

    <button type="tambah" class="btn btn-primary" style="margin-left: 15px">TAMBAH</button>
  </form>
</body>
</html>