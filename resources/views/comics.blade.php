@extends('layouts.app')

@section('content')
    <h2>pagina dei comics</h2>
    {{-- @for ($i = 0; $i < $data ; $i++)
        <P>ciao</P>
    @endfor --}}
    @foreach ($data as $item)
        <p>{{$item}}</p>
        
    @endforeach
@endsection 