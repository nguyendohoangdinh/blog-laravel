@extends('main')
@section('title', '| home')
@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1 style=" font-weight: bold;text-align: center;">Welcome to My Blog!</h1>
        <p class="lead" style=" color:#ff3300;text-align: center;">Chào mừng bạn đến với Neolab Việt Nam!!!</p>
        <p><a class="btn-success btn btn-primary btn-lg center center-block" href="#" role="button" style="width: 300px;">Liên hệ</a></p>
      </div>
    </div>
  </div>
  <!-- end of header .row -->

  <div class="row">
    <div class="col-md-8">
      @foreach ($posts as $post)
        <div class="post">
          <h3>{{ $post->title }}</h3>
          <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300? "...":"" }}</p>
          <a href="{{ url('blog/'.$post->slug ) }}" class="btn btn-primary">Read More</a>
        </div>

        <hr>
      @endforeach
    </div>

    <div class="col-md-3 col-md-offset-1">
      <h2>Thông tin nổi bật</h2>
      <video width="320" height="240" controls>
        <source src="https://www.w3schools.com/tags/movie.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ HTML5.
      </video>
      <iframe src="http://jobs.neo-lab.vn/" width="320" height="240" scrolling="auto"></iframe>
    </div>
  </div>
@endsection