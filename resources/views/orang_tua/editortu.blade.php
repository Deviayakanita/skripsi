@extends('layout.blank')
@section('title', 'Data Orang Tua | Admin')
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
  <li> Kelola Peserta Didik</li>
  <li class="active"> Edit Data Orang Tua</li>
@endsection

@section('content')

  <section class="content">
	<form action="{{url('ortuedit/' .$orangtua->orang_tua)}}" method="post" style="margin-left: 200px; margin-right: 200px">
		@method('patch')
		{{csrf_field()}}

    <div class="box">

      <form role="form">
      <div class="box-body">


   <!--  <div class="form-group col-md-6">
      <label for="inputnisn">NIS</label>
      <input type="nisn" class="form-control" id="inputnisn" name="nis">
    </div> -->

    <div class="form-group">
      <label for="inputnama">Nama Ayah</label>
      <input type="text" class="form-control" id="inputnama" name="nm_ayah" value="{{$orangtua->nm_ayah}}">
    </div>

    <div class="form-group">
      <label for="inputpekerjaan">Pekerjaan Ayah</label>
      <input type="text" class="form-control" id="inputpekerjaan" name="job_ayah" value="{{$orangtua->job_ayah}}">
    </div>

    <div class="form-group">
      <label for="inputpendidikan">Pendidikan Terakhir</label>
      <input type="text" class="form-control" id="inputpendidikan" name="pddk_ayah" value="{{$orangtua->pddk_ayah}}">
    </div>

    <div class="form-group">
      <label for="inputState">Penghasilan Ayah</label>
      <select id="inputState" class="form-control" name="penghasilan_ayah" value="{{$orangtua->penghasilan_ayah}}">
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

    <div class="form-group">
      <label for="inputnama">Nama Ibu</label>
      <input type="text" class="form-control" id="inputnama" name="nm_ibu" value="{{$orangtua->nm_ibu}}">
    </div>

    <div class="form-group">
      <label for="inputpekerjaan">Pekerjaan Ibu</label>
      <input type="text" class="form-control" id="inputpekerjaan" name="job_ibu" value="{{$orangtua->job_ibu}}">
    </div>

    <div class="form-group">
      <label for="inputpendidikan">Pendidikan Terakhir</label>
      <input type="text" class="form-control" id="inputpendidikan" name="pddk_ibu" value="{{$orangtua->pddk_ibu}}">
    </div>

    <div class="form-group">
      <label for="inputState">Penghasilan Ibu</label>
      <select id="inputState" class="form-control" name="penghasilan_ibu" value="{{$orangtua->penghasilan_ibu}}">
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
    
    <div class="form-group">
      <label for="inputState">Status Orang Tua</label>
      <select id="inputState" class="form-control" name="sts_orang_tua" value="{{$orangtua->sts_orang_tua}}">
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