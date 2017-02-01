<select class="ui fluid dropdown second_select_header" title="">
    <option value="null select">Choisissez un article</option>
    @foreach($select as $key )
        @if(!empty($key->name))
            <optgroup label="{{ $key->name }}"></optgroup>
        @endif

            <option value="{{ $key->value }}">{{ $key->option_name }}</option>

    @endforeach
</select>
<select class="ui fluid dropdown secondSelect" title="format_reference">
    <option value="null">
        Choisissez
        le format
    </option>
    <option value="CUSTOM">Format personnalisé</option>
    @if(!empty($tableName))
        @foreach($tableName as $value)
            <option class="selectOption" value="{{ $value->value }}">{{ $value->name }} ({{ $value->size }})</option>
        @endforeach
    @endif
</select>

