
@extends('layout.main')

@section('banner')

 <h1>About</h1>
<span class="subheading">Hello,a bit about Collins</span>


@endsection



@section('body')


         <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               Software Engineer
              </h2>
            </a>
            <section class="">
				<p>
          I am a software engineer that has skills in both the fron-end and  back-end of application
          .My previous career as a designer brought me close to
          my true passion building web applications.I wasn't satisfied with only being involved in 
          the visual aspect I wanted a deeper involvement in building out applictions.
          In the next phase of my career,I do not only want to use my desing skills to make 
          the application looks splendid, but I also want to work on the technically challenging facet of the application too.
          I would love to work as team that fellow best practices like Test Driven Development and pair programming to help 
          me learn and grow as a developer.
         
				</p>
      </section>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               Interests
              </h2>
            </a>
            <section class="">
				<p>
        <li>Passionate about technology </li>
        <li>Playing computer games,footbball, reading ,traveling and listening to music</li>
				</p>
      </section>
          </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               System
              </h2>
            </a>
            <section class="">
				<p>
        My current system specifiacations.
        <li>Lenovo Dual core 4Gig-Ram </li>
        <li>64-bit Operating System Linux Fedora 26 </li>
        
				</p>
      </section>
          </div>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">top</a>
          </div>

@endsection
