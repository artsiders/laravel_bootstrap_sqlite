@extends('layouts.app')

@section('content')
<table class="table table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">classe</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
@endsection