@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row mb-3">
                        <div class="row">
                            <h1>add new city</h1>
                        </div>



                        <label for="name" class="col-md-4 col-form-label ">city Description</label>

                        <input id="name"
                               type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                        <label for="Description" class="col-md-4 col-form-label ">city Description</label>

                        <input id="Description"
                               type="text" class="form-control @error('Description') is-invalid @enderror" name="Description" value="{{ old('Description') }}"  autocomplete="Description">

                        @error('Description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label ">city image</label>

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
