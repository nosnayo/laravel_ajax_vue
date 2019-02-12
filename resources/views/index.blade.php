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
		{!! Form::select('state', $states->pluck('name'), null, ['id'=>'state' ,'placeholder'=>'selecciona' ]) !!}
		{{--se plantea lo siguiente de "ahi" se trabaja el scritp de ajax totalmente--}}
		{!! Form::select('town',['placeholder'=>'Selecciona'], null,['id'=>'town']) !!}
	@endsection