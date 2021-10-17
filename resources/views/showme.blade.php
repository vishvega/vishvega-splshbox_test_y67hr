
@section('title', 'Home')

@include('header')
<div class="container" style="min-height:100vh;">
	<div class="content">
		<div class="showarray">
			@if(is_array($sendDataAsArray))
			<section class="dl-blurbs">

				@foreach($sendDataAsArray as $key => $postinfo)
				<dl>
					<?php $postURL = str_replace(' ', '-', $key); ?>
					<dt><a href="<?php echo strtolower($postURL); ?>">{{ $key }}</a></dt>
					<dd>{{ $postinfo }}</dd>
				</dl>
				@endforeach

			</section>
			@endif
		</div>
	</div>
</div>

@include('footer')