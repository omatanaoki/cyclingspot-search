@if (Auth::user()->is_favorite($alert->id))
    <div id="favorite_parent{{$alert->id}}" class="unfavorite">
        <span id="favorite{{$alert->id}}" class="far fa-thumbs-up" onclick="postFavorite({{ $alert->id }}, {{ count($alert->favorited)}})"></span>
    </div>
@else
    <div id="favorite_parent{{$alert->id}}" class="favorite">
        <span id="favorite{{$alert->id}}" class="far fa-thumbs-up" onclick="postFavorite({{ $alert->id }}, {{ count($alert->favorited)}})"></span>
    </div>
@endif
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/favorite.js') }}"></script>
<link rel="stylesheet" href="{{asset('/css/favorite_button.css')}}">