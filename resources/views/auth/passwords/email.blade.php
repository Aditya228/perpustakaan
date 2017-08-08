@extends('layouts.app')

@section('content')
{!! Form::open(['url'=>'/password/email','class'=>'form-horizontal'])!!}
<div class="form-group{{$errors->has('email')?'has-error':''}}">
    {!! Form::label('email','Alamat Email',['class'=>'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::email('email',null,['class'=>'form-control']) !!}
        {!! $errors->first('email','<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-envelope"></i> Kirim Link Reset Password
        </button>
    </div>
</div>

{!! Form::close() !!}
@endsection
