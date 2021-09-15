@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">codice</th>
      <th scope="col">titolo</th>
      <th scope="col">azioni</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->titolo }}</td>
      <td>
          <a href="{{route('admin.posts.show',$post->id)}}" class="btn btn-primary">show</a>
          <a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-warning">edit</a>
          <form action="" method="post" class="d-inline-block">
              @csrf
              @method('DELETE')
              <input type="submit" value="delete" class="btn btn-danger">
          </form>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>
</div>


@endsection