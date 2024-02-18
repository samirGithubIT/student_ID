@extends('master.main')

@section('content')

<h2 class="text-center mt-5 fw-bold"> The achievements we have achieved </h2>

<div class="container">\
    <div class="row mt-5">
        <div class="row mt-5">
        <div class="col-6">
                <img src="{{ asset('asset/photo/pang-yuhao-_kd5cxwZOK4-unsplash.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-6 pt-5">
                <div >
                    <h3 class="text-danger fw-bold"> courses over <span class="text-danger">100+</span></h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt provident dolorem <br>error vero minus ipsam maiores. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, eligendi.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="row mt-5">
        <div class="col-6">
            <div class="mt-5">
                <h3 class="text-danger fw-bold"> hold the record of <span class="text-danger">best in the west</span></h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt provident dolorem <br>error vero minus ipsam maiores. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, eligendi.</p>
            </div>
            </div>
            <div class="col-6">
                <img src="{{ asset('asset/photo/edwin-andrade-4V1dC_eoCwg-unsplash.jpg') }}" width="90%" height="300" alt="">
            </div>
        </div>
    </div>
    </div>
</div>

@endsection