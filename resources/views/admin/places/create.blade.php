@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/place/post" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row mb-3">
                        <div class="row">
                            <h1>add new place</h1>
                        </div>

                        <label for="city_id" class="col-md-4 col-form-label ">city id</label>

                        <input id="city_id"
                               type="number" class="form-control @error('w') is-invalid @enderror" name="city_id" value="{{ old('city_id') }}"  autocomplete="city_id">


                        <label for="name" class="col-md-4 col-form-label ">place name</label>

                        <input id="name"
                               type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="link" class="col-md-4 col-form-label ">place link</label>

                        <input id="link"
                               type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}"  autocomplete="link">

                        @error('link')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="type" class="col-md-4 col-form-label ">place type</label>

                        <input id="type"
                               type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ old('type') }}"  autocomplete="type">

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <label for="Description" class="col-md-4 col-form-label ">place Description</label>

                        <input id="Description"
                               type="text" class="form-control @error('Description') is-invalid @enderror" name="Description" value="{{ old('Description') }}"  autocomplete="Description">

                        @error('Description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">place image</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <strong >{{ $message }}</strong>

                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary ">submit city</button>
                    </div>


                </div>

            </div>

        </form>
    </div>
@endsection

