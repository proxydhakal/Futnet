<nav class="navbar navbar-expand-lg navbar-dark shadow-lg " style="background-color: #0B3559;">
  <a class="navbar-brand" href="/"><img src="/assets/logoo.png" style="height:60px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/home" style="color: white;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about" style="color: white;">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/blog" style="color: white;">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contact" style="color: white;">ContactUS</a>
      </li>
    </ul>
   <ul class="nav navbar-dark navbar-right">
    @guest
      <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" title="User dashboard" style="color: white;text-decoration: none;"> Login or Signup &nbsp; <i class="fa fa-lg fa-user"></i></a>
            <div class="dropdown-menu">
              <form id="formLogin" method="POST" class="form container-fluid" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <br>
                <div class="form-group">
                  <input class="form-control" name="email" id="username" type="text" placeholder="Email" title="Enter your email" required="">
                </div>
                <div class="form-group">  
                  <input class="form-control" name="password" id="password" type="password" placeholder="Password" title="Enter your password" required="">
                </div>  
                <button type="submit" id="btnLogin" class="btn btn-block btn-success">Login</button>
                <hr>
                <a href="/register" title="Fast and free sign up!" id="btnNewUser"  class="small">New User? Sign-up..</a>
              </form>
              <hr>
              <div class="container-fluid">
                <a class="small" data-toggle="modal" role="button" href="#forgotPasswordModal">Forgot username or password?</a>
            </div>    
            </div>
          </li>
           @else
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="/profile">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
    </ul>
   

</nav>
<style type="text/css">
  ul li {
    color: white;
    font-size:20px;
    margin-left:20px;
    text-decoration: none;
    font-family: 'Roboto', sans-serif;
  }
  ul li #a:hover{

  }
</style>