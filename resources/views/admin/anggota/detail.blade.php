@extends('admin.layouts.form')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>{{$title}}</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dasbor</a></li>
      <li><a href="{{ route('anggota.index') }}">Anggota</a></li>
      <li class="active">Detail</li>
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
          <form method="post" id="form-ubah" role="form" action="#" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <center>
                    <img src="{{ $d->foto_url }}" alt="{{ $d->nama }}" class="img-thumbnail" style="max-width: 400px;">
                  </center>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('nama')) has-error @endif">
                    <label for="nama">Nama</label>
                    <input type="text" required="required" class="form-control" value="{{ old('nama') ? old('nama') : $d->nama }}" id="nama" placeholder="Masukkan Nama" name="nama">
                    @if($errors->has('nama'))
                    <span class="help-block">{{ $errors->first('nama') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('nim')) has-error @endif">
                    <label for="nim">NIM</label>
                    <input type="number" required="required" class="form-control" value="{{ old('nim') ? old('nim') : $d->nim }}" id="nim" placeholder="Masukkan NIM" name="nim">
                    @if($errors->has('nim'))
                    <span class="help-block">{{ $errors->first('nim') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('jenis_kelamin')) has-error @endif">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    @php
                    $selected = old('jenis_kelamin') ? old('jenis_kelamin') : $d->jenis_kelamin;
                    @endphp
                    <select required="required" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                      <option @if($d->jenis_kelamin == 'Laki-laki') selected="selected" @endif value="Laki-laki">Laki-laki</option>
                      <option @if($d->jenis_kelamin == 'Perempuan') selected="selected" @endif value="Perempuan">Perempuan</option>
                    </select>
                    @if($errors->has('jenis_kelamin'))
                    <span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('program_studi')) has-error @endif">
                    <label for="program_studi">Program Studi</label>
                    <input type="text" required="required" class="form-control" value="{{ old('program_studi') ? old('program_studi') : $d->prodi }}" id="program_studi" placeholder="Masukkan Program Studi" name="program_studi">
                    @if($errors->has('program_studi'))
                    <span class="help-block">{{ $errors->first('program_studi') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('angkatan')) has-error @endif">
                    <label for="angkatan">Angkatan</label>
                    <input type="number" min="2016" required="required" class="form-control" value="{{ old('angkatan') ? old('angkatan') : $d->angkatan }}" id="angkatan" placeholder="Masukkan Angkatan" name="angkatan">
                    @if($errors->has('angkatan'))
                    <span class="help-block">{{ $errors->first('angkatan') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('periode')) has-error @endif">
                    <label for="periode">Periode</label>
                    <select required="required" class="form-control" id="periode" name="periode[]" data-select="multiple" multiple="multiple">
                      @php
                      $selected = old('periode') ? old('periode') : $d->periode->pluck('periode_id')->toArray();
                      @endphp
                      @foreach ($periode as $p)
                      @if(is_array($selected))
                      <option @if(in_array($p->id, $selected)) selected="selected" @endif value="{{$p->id}}">{{$p->nama}}</option>
                      @else
                      <option @if($selected == $p->id) selected="selected" @endif value="{{$p->id}}">{{$p->nama}}</option>
                      @endif
                      @endforeach
                    </select>
                    @if($errors->has('periode'))
                    <span class="help-block">{{ $errors->first('periode') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('quotes')) has-error @endif">
                    <label for="quotes">Quotes</label>
                    <input type="text" required="required" class="form-control" value="{{ old('quotes') ? old('quotes') : $d->quotes }}" id="quotes" placeholder="Masukkan Quotes" name="quotes">
                    @if($errors->has('quotes'))
                    <span class="help-block">{{ $errors->first('quotes') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('foto')) has-error @endif">
                    <label for="foto">Foto</label>
                    <input type="file" accept="image/*" class="form-control" id="foto"  name="foto">
                    @if($errors->has('foto'))
                    <span class="help-block">{{ $errors->first('foto') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group @if($errors->has('alamat')) has-error @endif">
                    <label for="alamat">Alamat</label>
                    <textarea required="required" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat">{{ old('alamat') ? old('alamat') : $d->alamat }}</textarea>
                    @if($errors->has('alamat'))
                    <span class="help-block">{{ $errors->first('alamat') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('no_hp')) has-error @endif">
                    <label for="no_hp">No Hp</label>
                    <input type="text" required="required" class="form-control" value="{{ old('no_hp') ? old('no_hp') : $d->no_hp }}" id="no_hp" placeholder="Masukkan No Hp" name="no_hp">
                    @if($errors->has('no_hp'))
                    <span class="help-block">{{ $errors->first('no_hp') }}</span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group @if($errors->has('email')) has-error @endif">
                    <label for="email">Email</label>
                    <input type="email" required="required" class="form-control" value="{{ old('email') ? old('email') : $d->email }}" id="email" placeholder="Masukkan Email" name="email">
                    @if($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <a href="{{ route('anggota.edit', [$d->id]) }}" class="btn btn-primary btn-flat">Ubah</a>
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
@include('admin.import.select2')

@push('script')
<script>
  $('#form-ubah').find('.form-control').attr('disabled', true);
</script>
@endpush