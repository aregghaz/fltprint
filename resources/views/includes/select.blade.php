<div>
    <select class="form-control selectArticle" name="selectArticle" title="">
        <option value="null">Choisissez un article</option>
        @foreach($select as $key )
            @if(!empty($key->option_group_id))
                <optgroup label="{{ $key->option_name }}">
                </optgroup>
            @endif
            @if(!empty($selectName) and $selectName == $key->table_name)
                <option value="{{ $key->value }}" title="{{ $key->table_name }}"
                        selected>{{ $key->option_name }}</option>
            @elseif(!empty($key->option_id))
                <option value="{{ $key->value }}"
                        title="{{ $key->table_name }}">{{ $key->option_name }}</option>
            @endif
        @endforeach
    </select>
    <select class="form-control format" title="format_reference">
        <option value="null">
            Choisissez
            le format
        </option>
        <option value="CUSTOM">Format personnalisé</option>
        @if(!empty($tableName))
            @foreach($tableName as $value)
                @if( !empty($product[0]) and $product[0] == $value->value)
                    <option class="selectOption" value="{{ $value->value }}" selected>{{ $value->name }}
                        ({{ $value->size }})
                    </option>
                @else
                    <option class="selectOption" value="{{ $value->value }}">{{ $value->name }} ({{ $value->size }})
                    </option>
                @endif
            @endforeach
        @endif
    </select>
    <div class="hidden_input_price" style="display: none">@if(!empty($productPrice))
            @foreach($productPrice as $value)
                @if(!empty($value->count_1))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_1 }}">
                @endif
                @if(!empty($value->count_2))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_2 }}">
                @endif
                @if(!empty($value->count_3))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_3 }}">
                @endif
                @if(!empty($value->count_4))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_4 }}">
                @endif
                @if(!empty($value->count_5))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_5 }}">
                @endif
                @if(!empty($value->count_6))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_6 }}">
                @endif
                @if(!empty($value->count_7))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_7 }}">
                @endif
                @if(!empty($value->count_8))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_8 }}">
                @endif
                @if(!empty($value->count_9))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_9 }}">
                @endif
                @if(!empty($value->count_10))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_10}}">
                @endif
                @if(!empty($value->count_11))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_11 }}">
                @endif
                @if(!empty($value->count_12))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_12 }}">
                @endif
                @if(!empty($value->count_13))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_13 }}">
                @endif
                @if(!empty($value->count_14))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_14 }}">
                @endif
                @if(!empty($value->count_15))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_15 }}">
                @endif
                @if(!empty($value->count_16))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_16 }}">
                @endif
                @if(!empty($value->count_17))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_17 }}">
                @endif
                @if(!empty($value->count_18))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_18 }}">
                @endif
                @if(!empty($value->count_19))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_19 }}">
                @endif
                @if(!empty($value->count_20))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_20 }}">
                @endif
                @if(!empty($value->count_21))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_21 }}">
                @endif
                @if(!empty($value->count_22))
                    <input class="productPrice" title="" type="hidden" value="{{ $value->count_22 }}">
                @endif
            @endforeach
        @endif</div>
    <div class="hidden_input_count" style="display: none">@if(!empty($productCount))
            @foreach($productCount as $value)
                @if(!empty($value->count_1))
                    <input class="productCount" title="" type="text" value="{{ $value->count_1 }}">
                @endif
                @if(!empty($value->count_2))
                    <input class="productCount" title="" type="text" value="{{ $value->count_2 }}">
                @endif
                @if(!empty($value->count_3))
                    <input class="productCount" title="" type="text" value="{{ $value->count_3 }}">
                @endif
                @if(!empty($value->count_4))
                    <input class="productCount" title="" type="text" value="{{ $value->count_4 }}">
                @endif
                @if(!empty($value->count_5))
                    <input class="productCount" title="" type="text" value="{{ $value->count_5 }}">
                @endif
                @if(!empty($value->count_6))
                    <input class="productCount" title="" type="text" value="{{ $value->count_6 }}">
                @endif
                @if(!empty($value->count_7))
                    <input class="productCount" title="" type="text" value="{{ $value->count_7 }}">
                @endif
                @if(!empty($value->count_8))
                    <input class="productCount" title="" type="text" value="{{ $value->count_8 }}">
                @endif
                @if(!empty($value->count_9))
                    <input class="productCount" title="" type="text" value="{{ $value->count_9 }}">
                @endif
                @if(!empty($value->count_10))
                    <input class="productCount" title="" type="text" value="{{ $value->count_10}}">
                @endif
                @if(!empty($value->count_11))
                    <input class="productCount" title="" type="text" value="{{ $value->count_11 }}">
                @endif
                @if(!empty($value->count_12))
                    <input class="productCount" title="" type="text" value="{{ $value->count_12 }}">
                @endif
                @if(!empty($value->count_13))
                    <input class="productCount" title="" type="text" value="{{ $value->count_13 }}">
                @endif
                @if(!empty($value->count_14))
                    <input class="productCount" title="" type="text" value="{{ $value->count_14 }}">
                @endif
                @if(!empty($value->count_15))
                    <input class="productCount" title="" type="text" value="{{ $value->count_15 }}">
                @endif
                @if(!empty($value->count_16))
                    <input class="productCount" title="" type="text" value="{{ $value->count_16 }}">
                @endif
                @if(!empty($value->count_17))
                    <input class="productCount" title="" type="text" value="{{ $value->count_17 }}">
                @endif
                @if(!empty($value->count_18))
                    <input class="productCount" title="" type="text" value="{{ $value->count_18 }}">
                @endif
                @if(!empty($value->count_19))
                    <input class="productCount" title="" type="text" value="{{ $value->count_19 }}">
                @endif
                @if(!empty($value->count_20))
                    <input class="productCount" title="" type="text" value="{{ $value->count_20 }}">
                @endif
                @if(!empty($value->count_21))
                    <input class="productCount" title="" type="text" value="{{ $value->count_21 }}">
                @endif
                @if(!empty($value->count_22))
                    <input class="productCount" title="" type="text" value="{{ $value->count_22 }}">
                @endif
            @endforeach
        @endif</div>
</div>
