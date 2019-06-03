@extends('admin.layouts.form')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>{{$title}}</h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dasbor</a></li>
        <li><a href="{{ route('artikel.index') }}">Kajian Strategis</a></li>
        <li class="active">Tambah</li>
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
            <form method="post" role="form" action="{{ route('kajian-strategis.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group @if($errors->has('judul')) has-error @endif">
                      <label for="judul">Judul</label>
                      <input type="text" required="required" class="form-control" value="{{ old('judul') }}" id="judul" placeholder="Masukkan Judul" name="judul">
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                      <label for="thumbnail">Thumbnail</label>
                      <input type="file" accept="image/jpeg,image/png" class="form-control" id="thumbnail" placeholder="Masukkan Thumbnail" name="thumbnail">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <textarea required="required" name="isi" class="textarea wysihtml5" placeholder="Isikan kajian" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('isi') }}</textarea>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tags">Tags</label>
                      <select required="required" name="tags[]" id="tags" class="form-control select2" multiple="multiple" data-placeholder="Pilih Tags" style="width: 100%;">
                        @foreach ($tags as $d)
                        <option value="{{ $d->nama }}">{{ $d->nama }}</option>
                        @endforeach
                      </select>
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

@include('admin.import.wysihtml5')
@include('admin.import.select2')