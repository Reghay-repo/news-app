@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cree votre Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   {{-- create  post--}}

                   <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titre du post</label>
                      <input type="text" class="form-control" name="title" id="title" >
                    </div>
                    <div class="mb-3">
                      <label for="body" class="form-label">Votre Description</label>
                      <textarea  id="body" class="form-control" name="body" cols="30" rows="10"></textarea>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Create</button>
                  </form>
                  {{-- <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
    
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
            
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
            
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-md-4 col-form-label text-md-right">{{ __('Description ') }}</label>
    
                            <div class="col-md-6">
                                <textarea id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" required autocomplete="code" autofocus></textarea>
                                <textarea name="" id="" cols="30" rows="10">
                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Create 
                            </button>
                        </div>
                    </div> --}}
                </form>
            
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
