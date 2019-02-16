@extends('admin.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-10 col-sm-offset-2">
        <h1>{{ trans('quickadmin::templates.templates-view_edit-edit') }}</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::model($photography, array('files' => true, 'class' => 'form-horizontal', 'id' => 'form-with-validation', 'method' => 'PATCH', 'route' => array(config('quickadmin.route').'.photography.update', $photography->id))) !!}

<div class="form-group">
    {!! Form::label('photo', 'Photo', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::file('photo') !!}
        {!! Form::hidden('photo_w', 600) !!}
        {!! Form::hidden('photo_h', 400) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('en_text', 'En Text*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('en_text', old('en_text',$photography->en_text), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('ar_text', 'Ar Text*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::text('ar_text', old('ar_text',$photography->ar_text), array('class'=>'form-control')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('settings_id', 'Category*', array('class'=>'col-sm-2 control-label')) !!}
    <div class="col-sm-10">
        {!! Form::select('settings_id', $settings, old('settings_id',$photography->settings_id), array('class'=>'form-control')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      {!! Form::submit(trans('quickadmin::templates.templates-view_edit-update'), array('class' => 'btn btn-primary')) !!}
      {!! link_to_route(config('quickadmin.route').'.photography.index', trans('quickadmin::templates.templates-view_edit-cancel'), null, array('class' => 'btn btn-default')) !!}
    </div>
</div>

{!! Form::close() !!}

@endsection