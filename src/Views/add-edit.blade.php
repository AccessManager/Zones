@extends('Base::layout')

@section('header')
   Zones
@endsection

@section('breadcrumb')
    <li>
        <a href="">
            Dashboard
        </a>
    </li>
    <li>
        <a href="">
            Zones
        </a>
    </li>
    <li class="active">
        New Zone
    </li>
@endsection
@section('box-header')
    <p class="text-primary">create new zone</p>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            @if(isset($zone))
                {!! Form::model($zone, ['route'=>'zones.edit.post','class'=>'form-horizontal']) !!}
                {!! Form::hidden('id', $zone->id) !!}
                @else
            {!! Form::open(['route'=>'zones.add.post','class'=>'form-horizontal']) !!}
                @endif
            <fieldset>
                <div class="form-group">
                    <div class="col-md-10">
                        {!! Form::text('name', NULL, ['class'=>'form-control','placeholder'=>'name for new zone..']) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="btn-group">
                            <button class="btn btn-default btn-flat">Reset</button>
                            {!! Form::submit('Submit', ['class'=>'btn btn-primary btn-flat']) !!}
                        </div>
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
@endsection