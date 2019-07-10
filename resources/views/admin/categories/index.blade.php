@extends('layouts.app')

@section('title', ' - Categories')

@section('content')
    <h1>Categories</h1>
    <p>ABCD</p>
    <category-manager :categories="{{ $categories }}"></category-manager>
@endsection