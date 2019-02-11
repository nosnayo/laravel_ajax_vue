@extends('layouts.master')
	@section('content')
	
 		{{--PARA LARAVEL COLLETIVE
		{!! Form::select('state', $states->pluck('name')) !!}
		--}}
		{{--PARA HTML
		<select name="state">
        	@foreach($states as $item) 
       		 <option value= " {{ $item->id }} "> {{$item->name}} </option>
        	@endforeach
   		 </select>
		--}}
		{!! Form::select('state', $states->pluck('name')) !!}
		{!! Form::select('') !!}
	@endsection