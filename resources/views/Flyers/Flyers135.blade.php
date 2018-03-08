@extends('page.shop')
@section('title')

@endsection
@section('content')
    @include('includes.header')
    <div class="row body_shop">
        @include('includes.body-slider')
        <div class=" col-md-9">
            <h4 id="tableName">{{ $header }}</h4>
            <input type="hidden" id="rootName" value="{{ $rootName }}">
            <input type="hidden" id="selectName" value="{{ $selectName }}">
            <h5>Prix</h5>
            <div class="table-responsive">
                <table class="table table-bordered" style="width: auto; float: none;">
                    <thead>

                    <tr>
                        @foreach($firstTable as $key)
                            <th>{{ $key->name }}</th>

                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_1))
                                @if($key->id == 1 )
                                    <td>{{ $key->count_1 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_1 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>

                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_2))
                                @if($key->id == 1)
                                    <td>{{ $key->count_2 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_2 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_3 ))
                                @if($key->id == 1)
                                    <td>{{ $key->count_3 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_3 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_4))
                                @if($key->id == 1)
                                    <td>{{ $key->count_4 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_4 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_5))
                                @if($key->id == 1)
                                    <td>{{ $key->count_5 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_5 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif

                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_6))
                                @if($key->id == 1)
                                    <td>{{ $key->count_6 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_6 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_7))
                                @if($key->id == 1)
                                    <td>{{ $key->count_7 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_7 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_8))
                                @if($key->id == 1)
                                    <td>{{ $key->count_8 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_8 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>

                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_9))
                                @if($key->id == 1)
                                    <td>{{ $key->count_9 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_9 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_10))
                                @if($key->id == 1)
                                    <td>{{ $key->count_10 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_10 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_11))
                                @if($key->id == 1)
                                    <td>{{ $key->count_11 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_11 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_12))
                                @if($key->id == 1)
                                    <td>{{ $key->count_12 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_12 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_13))
                                @if($key->id == 1)
                                    <td>{{ $key->count_13 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_13 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_14))
                                @if($key->id == 1)
                                    <td>{{ $key->count_14 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_14 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_15))
                                @if($key->id == 1)
                                    <td>{{ $key->count_15 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_15 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_16))
                                @if($key->id == 1)
                                    <td>{{ $key->count_16 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_16 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_17))
                                @if($key->id == 1)
                                    <td>{{ $key->count_17}}</td>
                                @else
                                    <td class="count1">{{ $key->count_17}}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_18))
                                @if($key->id == 1)
                                    <td>{{ $key->count_18 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_18 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_19))
                                @if($key->id == 1)
                                    <td>{{ $key->count_19 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_19 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_20))
                                @if($key->id == 1)
                                    <td>{{ $key->count_20 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_20 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_21))
                                @if($key->id == 1)
                                    <td>{{ $key->count_21 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_21 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_22))
                                @if($key->id == 1)
                                    <td>{{ $key->count_22 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_22 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_23))
                                @if($key->id == 1)
                                    <td>{{ $key->count_23 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_23 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_24))
                                @if($key->id == 1)
                                    <td>{{ $key->count_24 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_24 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_25))
                                @if($key->id == 1)
                                    <td>{{ $key->count_25 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_25 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_26))
                                @if($key->id == 1)
                                    <td>{{ $key->count_26 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_26}}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_27))
                                @if($key->id == 1)
                                    <td>{{ $key->count_27 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_27 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_28))
                                @if($key->id == 1)
                                    <td>{{ $key->count_28 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_28 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_29))
                                @if($key->id == 1)
                                    <td>{{ $key->count_29 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_29 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_30))
                                @if($key->id == 1)
                                    <td>{{ $key->count_30 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_30 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_31))
                                @if($key->id == 1)
                                    <td>{{ $key->count_31 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_31 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($firstTable as $key)
                            @if(!empty($key->count_32))
                                @if($key->id == 1)
                                    <td>{{ $key->count_32 }}</td>
                                @else
                                    <td class="count1">{{ $key->count_32 }}
                                        <input type="hidden" value="{{ $key->id }}">
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2">
                @if(!empty($thirdTable))
                    <h3>Taille des formats</h3>
                    <table class="table table-bordered" style="width: 100%!important;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($thirdTable as $key)
                            <tr>
                                <td>{{ $key->name }}</td>
                                <td>{{ $key->size }}</td>

                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>


    </div>
    @include('includes.futter')
@endsection

