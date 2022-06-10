@extends("layouts.app")

<!-- simple content -->
@section('title', config("app.name").' | about')
    

@section('content')
    <h1>A propos de salim</h1>
    image de profil
    <br />
    <img src="{{ asset('/images/profile.jpg') }}" alt="profile"/>
@endsection

</body>
</html>