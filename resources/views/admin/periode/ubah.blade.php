@extends('admin.layouts.form')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>{{$title}}</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dasbor</a></li>
      <li><a href="{{ route('periode.index') }}">Artikel</a></li>
      <li class="active">Ubah</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">{{$title}}</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="post" role="form" action="{{ route('periode.update', [$d->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('periode')) has-error @endif">
                    <label for="periode">Periode</label>
                    <input type="text" required="required" class="form-control" value="{{ old('periode') ? old('periode') : $d->nama }}" id="periode" placeholder="Masukkan Periode" name="periode">
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection