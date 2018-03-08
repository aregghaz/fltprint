<div class=" col-md-2 col-md-offset-1">
    <div class="list-group" id="left-navigation">
        <div class="list-group-item active">Produits</div>
        @foreach($menu as $key )
            @if(!empty($key->option_group_id))
                <div class="list-group-item menu_slider" data-toggle="collapse"  id="{{ $key->option_group_id }}">{{ $key->option_name }}</div>
            @else
                <a  title="{{ $key->table_name }}" class="product list-group-item {{ $key->option_id }}" style="display: none">{{ $key->option_name }}</a>
            @endif
        @endforeach

    </div>
</div>