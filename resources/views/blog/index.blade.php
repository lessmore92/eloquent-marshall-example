@extends('layouts.blog')
@section('content')
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">Eloquent Marshall
                    <small>How to use example</small>
                </h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <h3 class="card-title m-0 p-0">Sample Searches provided by Eloquent Marshall</h3>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Search for <code>category_name=dev</code> <a
                                    class="btn btn-primary btn-sm" href="{{url('/?category_name=dev')}}">Click Here</a>
                            </li>
                            <li class="list-group-item">Search for <code>category_slug=development</code> <a
                                    class="btn btn-primary btn-sm" href="{{url('/?category_slug=development')}}">Click
                                    Here</a></li>
                            <li class="list-group-item">Search for <code>tag_name=Et</code> <a
                                    class="btn btn-primary btn-sm" href="{{url('/?tag_name=Et')}}">Click Here</a></li>
                            <li class="list-group-item">Mixed Search for <code>category_name=dev</code> and <code>tag_name=Et</code>
                                <a class="btn btn-primary btn-sm" href="{{url('/?category_name=dev&tag_name=Et')}}">Click
                                    Here</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Blog Post -->
                @foreach($posts as $post)
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ asset('storage/' . $post->featured_image) }}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->content }}</p>
                            <a href="#" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <hr>
                        <div class="card-body">
                            Category: <label
                                class="badge badge-pill badge-secondary">{{ $post->category->name }}</label>
                            <br>
                            Tags:
                            @foreach($post->tags as $tag)
                                <label class="badge badge-pill badge-dark">{{ $tag->name }}</label>
                            @endforeach
                        </div>

                        <div class="card-footer text-muted">
                            Posted on January 1, 2020 by
                            <a href="#">Start Bootstrap</a>
                        </div>
                    </div>
            @endforeach

            <!-- Pagination -->
                <div class="justify-content-center mb-4">{!! $posts->render() !!}</div>

            </div>

            <!-- Sidebar Widgets Column -->
            @include('components.sidebar')

        </div>
        <!-- /.row -->

    </div>
@endsection
