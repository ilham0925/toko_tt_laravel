@extends('try_blade.index');

@section('content')
    @component('try_blade.alert')
    @slot('title')
        wew
    @endslot
        <strong>warning</strong>
    @endcomponent
    <h2>hallo</h2>
@endsection
