@extends("app")

<!-- simple content -->
@section('title', config("app.name").' | about')
    

@section('content')
    <h1>salim</h1>
    hello world !
    <a href="{{route('app_home')}}">home page</a>
@endsection

</body>
</html>