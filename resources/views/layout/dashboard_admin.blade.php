@extends('layout.master')
@section('title', 'Dashboard | Admin')
@section('topbaraccount')
@section('sidemenu')
<!-- Left side column. contains the logo and sidebar -->
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

@section('content-title', 'Selamat Datang,')

@section('breadcrumb')
	<li><a href="master"><i class="fa fa-home"></i> Home</a></li>
	<li class="active">Dashboard</li>
@endsection

@section('content')
@endsection