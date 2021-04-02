@extends('layouts.app')

@section('content')
    <h1 class="text-center font-weight-bold font-family-Tahoma">CYCLING  INFORMATION</h1>
    <div class='form-row'>
        <div class="col-md-4 offset-md-8">
            <div class="submit-select">
                <span>@include('commons.area_search')</span>
                <span>
                    <form id="submit_form" method="get" action="city_searches">
                        <div class="city">
                            @include('cities.search_hokkaido')
                        </div>
                    </form>
                </span>
            </div>
        </div>
    </div>
    <div class="posts">
        @include('alerts.posts', ['alerts'=>$alerts])
    </div>
@endsection
