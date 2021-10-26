@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session()->has('message'))
            <div class="alert alert-success">
              {{ session('message') }}
            </div>
      @endif
            <div class="card">
                <div class="card-header">{{ __('Mes posts') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

           
                        <div class="card my-2">
                            @foreach ($posts as $post)
                            <hr>
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->body }}</p>
                                <a href="#" class="btn btn-primary">View Post</a>
                                <div class="my-3">
                                    <a href="" ><i class="fas fa-thumbs-up"></i>({{ $post->like }})</a> <i class="fas fa-thumbs-down">({{ $post->dislike }})</i>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                        
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
