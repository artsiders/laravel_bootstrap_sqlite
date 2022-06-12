@extends("layouts.app")

@section('content')
    <h1>home page</h1>
    le drapeau du cameroun {{ $name }}
    <div class="card" style="width: 15rem;">
        <img src="{{ asset('/images/cameroon.png') }}" alt="cameroon finger print" />
        <div class="card-body">
            <h5 class="card-title">l'emprinte digital du cameroun</h5>
            <p class="card-text">le cameroun vas laisser une grande emprunte sur le monde !</p>
            <a href="https://youtube.com/c/artsider99" target="_blanc" class="btn btn-outline-danger">art sider</a>
        </div>
    </div>
    
@endsection

    
</body>
</html>