@extends('layouts.admin')

@section('title', 'Create News &amp; Events')

@section('content')
<section>
  <div class="container">
    <h2 class="text-center">Tambah News &amp; Events</h2>
    <div class="row">
        {!! Form::open(array('url' => 'admin/blog','class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}

            @if(count($errors) > 0)
                <div class="style-msg2 errormsg">
                    <div class="msgtitle">Perbaiki kesalahan berikut:</div>
                    <div class="sb-msg">
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">

                {{ Form::label('tag', 'Kategori *', array('class' => 'col-md-2 control-label')) }}
                <div class="col-md-9">

                    {{ Form::select('tag', array('1' => 'Event', '2' => 'News'), null, array('class' => 'sm-form-control', 'placeholder' => '-- Pilih kategori --')) }}

                </div>
            </div>

            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                {{ Form::label('title', 'Judul *', array('class' => 'col-md-2 control-label')) }}
                <div class="col-md-9">

                    {{ Form::text('title', null, array('class' => 'sm-form-control')) }}

                </div>
            </div>

            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">

                {{ Form::label('content', 'Konten *', array('class' => 'col-md-2 control-label')) }}
                <div class="col-md-9">

                    {{ Form::textarea('content', null, array('class' => 'sm-form-control')) }}

                </div>
            </div>

            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">

                {{ Form::label('image','Gambar Cover *',array('class' => 'col-md-2 control-label')) }}
                <div class="col-md-9">

                    {{ Form::file('image' ,array('class' => 'sm-form-control')) }}

                </div>
            </div>




            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn button-3d button-large btn-block nomargin">
                        <i class="fa fa-btn fa-user"></i>Kirim
                    </button>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
</section>
@endsection
