@extends('layout.master')

@section('content')

@include('layout.header')

<section style="padding-top: 60px;">
	<header class="main">
		<h1 style="font-size: 2em;">お問い合わせ</h1>
	</header>
	<div class="post_body_div">
		<div class="row gtr-200">
			<div class="col-12">
				<form method="post" action="/query">
					{{ csrf_field() }}
					<div class="row gtr-uniform">
						<div class="col-6 col-12-xsmall">
							<input type="text" name="name" placeholder="お名前" required>
						</div>
						<div class="col-6 col-12-xsmall">
							<input type="email" name="email" placeholder="Email" required>
						</div>
						<div class="col-12">
							<textarea name="body" rows="6"></textarea>
						</div>
						<!-- Break -->
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" value="送信"></li>
							</ul>
						</div>
					</div>
					@if (session('status'))
					<div class="alert alert-success" style="margin-top: 30px; color: black; font-weight: bold;">
						{{ session('status') }}
					</div>
					@endif
				</form>
			</div>
		</div>
	</div>
</section>
@endsection
