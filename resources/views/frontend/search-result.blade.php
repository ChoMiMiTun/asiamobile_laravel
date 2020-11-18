@extends('frontend/frontendtemplate')

@section('title', 'Item Search')

@section('content')

<section>
	<h3>Search Result</h3>
	<p>5 result(s) for '{{ request()->input('query') }}'</p>
</section>

@endsection