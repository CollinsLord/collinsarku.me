
@extends('layout.main')

 
@section('banner')
 <h1>Project Section</h1>
<span class="subheading">Hello,a bit about my projects:</span>


@endsection


@section('body')

          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               Selected Project
              </h2>
            </a>
            <section class="">
				<p>
          
         <a  data-toggle="collapse" href="#collins" aria-expanded="false" aria-controls="collapseExample" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;color:white">collinsarku.me</a>
         <a href="http://pricomghana.com" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;color:white">Pricomghana.com</a>
         <a href="http://clickitconsult.com" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;color:white">Clicksdconsult.tech</a>
         <a href="http://aptechghana.com" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;color:white">Aptechghana.com</a>
         <a href="http://glazicogh.com" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;color:white">Glazicoghana.com</a>
        </p>
        <div class="collapse" id="collins">
  <div class="card card-body">
    This is my personal blog build in laravel (php framework)
   
  </div>
</div>
      </section>
          </div>
          
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">top</a>
          </div>

@endsection