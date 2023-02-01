@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-warning">
                <ol>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ol>
            </div>
        @endif
        
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Body</label>
                <textarea class="form-control" name="body" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Category</label>
                <select name="category_id" class="form-select" id="">
                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}">
                            {{ $category['name'] }}
                        </option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Add Article" class="btn btn-primary">
        </form>
    </div>
@endsection