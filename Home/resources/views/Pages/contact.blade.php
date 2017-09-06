@extends('layout.main')

@section('banner')

 <h1>Contact</h1>
<span class="subheading">Hello,You can contact me for more info</span>


@endsection



@section('body')

<div class="post-preview " >
            <a href="#">
              <h2 class="post-title">
                Contact Us
              </h2>
              </a>
           <div class="container">
            <div class="row">
                <div class="col-md-12 col-centered">
                    <div class="panel panel-default">
                      
                        <br>
                    <form action="{{ url('contact')}}" method="POST">
                    {{csrf_field()}}
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" placeholder="Name" class="form-control" autofocus="autofocus" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" placeholder="Email" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone blue"></i></span>
                                <input type="text" name="phone" placeholder="Phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment blue"></i></span>
                                <textarea name="message" placeholder="Message" class="form-control" required></textarea>
                            </div>
                        </div>
                       
                        <div class="">
                        <button type="submit" class="btn btn-info pull-right">Send <span class="fa fa-send"></span></button>
                            <button type="reset" value="Reset" name="reset" class="btn">Reset <span class="fa fa-refresh"></span></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">top</a>
          </div>

@endsection
