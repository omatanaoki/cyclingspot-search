<div class="card-body"> 
    @if($user->image == null)
        <img class="" src="{{ Gravatar::src($user->email) }}" alt="" style="border-radius:10px; margin-bottom:3px; width:185px; max-height:250px;">
    @else
        <img src="{{$user->image}}" style="border-radius:10px;margin-bottom:3px; width:185px; height:185px;">
    @endif
    <div style="width:100px; width:185px; margin:0 auto;">
        @include('user_follow.follow_button', ['user'=>$user])
    </div>
</div>
