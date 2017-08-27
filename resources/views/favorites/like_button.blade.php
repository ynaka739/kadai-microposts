@if (Auth::user()->is_favorite($micropost->id))
    {!! Form::open(['route' => ['user.dislike', $user->id], 'method' => 'delete']) !!}
        {!! Form::submit('Dislike', ['class' => "btn btn-danger btn-xs"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.like', $user->id]]) !!}
        {!! Form::submit('Like', ['class' => "btn btn-primary btn-xs"]) !!}
    {!! Form::close() !!}
@endif