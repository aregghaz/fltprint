<select class="ui fluid dropdown selectArticle" name="selectArticle" title="">
    <option value="null">Choisissez un article</option>
    @foreach($select as $key )
        @if(!empty($key->name))
            <optgroup label="{{ $key->name }}">
            </optgroup>
        @endif
        @if(!empty($selectValue) and $selectValue == $key->value)
            <option class="asd" value="{{ $key->value }}" title="{{ $key->table_name }}" selected>{{ $key->option_name }}</option>
        @else
            <option class="asd" value="{{ $key->value }}" title="{{ $key->table_name }}">{{ $key->option_name }}</option>
        @endif
    @endforeach
</select>
<select class="ui fluid dropdown format" title="format_reference">
    <option value="null">
        Choisissez
        le format
    </option>
    <option value="CUSTOM">Format personnalisé</option>
    @if(!empty($tableName))
        @foreach($tableName as $value)
            @if( !empty($product[0]) and $product[0] == $value->value)
                <option class="selectOption" value="{{ $value->value }}" selected>{{ $value->name }} ({{ $value->size }}
                    )
                </option>
            @else
                <option class="selectOption" value="{{ $value->value }}">{{ $value->name }} ({{ $value->size }})
                </option>
            @endif
        @endforeach
    @endif
</select>

