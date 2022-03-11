@extends('layouts.main')

@section('container')     




    <div class="container bg-white text-dark">
        <div class="container">
        <div class="text-center  p-4">
        <h1>MY PERSONAL INFORMATION</h1>
        <img src="img/{{$image}} " alt=" {{$name}} " width="200px" class="img-thumbnail rounded-circle">
        <h3>Emah Khujaemah<br>Junior Web Developer</h3>
        {{-- <h3> {{$name}} </h3> --}}
        <p> {{$email}} </p>
        </div>            
        </div>
        <div class="container border-success">
            <div class="row justify-content-center">
                <div class="col-md-5 bg-info text-dark">  
                <div class="text-center">
                    <h2>My Story</h2>
                        <p>Perkenalkan semuanya, Nama saya Emah. Saya berasal dari Indramayu.
                            Saya kuliah di Politeknik Negeri Indramayu, dan sekarang baru Semester 1.
                            Saya mengetahui dicoding ini dari Dosen saya, setelah dibaca websitenya
                            saya tertarik untuk mengikuti pembelajaran disini.</p>
                </div>                   
                </div>
                <div class="col-md-4 bg-info text-dark">
                <div class="justify-content-center">
                </div>
                    <h2>Personal Information</h2>
                    <div class="biodata">
                        <p>Nama : Emah Khujaemah<br> Kelas  : D4RPL1A <br> 
                        Status  : Mahasiswa<br>Kuliah   : Politeknik Negeri Indramayu</p>
                    </div>
            </div>
            </div>    
        </div>
            
        <div class="container text-center p-5">
                    <h1><b>Media Sosial</b></h1>
                    <div class="row">
                        <div class="col-xs-6 col-md-offset-3">
                        <a href ="https://facebook.com/yoshikonightray"><img src="img/fb.jpg" alt="biodata" width="150px" height="40px"></a>
                        
                        <a href ="https://www.instagram.com/khuza.emah24/"><img src="img/ig.jpg" alt="biodata" width="120px" height="40px"></a>
                        <a href ="https://twitter.com/EmahKhuza"><img src="img/twitter.jpg" alt="biodata" width="150px" height="40px"></a>
                        </div>
                    </div>                         
    </div>
    </div>

@endsection

