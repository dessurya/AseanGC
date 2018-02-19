@extends('admin-portal.layout.master')

@section('title')
  <title>Portal Admin - Bank Penerima ZIS | Bazis Jakarta Utara</title>
@endsection

@section('headscript')
<link href="{{ asset('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<style type="text/css">
  img.picture{
    max-height: 220px;
    max-width: 280px;
  }
</style>
<script src="{{asset('backend/vendors/ckeditor/ckeditor.js')}}"></script>
@endsection

@section('content')
  @if(Session::has('berhasil'))
    <script>
      window.setTimeout(function() {
        $(".alert-success").fadeTo(700, 0).slideUp(700, function(){
            $(this).remove();
        });
      }, 5000);
    </script>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="alert alert-success alert-dismissible fade in" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          <strong>{{ Session::get('berhasil') }}</strong>
        </div>
      </div>
    </div>
  @endif

  <div class="modal fade modal-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="form" action="" method="POST" class="form-horizontal form-label-left" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" id="form-title"></h4>
          </div>
          <div class="modal-body">
            {{ csrf_field() }}
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input 
                  id="nama" 
                  class="form-control col-md-7 col-xs-12" 
                  name="nama" 
                  type="text" 
                  value="{{ old('nama') }}"
                >
                @if($errors->has('nama'))
                  <code><span style="color:red; font-size:12px;">{{ $errors->first('nama')}}</span></code>
                @endif
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Gambar Max 1024x1024</label>
              <div class="col-md-9 col-sm-9 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" name="picture" type="file" accept=".jpg,.png">
                @if($errors->has('picture'))
                  <code><span style="color:red; font-size:12px;">{{ $errors->first('picture')}}</span></code>
                @endif
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade modal-aksi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content alert-danger">

        <div class="modal-header">
          <button 
            type="button" 
            class="close" 
            data-dismiss="modal" 
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="title-aksi"></h4>
        </div>
        <div class="modal-body">
          <h4>Yakin ?</h4>
          <p id="text-aksi">?</p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" id="aksi-url">Ya</a>
        </div>

      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Bank Penerima ZIS </h2>
          <ul class="nav panel_toolbox">
            <div class="btn-group">
              <button 
                id="trigerTambah" 
                type="button"
                class="btn btn-success btn-sm" 
                data-toggle='modal' 
                data-target='.modal-form'
              >
                <i class="fa fa-plus"></i> Tambah
              </button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-success">
                Flag {{ $request->flag != '' ? ' : '.$request->flag : ' : All'}}
              </button>
              <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">
                <span class="caret" style="color:white;"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ route('adpor.penzis.banpen.index', ['flag'=>'', 'author'=>$request->author]) }}">
                    Show All
                  </a>
                </li>
                <li>
                  <a href="{{ route('adpor.penzis.banpen.index', ['flag'=>'Publis', 'author'=>$request->author]) }}">
                    Show Publis
                  </a>
                </li>
                <li>
                  <a href="{{ route('adpor.penzis.banpen.index', ['flag'=>'Unpublis', 'author'=>$request->author]) }}">
                    Show Unpublis
                  </a>
                </li>
              </ul>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-success">
                Author {{ $request->author != '' ? ' : '.$getFilterAuthor->name : ' : All'}}
              </button>
              <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-toggle="dropdown">
                <span class="caret" style="color:white;"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li>
                  <a href="{{ route('adpor.penzis.banpen.index', ['flag'=>$request->flag, 'author'=>'']) }}">
                    Show All
                  </a>
                </li>
                @php $lastAuthor = 0 @endphp
                @foreach($authorList as $data)
                @if($lastAuthor != $data->user_id)
                <li>
                  <a href="{{ route('adpor.penzis.banpen.index', ['flag'=>$request->flag, 'author'=>$data->getUser->email]) }}">
                    {{ $data->getUser->name }}
                  </a>
                </li>
                @endif
                @php $lastAuthor = $data->user_id @endphp
                @endforeach
              </ul>
            </div>
            <div class="btn-group">
              <a 
                class="btn btn-success btn-sm"
                href="{{ route('adpor.penzis.banpen.index') }}" 
              >
                <i class="fa fa-refresh"></i> Clear Filter
              </a>
            </div>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content table-responsive">
          <table id="table-data" class="table table-striped table-bordered no-footer" width="100%">
            <thead>
              <tr role="row">
                <th>No</th>
                <th>Nama Bank</th>
                <th>Author</th>
                <th>Riwayat</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
            @php
              $no = 1;
            @endphp
            @foreach ($get as $key)
              <tr>
                <td>{{ $no++ }}</td>
                <td>
                  {!! $key->bank_nama !!}
                  <br>
                  <a href="{{ asset('asset/picture/penerimaan-zis/bank/'.$key->bank_logo) }}" target="_blank">
                    <img class="picture" src="{{ asset('asset/picture/penerimaan-zis/bank/'.$key->bank_logo) }}">
                  </a>
                </td>
                <td>
                  {!! $key->getUser->name."<br>".$key->getUser->email !!}
                </td>
                <td>{{ $key->created_at }}</td>
                <td>
                  <a 
                    href="" 
                    class="{{ $key->flag == 'Y' ? 'unpublis' : 'publis' }}" 
                    data-value="{{ route('adpor.penzis.banpen.flag', ['id'=>encrypt($key->id)]) }}" 
                    data-toggle="modal" 
                    data-target=".modal-aksi"
                  >
                    <span 
                      class="btn btn-xs {{ $key->flag == 'Y' ? 'btn-success' : 'btn-danger' }}" 
                      data-toggle="tooltip" 
                      data-placement="top" 
                      title="{{ $key->flag == 'Y' ? 'Click to Unpublis' : 'Click to Publis' }}"
                    >
                      <i class="fa {{ $key->flag == 'Y' ? 'fa-thumbs-up' : 'fa-thumbs-down' }}"></i>
                    </span>
                  </a>
                  <a 
                    href="" 
                    class="update"
                    data-toggle="modal" 
                    data-target=".modal-form"
                    data-action = "{{ route('adpor.penzis.banpen.ubahSimpan', ['id'=>encrypt($key->id)]) }}"
                    data-nama = "{!! $key->bank_nama !!}"
                  >
                    <span 
                      class="btn btn-xs btn-info" 
                      data-toggle="tooltip" 
                      data-placement="top" 
                      title="Click to Update"
                    >
                      <i class="fa fa-pencil-square-o"></i>
                    </span>
                  </a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>



