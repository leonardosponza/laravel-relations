@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>dettagli prodotto</h2>
        <div class="card">
            <div class="card-header">{{$post->title}}</div>
             <div class="card-body">
            <h5 class="card-title">{{$post->slug}}</h5>
            <p class="card-text">{{$post->content}}</p>
            
             </div>
        </div>
        <div class="mt-3">
           <a href="{{route('admin.post.index')}}" class="btn btn-primary">torna indietro</a>
        </div>
    </div>
@endsection