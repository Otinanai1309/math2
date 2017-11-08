@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
  <input-number @val-changed="findAllPrimes"></input-number>

    <tabs>
        <tab name="Analyze into prime factors" :selected="true">
          <div id="box1" style="padding:20px" >
            <tab1-content :output="solution"></tab1-content>
          </div>

        </tab>

        <tab name="All primes smaller than your number">
            <tab2-content :output = "solution"></tab2-content>
        </tab>

        <tab name="The roman representation">
            <tab3-content :output = "solution"></tab3-content>
        </tab>
    </tabs>
</div>

<!-- <div class="row">
  <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
          <div class="panel-heading">Login</div>

          <div class="panel-body">
              <form class="form-horizontal" method="POST" action="http://127.0.0.1:8000/login">
                  <input type="hidden" name="_token" value="jNmO73RGqjlZVBkVnC3gXQB0ovIkxwf8xYKO1U5r">

                  <div class="form-group">
                      <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                      <div class="col-md-6">
                          <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                                      </div>
                  </div>

                  <div class="form-group">
                      <label for="password" class="col-md-4 control-label">Password</label>

                      <div class="col-md-6">
                          <input id="password" type="password" class="form-control" name="password" required>

                                                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <div class="checkbox">
                              <label>
                                  <input type="checkbox" name="remember" > Remember Me
                              </label>
                          </div>
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">
                          <button type="submit" class="btn btn-primary">
                              Login
                          </button>

                          <a class="btn btn-link" href="http://127.0.0.1:8000/password/reset">
                              Forgot Your Password?
                          </a>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div> -->
</div>
@endsection
