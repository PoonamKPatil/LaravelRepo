@extends('layouts.master')


@section('content')
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">My Blog</h1>
          <p class="lead text-muted"> A dog is the only thing on earth that loves you more than you love yourself. Money can buy you a fine dog, but only love can make him wag his tail. A dog will teach you unconditional love. The dog is the perfect portrait subject. Animals have come to mean so much in our lives.</p>
          <p>
            <a href="posts/{post}" class="btn btn-primary">Pet Lovers</a>
            <a href="#" class="btn btn-secondary">Secondary action</a>
          </p>
        </div>
      </section>

       <!-- <div class="album text-muted"> -->
        <div class="container">
          <div class="row">
            <div class="card">
              <img src="images/doggy.jpeg" alt="Card image cap">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card">
              <img src="images/dog.jpeg" alt="Card image cap">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>       
          </div>
        </div>
      <!-- </div>  -->
@endsection

@section('footer')
    <script src="/js/file.js"></script>
@endsection