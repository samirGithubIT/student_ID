@extends('master.main')

@section('content')

<div class="">
    <img src="{{ asset('asset/photo/edu.jpg') }}" height="600" width="100%" alt="photo">
</div>

<div class="container">
    <div class="row">
        <div class="col-6 mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/photo/allison-griffith-Q76DPRQ3Ix0-unsplash (1).jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">student 1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">for more info</a>
                </div>
              </div>
              </div>
              <div class="col-6 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/photo/jakob-rosen-CTd5_C7p__8-unsplash.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">student 2</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">for more info</a>
                    </div>
                  </div>
              </div>
            <div class="col-6 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/photo/dollar-gill-Kyoshy7BJIQ-unsplash.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">student 3</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">for more info</a>
                    </div>
                  </div>
              </div>
            <div class="col-6 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('asset/photo/nishaan-ahmed-6w1S7xS6AnM-unsplash.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">student 4</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">for more info</a>
                    </div>
                  </div>
            </div>
    </div>
</div>

@endsection