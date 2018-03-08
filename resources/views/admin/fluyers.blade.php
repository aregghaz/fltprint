@extends('page.admin')
@section('title')

@endsection
@section('content')
    <div class="ui fourteen column centered grid body">
        @include('admin.includes.slider')

        <div class="nine wide column">
            <div class="ui grid">
                <div class="fourteen wide column">
                    <input type="hidden" id="tableValue" value="{{$value}}">
                    <h2>{{$messageHeader }}</h2>

                    <h3>Prix</h3>
                    @include('admin.includes.table')
                </div>

                <form action="{{ route(''.$rootName .'') }}" class="ui form" method="post" id="forms">
                    <div id="formBody" style="display: inline-block">

                    </div>
                    <input type="hidden" name="_token" value="{{  Session::token() }}">
                    <button class="ui primary button" type="submit" style="display: table;margin-left: 10px;">Save</button>
                </form>
                <div class="ui modal">
                    <div class="header">Header</div>
                    <div class="content">
                        <form action="{{ route(''.$editRootName .'') }}" method="post">
                            <div class="modal_body" style="display: inline-block">

                            </div>
                            <div class="actions">
                                <div class="ui black deny button">
                                   Exite
                                </div>
                                <button class="ui positive right labeled icon button" type="submit" style="padding-right: 1.5em!important;">
                                    Save
                                </button>
                                <input type="hidden" id="rowId" name="row_id_edite" value="">
                                <input type="hidden" name="_token" value="{{  Session::token() }}">
                            </div>
                        </form>
                    </div>
                </div>
                @if(!empty($thirdTable))
                    <div class="six wide column format_size">
                        <h3>Taille des formats</h3>
                        <div class="ui horizontal list">
                            <div class="item table_body">
                                @foreach($thirdTable as $key)
                                    <div class="content">
                                        <div class="table_name">{{ $key->name }}</div>
                                        <div class="table_format">{{ $key->format }}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        var urlsendIdFluyers135 = '{{ route('urlsendIdFluyers135') }}';
        var urlsendIdFluyers170 = '{{ route('urlsendIdFluyers170') }}';
        var urlsendIdFluyers250 = '{{ route('urlsendIdFluyers250') }}';
        var urlsendIdFlyers300Plastic = '{{ route('urlsendIdFlyers300Plastic') }}';
        var urlsendIdFlyers300 = '{{ route('urlsendIdFlyers300') }}';
        var urlsendIdFlyers300Greenline = '{{ route('urlsendIdFlyers300Greenline') }}';
        var urlsendIdFlyers350 = '{{ route('urlsendIdFlyers350') }}';
        var urlsendIdFlyers300Brilante = '{{ route('urlsendIdFlyers300Brilante') }}';
        var urlsendIdFlyers300Plastic = '{{ route('urlsendIdFlyers300Plastic') }}';
        var token = '{{  Session::token() }}';
    </script>

@endsection