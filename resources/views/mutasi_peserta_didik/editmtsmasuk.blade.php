@extends('layout.blank')
@section('title', 'Data Mutasi Masuk | Admin')
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
        <a href="master">
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
        <li><a href="listpesertadidik"><i class="fa fa-circle-o"></i> Data Peserta Didik</a></li>
        <li><a href="listortu"><i class="fa fa-circle-o"></i> Data Orang Tua</a></li>
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
            <li><a href="listmtsmasuk"><i class="fa fa-circle-o"></i> Data Mutasi Masuk</a></li>
            <li><a href="listmtskeluar"><i class="fa fa-circle-o"></i> Data Mutasi Keluar</a></li>     
        </ul>
    </li>
    <li class="treeview">
        <a href="listalumni">
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
  <li> Kelola Mutasi</li>
  <li class="active"> Edit Data Mutasi Masuk</li>
@endsection

@section('content')

  <section class="content">
	<form action="{{url('mutasimasukedit/' .$mutasimasuk->mts_msk)}}" method="post" style="margin-left: 200px; margin-right: 200px">
		@method('patch')
    {{csrf_field()}}


    <div class="box">

      <form role="form">
      <div class="box-body">
        

    <div class="form-group">
      <label for="inputsurat">No Surat Pindah</label>
      <input type="text" class="form-control" id="inputsurat" name="no_srt_pindah" value="{{$mutasimasuk->no_srt_pindah}}">
    </div>

   <!--  <div class="form-group col-md-6">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis" value="{{$mutasimasuk->nis}}">
    </div> -->

    <!-- <div class="form-group col-md-6">
      <label for="inputnama">Nama Lengkap Siswa</label>
      <input type="nama" class="form-control" id="inputnama" name="nm_siswa" value="{{$mutasimasuk->nm_siswa}}">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Jenis Kelamin</label>
      <select id="inputState" class="form-control" name="jns_kelamin" value="{{$mutasimasuk->jns_kelamin}}">
        <option selected>pilih</option>
        <option value="Laki - Laki">Laki - Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
    </div> -->

    <div class="form-group">
      <label for="inputasalsekolah">Asal Sekolah</label>
      <input type="text" class="form-control" id="inputasalsekolah" name="asal_sekolah" value="{{$mutasimasuk->asal_sekolah}}">
    </div>

    <div class="form-group">
      <label for="inputState">Tingkat Kelas</label>
      <select id="inputState" class="form-control" name="tingkat_kelas" value="{{$mutasimasuk->tingkat_kelas}}">
        <option selected>pilih</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
      </select>
    </div>
        
    <div class="form-group">
      <label for="input_tglmasuk">Tanggal Masuk</label>
      <input type="date" class="form-control" id="input_tglmasuk" name="tgl_masuk" value="{{$mutasimasuk->tgl_masuk}}">
    </div>

    <div class="form-group">
      <label for="inputalasan">Alasan Pindah</label>
      <input type="text" class="form-control" id="inputalasan" name="alasan_pindah" value="{{$mutasimasuk->alasan_pindah}}">
    </div>

     <div class="form-group">
      <label for="inputState">Status Mutasi</label>
      <select id="inputState" class="form-control" name="status_mutasi" value="{{$mutasimasuk->status_mutasi}}">
        <option selected>pilih</option>
        <option value="1">AKTIF</option>
        <option value="0">NON AKTIF</option>
      </select>
    </div>

    <div>
    <button type="submit" class="btn btn-primary">SIMPAN</button>
  </div>

</div>
</form>
</div>
</section>  
@endsection

@section('content-footer')