@extends('Base::layout')

@section('header')
    Zones
@endsection

@section('content')
    <table class="table table-hover table-responsive">
        <thead>
            <th>
                Sr. No.
            </th>
            <th>
                Name
            </th>
            <th>
                Actions
            </th>
        </thead>
        <tbody>
            <?php $i = $zones->firstItem(); ?>
        @forelse( $zones as $zone )
            <tr>
                <td>{{$i}}</td>
                <td>{{$zone->name}}</td>
                <td>
                    {!! Form::open(['route'=>'zones.delete']) !!}
                    {!! Form::hidden('id', $zone->id) !!}
                    <div class="btn-group-xs btn-group">
                        <a href="{{route('zones.edit', [$zone->id])}}" class="btn btn-default btn-flat">modify</a>
                        <button type="submit" class="btn btn-flat btn-danger" onclick="return confirm('Are You Sure?')">
                            Delete
                        </button>
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            <?php $i++; ?>
            @empty
            <tr>
                <td colspan="3">
                    No Records Found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
@endsection