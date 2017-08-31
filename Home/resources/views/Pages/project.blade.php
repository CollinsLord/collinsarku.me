<? php
   
   @extends('layout.main')

// section for the banner it items 
@section('banner')
 <h1>Project Section</h1>
<span class="subheading">Hello,a bit about my projects:</span>


@endsection

//A section for the body content
@section('body')
<div class="post-preview " >
            <a href="#">
              <h2 class="post-title">
                Skills
              </h2>
              </a>
            <li>Possess effective communication skills, which enable me to get the point across in a way in which technologically savvy individuals and laypersons can understand.</li>
        <li>Possess a well-rounded computer education and work history, which enables me to work in a variety of job roles related to Information Technology.</li>
        <li>Perform various researching duties in an effective and efficient manner in such a way to leave no document unturned.</li>
        <li> Ability to creatively develop new computer programs which will touch upon various pertinent aspects necessary in today’s society. </li> 
        </div>
          <hr>
          <div class="post-preview">
            <a href="post.html">
              <h2 class="post-title">
               Language
              </h2>
            </a>
            <section class="">
				<p>
          
         <a href="/c" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;">Logic Building</a>
         <a href="/c" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;">C++</a>
         <a href="/c" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;">C#</a>
        <a href="/c" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;">JAVA (J2EE)</a>
        <a href="/c" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;">PHP</a>
        <a hrefme="/c" class="btn btn-1 btn-1a color-1" role="button" style="margin-right: -30px;">PHP</a>
				</p>
      </section>
          </div>
          <hr>
          
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">top</a>
          </div>

@endsection
?>