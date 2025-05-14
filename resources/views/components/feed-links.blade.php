@if(isset($feeds))
    @foreach($feeds as $feed)
        <link rel="alternate" type="{{ $feed['type'] }}" href="{{ $feed['url'] }}" title="{{ $feed['title'] }}">
    @endforeach
@endif