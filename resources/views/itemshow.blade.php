@extends('layouts.app')

@section('title', 'Home')

@section('navbar')
    @parent
@endsection

@section('content')

    <div class="row">
  <div class="small-8 medium-6 large-5 small-centered columns">
      <br />
    <div class="callout">
        <h2>Name: {{$item->name}}</h2>
      
      <p>Rarity: {{$item->rarity}}<br />
      Max Offer Unit Price: {{$item->max_unit_price}}</p>
    </div>
  </div>
  
  </div>

@endsection

