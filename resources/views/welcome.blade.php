@extends('page.index')
@section('title')

@endsection

@section('content')
    @include('includes.header')
    <div class="ui fourteen column centered grid ">
    @include('includes.body-slider')
        <div class="nine wide column">
            </div>
    </div>
@endsection