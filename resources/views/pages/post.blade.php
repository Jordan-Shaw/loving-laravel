@extends ('layouts.default')

@section('content')
  @component ('..partials.title')
    {{$post->title}}
  @endcomponent
  <p>{{$post->body}}</p>
@endsection