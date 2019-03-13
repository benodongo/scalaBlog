@extends('master')
@section('content')
  <div class="container">
      <div class="jumbotron">
          <h1>SCALA BLOG</h1>
          <H2>TOP NEWS</H2>
      </div>
      @foreach($articles as $article)
          <div class="row mt-4">
              <div class="card">
                  <div class="card-header">
                      <h2>{{$article->Title}}</h2>
                      <p>Author : <b>{{$article->Author}}</b></p>
                  </div>
                  <div class="card-body">
                      <p>{{$article->Description}}</p>
                  </div>
                  <div class="card-footer">
                      <p class="text-primary">{{$article->Date}}</p>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
    @endsection