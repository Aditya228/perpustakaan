<div class="form-group{{$errors->has('judul')?'has-error':''}}">
	{!! Form::label('judul','Judul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('judul',null,['class'=>'form-control']) !!}
		{!! $errors->first('judul','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{$errors->has('amount')?'has-error':''}}">
	{!! Form::label('amount','Stock',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::number('amount',null,['class'=>'form-control']) !!}
		{!! $errors->first('amount','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {!! $errors->has('author')?'has-error':'' !!}">
	{!! Form::label('author','Pengarang',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('author',null,['class'=>'form-control']) !!}
		{!! $errors->first('author','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{$errors->has('penerbit')?'has-error':''}}">
	{!! Form::label('penerbit','Penerbit',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('penerbit',null,['class'=>'form-control']) !!}
		{!! $errors->first('penerbit','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{$errors->has('tahun')?'has-error':''}}">
	{!! Form::label('tahun','Tahun',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('tahun',null,['class'=>'form-control']) !!}
		{!! $errors->first('tahun','<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group{{$errors->has('cover')?'has-error':''}}">
	{!! Form::label('cover','Cover',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::file('cover') !!}
		@if (isset($book)&& $book->cover)
		<p>
			{!! Html::image(asset('img/'.$book->cover),null,['class'=>'img-rounded img-responsive']) !!}
		</p>
		@endif
		{!! $errors->first('cover','<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan',['class'=>'btn btn-primary']) !!}
	</div>
</div>