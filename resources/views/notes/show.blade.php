@extends('layouts.app')

@section('content')
<a href="{{ route('note.index')}}">Back</a>
<h1>{{ $note->title }}</h1>
<p>{{ $note->description}}</p>
<p>{{ $note->edad }}</p>
<p>{{ $note->telefono }}</p>
<p>{{ $note->direccion }}</p>
<p>{{ $note->abono }}</p>
<p>{{ $note->abonose }}</p>
<p>{{ $note->total }}</p>
<p>{{ $note->turno }}</p>

@endsection