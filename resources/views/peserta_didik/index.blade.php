@extends('layout.blank')
@section('title', 'Data Peserta Didik | Admin')
@section('topbaraccount')
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="{{url('adminLTE/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
        <span class="hidden-xs">Alexander Pierce</span>
    </a>

    <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
        <img src="{{url('adminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        <p>
        Alexander Pierce - Web Developer
        <small>Member since Nov. 2012</small>
        </p>
    </li>
    </ul>
</li>
@endsection

@section('sidemenu')
<aside class="main-sidebar">

<section class="sidebar">
<ul class="sidebar-menu" data-widget="tree">
    <li class="treeview">
        <a href="{{url('layout/master')}}">
            <i class="fa fa-home active"></i><span> Dashboard</span>
        </a>
    </li>
    <li class="treeview">
      <a href="#">
      <i class="fa fa-edit"></i><span> Kelola Peserta Didik</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('peserta_didik/listpesertadidik')}}"><i class="fa fa-circle-o active"></i> Data Peserta Didik</a></li>
        <li><a href="{{url('orang_tua/listortu')}}"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
      </ul>
    </li>
    <li class="treeview">
        <a href="#">
        <i class="fa fa-edit"></i><span> Kelola Mutasi</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('mutasi_peserta_didik/listmtsmasuk')}}"><i class="fa fa-circle-o"></i> Data Mutasi Masuk</a></li>
            <li><a href="{{url('mutasi_peserta_didik/listmtskeluar')}}"><i class="fa fa-circle-o"></i> Data Mutasi Keluar</a></li>     
        </ul>
    </li>
    <li class="treeview">
        <a href="{{url('alumni/listalumni')}}">
        <i class="fa fa-edit"></i><span> Kelola Alumni</span>
        </a>
    </li>
</ul>
</section>

<!-- sidebar: style can be found in sidebar.less -->
</aside>
@endsection

@section('content-title')

@section('breadcrumb')
  <li><a href="dashboard_admin"><i class="fa fa-home"></i> Menu</a></li>
  <li> Kelola Peserta Didik</li>
  <li class="active"> Tambah Data Peserta Didik</li>
@endsection

@section('content')

  <section class="content">
	<form action="{{route('pesertadidik.store')}}" method="post" style="margin-left: 200px; margin-right: 200px">
		{{csrf_field()}}

    <div class="box">

      <form role="form">
      <div class="box-body">

    <div class="form-group">
      <label for="inputnama">Nama Lengkap Siswa</label>
      <input type="nama" class="form-control" id="inputnama" name="nm_siswa">
    </div>

    <div class="form-group">
      <label for="inputState">Jenis Kelamin</label>
      <select id="inputState" class="form-control" name="jns_kelamin">
        <option selected>pilih</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div>

  <div class="form-row col-md-6"> 
    <div class="form-group">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis">
    </div>
    <div class="form-group">
      <label for="inputState">Jurusan</label>
      <select id="inputState" class="form-control" name="jurusan">
        <option selected>pilih</option>
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
      </select>
    </div>
  </div>

  <div class="form-row col-md-6">
    <div class="form-group">
      <label for="input_tmplahir">Tempat Lahir</label>
      <input type="text" class="form-control" id="input_tmplahir" name="tmp_lahir">
    </div>
    <div class="form-group">
      <label for="input_tgllahir">Tanggal Lahir</label>
      <input type="date" class="form-control" id="input_tgllahir" name="tgl_lahir">
    </div>
  </div>

    <div class="form-group">
      <label for="inputagama">Agama</label>
      <input type="agama" class="form-control" id="inputagama" name="agama">
    </div>

    <div class="form-group">
      <label for="alamatsiswa">Alamat Siswa</label>
      <textarea class="form-control" id="alamatsiswa" rows="3" name="alamat_siswa"></textarea>
    </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputprovinsi">Provinsi</label>
      <input type="provinsi" class="form-control" id="inputprovinsi" name="provinsi">
    </div>
    <div class="form-group">
      <label for="inputkabupaten">Kabupaten</label>
      <input type="kabupaten" class="form-control" id="inputkabupaten" name="kabupaten">
    </div>
  </div>

  <div class="form-row col-md-6">
    <div class="form-group">
      <label for="inputnotlpn">No Telpon</label>
      <input type="notelpon" class="form-control" id="inputnotlpn" name="no_tlpn">
    </div>
    <div class="form-group">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" name="email">
    </div>
  </div>

  <div>
    <div class="form-row col-md-6">
    <div class="form-group">
      <label for="input_tahunajaran">Tahun Ajaran</label>
      <input type="text" class="form-control" id="input_tahunajaran" name="tahun_ajaran">
    </div>
    <div class="form-group">
      <label for="inputState">Status Siswa</label>
      <select id="inputState" class="form-control" name="sts_siswa">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>
  </div>
</div>
   	

    <div class="form-group">
      <label for="keterangan">Keterangan Siswa</label>
      <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
    </div>
    
  <div>
  <button type="submit" class="btn btn-primary" style="margin-left: 15px">SIMPAN DATA</button>
  </div>

</div>
</form>
</div>
</section>  
@endsection

@section('content-footer')