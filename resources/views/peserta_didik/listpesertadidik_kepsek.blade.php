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
  <li class="active"> Data Peserta Didik</li>
@endsection

@section('content')
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          Daftar Peserta Didik
      </div>
        <div class="box-body pad table-responsive" style="width: 200px">
          <td>
            <a href="index"><button type="button" class="btn btn-block btn-primary">Tambah Peserta Didik</button></a>
          </td>
          </div>

            <div class="box-body">
                <table id='listusers' class="table table-bordered table-striped">
                    <thead>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Status</th>
                        <th style="text-align: center">Aksi</th>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($pesertadidiks as $pesertadidik)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $pesertadidik->nis }}</td>
                                <td>{{ $pesertadidik->nm_siswa }}</td>
                                <td>{{ $pesertadidik->jns_kelamin }}</td>
                                <td>{{ $pesertadidik->tgl_lahir }}</td>
                                <td>{{ $pesertadidik->no_tlpn }}</td>
                                <td>{{ $pesertadidik->alamat_siswa }}</td>
                                <td>{{ $pesertadidik->sts_siswa }}</td>
                                <td style="text-align: center;">
                                    <a href="#" class="btn btn-primary">View</a>
                                    <a href="/editpesertadidik/edit/{{ $pesertadidik->id_siswa }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
    <!-- /.box-body -->
   </div>
  </div>
</div>
@endsection

@section('content-footer')