@extends("layouts.app")

<!-- simple content -->
@section('title', config("app.name").' | about')


@section('content')
<div class="container pt-5">
	<h3>A propos de salim</h3>
	<div class="card" style="width: 18rem;">
		<img src="{{ asset('/images/profile.jpg') }}" alt="profile" />
		<div class="card-body">
			<h5 class="card-title">auteur du projet|laravel</h5>
			<p class="card-text">je suis salim un developpeur web full-stack</p>
			<a href="https://youtube.com/c/artsider99" target="_blanc" class="btn btn-outline-danger">art sider</a>
		</div>
	</div>
</div>

@endsection

</body>

</html>