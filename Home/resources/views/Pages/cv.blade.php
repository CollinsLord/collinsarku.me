@extends('layout.main')

@section('banner')

 <h1>Resume</h1>
<span class="subheading">Hello,a bit about my skills and experience</span>


@endsection



@section('body')

<div class="post-preview " >
            <a href="#">
              <h2 class="post-title">
               Objective
              </h2>
              </a>
            <p>To successfully pursue a career as an IT Specialist and utilize my skills which I have acquired throughout my past work experience and education. </p> 
        
        </div>
          <hr>
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
               Prior Experience
              </h2>
              </a>
            <li>July 2016–date	  Aptech Computer Education Ghana	 Darkuman Junction, Accra</li> 
            <h5>Aptech Certified Computer Professional Instructor</h5>
            <h6>Lecture from Semester 1 to Semester 6, conversant with various technologies such: JavaSE, J2EE, MySQL, MSSQL 2016, PHP7, Javascript, .Net, Android, HTML 5, CSS3, XML, JSON etc</h6>
        
          <li>July 2016–date	  Pricom Ghana	 Accra</li> 
            <h5>Administrator,Web/Mobile App Programmer.</h5>
            <h6>Progamming all website, wep application and mobile applications.</h6>
          </div>
            <hr>
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
               Academic Background
              </h2>
              </a>
            <li>BSc. Information Tecchnology- Charisma University UK to date</li> 
            <li>Advance Diploma in Software Engineering (ADSE) - APTECH GHANA</li>
           <li>Certificate  UI/UX - APTECH GHANA</li>
           <li>W.A.S.S.C.E Certificate in Science</li>          
          </div>
           <hr>
          <div class="post-preview">
            <a href="#">
              <h2 class="post-title">
               References
              </h2>
              </a>
            <li>Professional Reference</li> 
            <h6>Lorenzo Cabrini</h6>
           <li>Personal Reference</li>
            <h6>Henry Gyan Ayerekwa</h6>          
          </div>
          <hr>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-secondary float-right" href="#">top</a>
          </div>

@endsection
