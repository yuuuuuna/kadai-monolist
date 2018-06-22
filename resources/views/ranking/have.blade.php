@extends('layouts.app')

@section('content')
    <h1>Haveランキング</h1>
    @include('items.items_for_have', ['items' => $items])
@endsection