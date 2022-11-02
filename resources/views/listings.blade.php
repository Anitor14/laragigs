<h1>{{ $heading }}</h1>

@if (count($listing) == 0)
<p>No Listings found</p>
@endif
@foreach ( $listings as $listing )
<h2>
    {{ $listing['title'] }}
</h2>
<h2>
    {{ $listing['description'] }}
</h2>
@endforeach
