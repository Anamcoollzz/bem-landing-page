@extends('admin.layouts.tabel', ['dt_order'=>[0, 'desc']])
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>Periode</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Dasbor</a></li>
      <li class="active">Periode</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        @include('admin.layouts.success_msg')
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Periode</h3>
            <a href="{{ route('periode.create') }}" class="btn btn-primary btn-sm btn-flat pull-right">Tambah</a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="datatable" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Periode</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Periode</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach ($periode as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->nama }}</td>
                  <td><a href="{{ route('periode.ubah-status', [$d->id]) }}">{!! $d->status_label !!}</a></td>
                  <td>
                    <a href="{{ route('periode.edit', [$d->id]) }}" class="btn btn-primary btn-flat">Ubah</a>
                    <a onclick="hapus('{{ route('periode.destroy', [$d->id]) }}')" class="btn btn-danger btn-flat">Hapus</a>
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