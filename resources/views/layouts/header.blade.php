 <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            
            @if(Auth::check())

              <a class="nav-link" href="/posts/create">Create Post</a>
              <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>

            @else

              <a class="nav-link" href="/register">Register</a>
              <a class="nav-link" href="/login">Login</a>
              <a class="nav-link" href="#">About</a>

            @endif

          </nav>
        </div>
      </div>

      <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">My Blog</h1>
          <p class="lead blog-description">Post and comments</p>
        </div>
      </div>
</header>