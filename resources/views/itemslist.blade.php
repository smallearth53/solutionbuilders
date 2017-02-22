@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
@parent
@endsection

@section('content')

{!! Form::open(['url' => 'items/', 'method' => 'get']) !!}
<div class='form-group'>
<input name="search" type="text">
 <label for="rarity">Rarity</label>
<select name="rarity"><option value="0">Junk</option><option value="1">Common</option><option value="2">Fine</option><option value="3">Masterwork</option><option value="4">Rare</option><option value="5">Exotic</option><option value="7">Legendary</option></select>
<label for="type_id">Type</label>
<select name="type_id"><option value="0">Armor</option><option value="19">Back</option><option value="2">Bag</option><option value="3">Consumable</option><option value="4">Container</option><option value="5">Crafting Material</option><option value="6">Gathering</option><option value="7">Gizmo</option><option value="11">Mini</option><option value="13">Tool</option><option value="15">Trinket</option><option value="16">Trophy</option><option value="17">Upgrade Component</option><option value="18">Weapon</option></select>
</div>
<button class="btn btn-success" type="submit">Search</button>


{!! Form::close() !!}


<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th align="right">Rarity</th>
            <th align="center">Min Sale</th>
            <th align="center">Max Offer</th>
            <th align="center">Profit</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($items as $item)
        <tr>
            <td><img class="img-rounded" src='{{ $item->img }}' height='30' width='30'> {{ $item->name }}</td>
            <td>{{ $item->display_rarity($item->rarity)}}</td>
            <td align="right">{!! $item->to_coin($item->min_sale_unit_price)!!}</td>
            <td align="right">{!! $item->to_coin($item->max_offer_unit_price) !!}</td>            
            <td align="right">{!! $item->calculate_profit($item) !!}</td>
        </tr>
        @endforeach

    </tbody>
</table>

{{ $items->links() }}



@endsection

