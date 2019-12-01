@extends('admin.layouts.tabel', ['dt_order'=>[0, 'desc']])
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Anggota</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dasbor</a></li>
      <li class="active">Anggota</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        @include('admin.layouts.success_msg')
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Filter Berdasarkan Periode</h3>
          </div>
          <div class="box-body">
            <form action="">
              @csrf
              <div class="form-group">
                <label for="periode">Periode</label>
                <select name="periode" id="periode" class="form-control">
                  @foreach ($periode as $p)
                  <option @if($p->id == request()->query('periode')) selected="selected" @endif value="{{ $p->id }}">{{ $p->nama }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-flat btn-primary btn-block">Lihat</button>
              </div>
            </form>
          </div>
        </div>
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Anggota</h3>
            <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-sm btn-flat pull-right">Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="datatable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($anggota as $d)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $d->nim }}</td>
                  <td>{{ $d->nama }}</td>
                  <td><a href="mailto:{{ $d->email }}">{{ $d->email }}</a></td>
                  <td>
                    <a href="{{ route('anggota.show', [$d->id]) }}" class="btn btn-success btn-flat">Detail</a>
                    <a href="{{ route('anggota.edit', [$d->id]) }}" class="btn btn-primary btn-flat">Ubah</a>
                    <a onclick="hapus('{{ route('anggota.destroy', [$d->id]) }}')" class="btn btn-danger btn-flat">Hapus</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<form method="post" action="" id="form-hapus">
  @method('delete')
  @csrf
</form>
@endsection

@push('script')
<script>
  function hapus(url) {
    if(confirm('Anda yakin ingin menghapus?')){
      $('#form-hapus').attr('action', url);
      document.getElementById('form-hapus').submit();
    }
  }
</script>
@endpush