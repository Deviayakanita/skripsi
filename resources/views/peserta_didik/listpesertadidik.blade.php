<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{url('adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('adminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('adminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('adminLTE/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('adminLTE/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{url('adminLTE/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{url('adminLTE/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{url('adminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('adminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{url('adminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
	<title>Document</title>
</head>
<body>
	<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                Daftar Akun Eksekutif
            </div>
            <div class="col-xs-12">
                @if ($message = Session::get('delete_sukses'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('edit_sukses'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                @if ($message = Session::get('tambah_sukses'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
                @endif
            </div>
            <div class="col-xs-12">
                <a href="/dashboard/usermgmt/akunbaru" class="btn btn-primary" style="margin-bottom: 15px">Tambah Akun Baru</a>
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
                        <th>Aksi</th>
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
                                <td>
                                    <a href="editpesertadidik/edit/{{ $pesertadidik->id_siswa }}" class="btn btn-primary">Edit</a>
                           
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
	
</body>
</html>