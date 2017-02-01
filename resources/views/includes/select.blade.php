<select class="ui fluid dropdown selectArticle" title="">
    <option value="null">Choisissez un article</option>
    @foreach($select as $key )
        @if(!empty($key->name))
            <optgroup label="{{ $key->name }}">
            </optgroup>
        @endif
        @if($selectValue == $key->value)
            <option value="{{ $key->value }}" selected>{{ $key->option_name }}</option>
        @else
            <option value="{{ $key->value }}">{{ $key->option_name }}</option>
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
            @if($product[0] == $value->value)=
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

