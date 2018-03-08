<div>
    <select class="ui fluid dropdown selectArticle secondSelect" name="selectArticle" title="">
        <option value="null">Choisissez un article</option>
        @foreach($select as $key )
            @if(!empty($key->option_group_id))
                <optgroup label="{{ $key->option_name }}">
                </optgroup>
            @elseif(!empty($key->option_id))
                <option  value="{{ $key->value }}"
                         title="{{ $key->table_name }}">{{ $key->option_name }}</option>
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
                <option class="selectOption" value="{{ $value->value }}">{{ $value->name }} ({{ $value->size }})
                </option>

            @endforeach
        @endif
    </select>
    <div class="hidden_input_price" style="display: none"></div>
    <div class="hidden_input_count" style="display: none"></div>
</div>
