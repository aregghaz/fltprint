<table class="ui selectable celled table" style="width: auto; float: none">
    <thead>
    <tr>
        @foreach($firstTable as $key)
            <th>{{ $key->name }}</th>

        @endforeach
    </tr>
    </thead>
    <tbody>

    <tr>
        @foreach($firstTable as  $key)
            @if(!empty($key->count_1))
                @if($key->id !== 1 and !empty($key->count_1_href ))
                    <td><a href="{{ $key->count_1_href }}">{{ $key->count_1 }}</a></td>
                @else
                    <td>{{ $key->count_1 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_2))
                @if($key->id !== 1 and !empty($key->count_2_href ))
                    <td><a href="{{ $key->count_2_href }}">{{ $key->count_2 }}</a></td>
                @else
                    <td>{{ $key->count_2 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_3 ))
                @if($key->id !== 1  and !empty($key->count_3_href ))
                    <td><a href="{{ $key->count_3_href }}">{{ $key->count_3 }}</a></td>
                @else
                    <td>{{ $key->count_3 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_4))
                @if($key->id !== 1 and !empty($key->count_4_href ) )
                    <td><a href="{{ $key->count_4_href }}">{{ $key->count_4 }}</a></td>
                @else
                    <td>{{ $key->count_4 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_5))
                @if($key->id !== 1 and !empty($key->count_5_href ))
                    <td><a href="{{ $key->count_5_href }}">{{ $key->count_5 }}</a></td>
                @else
                    <td>{{ $key->count_5 }}</td>
                @endif

            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_6))
                @if($key->id !== 1 and !empty($key->count_6_href ))
                    <td><a href="{{ $key->count_6_href }}">{{ $key->count_6 }}</a></td>
                @else
                    <td>{{ $key->count_6 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_7))
                @if($key->id !== 1 and !empty($key->count_7_href ))
                    <td><a href="{{ $key->count_7_href }}">{{ $key->count_7 }}</a></td>
                @else
                    <td>{{ $key->count_7 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_8))
                @if($key->id !== 1 and !empty($key->count_8_href ))
                    <td><a href="{{ $key->count_8_href }}">{{ $key->count_8 }}</a></td>
                @else
                    <td>{{ $key->count_8 }}</td>

                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_9))
                @if($key->id !== 1 and !empty($key->count_9_href ))
                    <td><a href="{{ $key->count_9_href }}">{{ $key->count_9 }}</a></td>
                @else
                    <td>{{ $key->count_9 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_10))
                @if($key->id !== 1 and !empty($key->count_10_href ))
                    <td><a href="{{ $key->count_10_href }}">{{ $key->count_10 }}</a></td>
                @else
                    <td>{{ $key->count_10 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_11))
                @if($key->id !== 1 and !empty($key->count_11_href ))
                    <td><a href="{{ $key->count_11_href }}">{{ $key->count_11 }}</a></td>
                @else
                    <td>{{ $key->count_11 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_12))
                @if($key->id !== 1 and !empty($key->count_12_href ))
                    <td><a href="{{ $key->count_12_href }}">{{ $key->count_12 }}</a></td>
                @else
                    <td>{{ $key->count_12 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_13))
                @if($key->id !== 1 and !empty($key->count_13_href ))
                    <td><a href="{{ $key->count_13_href }}">{{ $key->count_13 }}</a></td>
                @else
                    <td>{{ $key->count_13 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_14))
                @if($key->id !== 1 and !empty($key->count_14_href ))
                    <td><a href="{{ $key->count_14_href }}">{{ $key->count_14 }}</a></td>
                @else
                    <td>{{ $key->count_14 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_15))
                @if($key->id !== 1 and !empty($key->count_15_href ))
                    <td><a href="{{ $key->count_15_href }}">{{ $key->count_15 }}</a></td>
                @else
                    <td>{{ $key->count_15 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_16))
                @if($key->id !== 1 and !empty($key->count_16_href ))
                    <td><a href="{{ $key->count_16_href }}">{{ $key->count_16 }}</a></td>
                @else
                    <td>{{ $key->count_16 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_17))
                @if($key->id !== 1 and !empty($key->count_17_href ))
                    <td><a href="{{ $key->count_17_href }}">{{ $key->count_17}}</a></td>
                @else
                    <td>{{ $key->count_17}}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_18))
                @if($key->id !== 1 and !empty($key->count_18_href ))
                    <td><a href="{{ $key->count_18_href }}">{{ $key->count_18 }}</a></td>
                @else
                    <td>{{ $key->count_18 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_19))
                @if($key->id !== 1 and !empty($key->count_19_href ))
                    <td><a href="{{ $key->count_19_href }}">{{ $key->count_19 }}</a></td>
                @else
                    <td>{{ $key->count_19 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_20))
                @if($key->id !== 1 and !empty($key->count_20_href ))
                    <td><a href="{{ $key->count_20_href }}">{{ $key->count_20 }}</a></td>
                @else
                    <td>{{ $key->count_20 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_21))
                @if($key->id !== 1 and !empty($key->count_21_href ))
                    <td><a href="{{ $key->count_21_href }}">{{ $key->count_21 }}</a></td>
                @else
                    <td>{{ $key->count_21 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_22))
                @if($key->id !== 1 and !empty($key->count_22_href ))
                    <td><a href="{{ $key->count_22_href }}">{{ $key->count_22 }}</a></td>
                @else
                    <td>{{ $key->count_22 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_23))
                @if($key->id !== 1 and !empty($key->count_23_href ))
                    <td><a href="{{ $key->count_23_href }}">{{ $key->count_23 }}</a></td>
                @else
                    <td>{{ $key->count_23 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_24))
                @if($key->id !== 1 and !empty($key->count_24_href ))
                    <td><a href="{{ $key->count_24_href }}">{{ $key->count_24 }}</a></td>
                @else
                    <td>{{ $key->count_24 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_25))
                @if($key->id !== 1 and !empty($key->count_25_href ))
                    <td><a href="{{ $key->count_25_href }}">{{ $key->count_25 }}</a></td>
                @else
                    <td>{{ $key->count_25 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_26))
                @if($key->id !== 1 and !empty($key->count_26_href ))
                    <td><a href="{{ $key->count_25_href }}">{{ $key->count_26 }}</a></td>
                @else
                    <td>{{ $key->count_26}}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_27))
                @if($key->id !== 1 and !empty($key->count_27_href ))
                    <td><a href="{{ $key->count_27_href }}">{{ $key->count_27 }}</a></td>
                @else
                    <td>{{ $key->count_27 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_28))
                @if($key->id !== 1 and !empty($key->count_28_href ))
                    <td><a href="{{ $key->count_28_href }}">{{ $key->count_28 }}</a></td>
                @else
                    <td>{{ $key->count_28 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_29))
                @if($key->id !== 1 and !empty($key->count_29_href ))
                    <td><a href="{{ $key->count_29_href }}">{{ $key->count_29 }}</a></td>
                @else
                    <td>{{ $key->count_29 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_30))
                @if($key->id !== 1 and !empty($key->count_30_href ))
                    <td><a href="{{ $key->count_30_href }}">{{ $key->count_30 }}</a></td>
                @else
                    <td>{{ $key->count_30 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_31))
                @if($key->id !== 1 and !empty($key->count_31_href ))
                    <td><a href="{{ $key->count_31_href }}">{{ $key->count_31 }}</a></td>
                @else
                    <td>{{ $key->count_31 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if(!empty($key->count_32))
                @if($key->id !== 1 and !empty($key->count_32_href ))
                    <td><a href="{{ $key->count_32_href }}">{{ $key->count_32 }}</a></td>
                @else
                    <td>{{ $key->count_32 }}</td>
                @endif
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if($key->id !== 1 )
                <td>
                    <a href="{{ route(''.$rowDelete .'', ['product_id' => $key->id ]) }}">
                        <i class="trash outline icon"></i>
                    </a>
                </td>
            @else
                <td></td>
            @endif
        @endforeach
    </tr>
    <tr>
        @foreach($firstTable as $key)
            @if($key->id !== 1 )
                <td>
                   <span class="edit_row">
                         <input type="hidden" class="rowId" name="row_id" value="{{ $key->id }}">
                       <i class="edit icon"></i>
                   </span>
                </td>
            @else
                <td></td>
            @endif
        @endforeach
    </tr>
    </tbody>

</table>

<table style="display: none">
    @foreach($firstTable as $key)
        @if(!empty($key->name))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->name}}</span>
            @else
                <td>{{$key->name}}</td>
            @endif
        @endif
        @if(!empty($key->count_1))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_1}}</span>
            @else
                <td>{{$key->count_1}}</td>
            @endif
        @endif
        @if(!empty($key->count_2))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_2}}</span>
            @else
                <td>{{$key->count_2}}</td>
            @endif
        @endif
        @if(!empty($key->count_3))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_3}}</span>
            @else
                <td>{{$key->count_3}}</td>
            @endif
        @endif
        @if(!empty($key->count_4))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_4}}</span>
            @else
                <td>{{$key->count_4}}</td>
            @endif
        @endif
        @if(!empty($key->count_5))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_5}}</span>
            @else
                <td>{{$key->count_5}}</td>
            @endif
        @endif
        @if(!empty($key->count_6))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_6}}</span>
            @else
                <td>{{$key->count_6}}</td>
            @endif
        @endif
        @if(!empty($key->count_7))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_7}}</span>
            @else
                <td>{{$key->count_7}}</td>
            @endif
        @endif
        @if(!empty($key->count_8))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_8}}</span>
            @else
                <td>{{$key->count_8}}</td>
            @endif
        @endif
        @if(!empty($key->count_9))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_9}}</span>
            @else
                <td>{{$key->count_9}}</td>
            @endif
        @endif
        @if(!empty($key->count_10))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_10}}</span>
            @else
                <td>{{$key->count_10}}</td>
            @endif
        @endif
        @if(!empty($key->count_11))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_11}}</span>
            @else
                <td>{{$key->count_11}}</td>
            @endif
        @endif
        @if(!empty($key->count_12))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_12}}</span>
            @else
                <td>{{$key->count_12}}</td>
            @endif
        @endif
        @if(!empty($key->count_13))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_13}}</span>
            @else
                <td>{{$key->count_13}}</td>
            @endif
        @endif
        @if(!empty($key->count_14))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_14}}</span>
            @else
                <td>{{$key->count_14}}</td>
            @endif
        @endif
        @if(!empty($key->count_15))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_15}}</span>
            @else
                <td>{{$key->count_15}}</td>
            @endif
        @endif
        @if(!empty($key->count_16))
            @if($key->id == 1)
                <span style="display: none" class="table_name">{{$key->count_16}}</span>
            @else
                <td>{{$key->count_16}}</td>
            @endif
        @endif
    @endforeach
</table>