@endsection

@section('script')
<script src="{{ asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/vendors/datatables.net-scroller/js/datatables.scroller.min.js') }}"></script>
<script type="text/javascript">
  $('#table-data').DataTable();

  $(function(){
    $('#table-data').on('click', 'a.publis', function(){
      var a = $(this).data('value');
      $('#aksi-url').attr('href', a);
      $('#title-aksi').html("Publikasi Berita Acara");
      $('#text-aksi').html("Meng-publikasi Berita Acara Ini?");
    });
    $('#table-data').on('click', 'a.unpublis', function(){
      var a = $(this).data('value');
      $('#aksi-url').attr('href', a);
      $('#title-aksi').html("Non-Publikasi Berita Acara");
      $('#text-aksi').html("Meng-Non-publikasi Berita Acara Ini?");
    });
    $('#table-data').on('click', 'a.update', function(){
      var x = $(this).data('action');
      var a = $(this).data('nama');
      $('form#form').attr('action', x);
      $('#form-title').html("Update Bank : "+a);
      $('input#nama').attr('value', a);
    });
    $(document).on('click', 'button#trigerTambah', function(){
      $('form#form').attr('action', "{{ route('adpor.penzis.banpen.simpan') }}");
      $('#form-title').html("Tambah Bank Penerima");
    });
  });
</script>

@if(Session::has('false-form'))
<script>
  $('.modal-form').modal('show');
  $('form#form').attr('action', "{{ route('adpor.penzis.banpen.simpan') }}");
  $('#form-title').html("Tambah Bank Penerima");
</script>
@endif

@if(Session::has('false-form-update'))
<script>
  $('.modal-form').modal('show');
  $('form#form').attr('action', "{{ Session::get('action') }}");
  $('#form-title').html("Update Bank : {{ Session::get('nama') }}");
  $('input#nama').attr('value', "{{ Session::get('nama') }}");
</script>
@endif

@endsection
