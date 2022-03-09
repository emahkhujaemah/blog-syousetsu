@extends('layouts.main')

@section('container')     

    <!-- Image overlays -->
    <div class="container">
        <div class="text-center ">
        <div class="container">
        <div class="row text-dark ">  
            <h1 class="fw-bold m-3">Home Page</h1>
            {{-- <h4 class="card-text underline">A Tamplate by Start Bootstrap</h4> --}}
        </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-2 m-1"  >
                    <button type="button" class="btn btn-light"><i class="fab fa-twitter"> Twitter</i></button>
                </div>
                <div class="col-md-2 m-1">
                    <button type="button" class="btn btn-light"><i class="fab fa-github"> Github</i></button>
                </div>
                <div class="col-md-2 m-1">
                    <button type="button" class="btn btn-light"><i class="fab fa-linkedin-in"> LinkedIn</i></button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!--Akhir Image overlays -->

    <div class="container-fluid satu mt-5">
        <div class="row justify-content-center p-4">
            <div class="col-sm-6 p-3">
            <div class="container ms-3">
                <h1 class="garis_atas"></h1>
                <h3>Death to the Stock Photo :</h3>
                <p>A Special thanks to <span class="biru">Death to the Stock Photo</span> for providing the photographs that you see in this template. Visit their website to become to a member</p>
            </div>                
            </div>
            <div class="col-sm-6 p-xl-4 ">
            <img src="img/working_home.jpg" class="img-thumbnail rounded mx-auto d-block mb-4" alt="gareki" width="500px">
            </div>
        </div>
    </div>

    <div class="container-fluid dua">
        <div class="row justify-content-center p-4">
        <div class="col-sm-6 p-xl-4 mt-4">
            <img src="img/working_flexibility.jpg" class="img-thumbnail rounded mx-auto d-block" alt="Natsume" width="500px">
        </div>
        <div class="col-sm-6 p-3">
            <div class="container ms-3 mt-4">
            <h1 class="garis_atas"></h1>
            <h3>3D Device Mockups <br> by PSDCovers</h3>
            <p>Turn your 2D designs into high quality 3D product shots in seconds using free Photoshop action by <span class="biru">PSDCover</span> Visit their website to download some of their awosome, free photoshop actions!</p>
            </div>
        </div>
        </div>
    </div>

    <div class="container-fluid satu ">
            <div class="row justify-content-center p-4">
            <div class="col-sm-6 p-3">
                <div class="container ms-3">
                <h1 class="garis_atas"></h1>
                <h3>Google Web Fonts and Font Awesome Icons</h3>
                <p>This template feature the 'Lato'font, part of the <span class="biru">Google Web Font library </span> , as well as <span class="biru">icons from Font Awesome</span></p>
                </div>
            </div>
                <div class="col-sm-6 p-xl-4 mb-3">
                <img src="img/working_worldwide.jpg" class="img-thumbnail rounded mx-auto d-block mb-4" alt="Harold X Erika" width="500px">               
            </div>
            </div>
    </div>

    <div class="jumbotron bg-dark text-white rounded-3">
        <div class="container-fluid py-3 pt-xl-5 pt-sm-4">
        <div class="row">
            <div class="col-xl-7 me-md-5">
            <h1 class="card-title fw-bold mt-3 me-xl-5 me-sm-2">Connect to Start Bootstrap: </h1>
            </div>
            <div class="col-xl-3 ms-xl-5 d-flex justify-content-center">
            <div class="row">
                <div class="col col-sm-4 m-1 me-md-5 ">        
                <div class="container pb-xl-5">
                    <div class="btn-group " role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-light btn-sm bawah"><i class="fab fa-twitter"> Twitter</i></button>
                    <button type="button" class="btn btn-light btn-sm bawah"><i class="fab fa-github"> Github</i></button>
                    <button type="button" class="btn btn-light btn-sm bawah"><i class="fab fa-linkedin-in"> LinkedIn</i></button>
                    </div>
                </div>         
                
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <footer class="satu mt-auto">
        <div class="container p-5 ">
        
        <span class="text-muted">Copyright &copy Your Company 2014. All Right Reserved</span>
        </div>
    </footer>

@endsection