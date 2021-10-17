@section('title', 'Error')

@include('header')

<style type="text/css">
	.title {
		visibility: hidden;
	}
	h1{
		position: absolute;
		text-align: center;
		left: 50%;
		transform: translate(-50%,-50%);
		top: 50%;
		z-index: 999999;
		font-size: 20rem;
	}
	h4 {
		position: absolute;
		left: 50%;
		top: 30%;
		font-size: 5rem;
		transform: translate(-50%,-30%);
	}
	.gth {
		position: absolute;
		left: 50%;
		bottom: 20%;
		transform: translate(-50%,-20%);
	}
	.gth a {
		font-size: 2.5rem;
		color: #000;
		border: 1px solid;
		padding: 0.5rem 4rem;
	}
</style>
<div class="container" style="min-height: 100vh;position: relative;">
	<h1>404</h1>
	<h4>Page Not Found.</h4>

	<div class="gth">
		<a href="{{ route('showme') }}">Return to Home</a>
	</div>
</div>

@include('footer')