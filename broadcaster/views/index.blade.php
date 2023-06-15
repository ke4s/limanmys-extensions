@extends('layouts.master')


@section('content')
<h2 class="text-bold">{{ __("BROADCASTER") }}</h2>

    <p>Mesajını tüm kullanıcılarda banner'lı/bannersız yayınla</p>
    <div id="broadcaster" class="tab-pane active">
        @include('broadcaster.main')
    </div>

   
@endsection