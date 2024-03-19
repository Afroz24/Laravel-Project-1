@extends('layout')

@section('content')



{{-- @if(Auth::user())
<div class="dropdown mb-5">
    <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{ Auth::user()->name }}
    </a>

    <ul class="dropdown-menu " aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</div>
@else

  <button class="btn btn-sm btn-dark mb-4 "> <a  class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></button> 

@endif --}}




<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                aria-controls="panelsStayOpen-collapseOne">
                A Dynamic LandMark of Job
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
            aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwo">
                Why we are better than Naukri.com
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThree">
                No Charges..NO Certificates...
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>



<div id="carouselExampleCaptions" class="carousel slide mt-4 mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=" {{ asset('website_photos/photo1.jpg') }}" class="d-block w-100" alt="job photo1" height="300"
                width="100">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src=" {{ asset('website_photos/photo2.jpg') }}" class="d-block w-100" alt=" job photo2" height="300"
                width="100">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('website_photos/photo3.jpg') }}" class="d-block w-100" alt="job photo3" height="300"
                width="100">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<div class=" card container mt-4 mb-4">
    <div class="card-body">
        <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1"> About Jobs </a>
            <a class="list-group-item list-group-item-action" href="#list-item-2"> Job fair </a>
            <a class="list-group-item list-group-item-action" href="#list-item-3"> Procedure </a>
            <a class="list-group-item list-group-item-action" href="#list-item-4"> Mission </a>
        </div>
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example"
            tabindex="0">
            <h4 id="list-item-1"> About Jobs </h4>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, nam deserunt debitis fugit non aliquid
                dicta
                nesciunt dolores nobis omnis distinctio, corporis sint dolorem eum architecto, ex veritatis laudantium
                perferendis?</p>
            <h4 id="list-item-2"> Job Fair </h4>
            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum alias ipsum veniam maxime dignissimos
                esse
                ipsam laboriosam illo deserunt cumque, magni, iure velit labore consequatur unde ipsa blanditiis beatae
                accusamus?</p>
            <h4 id="list-item-3"> Procedure </h4>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aliquid perferendis ex ad sunt accusamus
                assumenda. Eligendi, voluptatum numquam. Quam quisquam quaerat voluptas expedita cum aliquid reiciendis,
                iusto delectus corrupti?</p>
            <h4 id="list-item-4"> Mission </h4>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim aliquid perferendis ex ad sunt accusamus
                assumenda. Eligendi, voluptatum numquam. Quam quisquam quaerat voluptas expedita cum aliquid reiciendis,
                iusto delectus corrupti?</p>
        </div>
    </div>
</div>

<div class="container card mt-4 mb-4">
    <div class="card-body">
        <h5 class="mb-3">
            <center> What are you thinking just go ahead and apply for job and get succeeded in your life </center>
        </h5>
        <div class="d-grid gap-2 col-6 mx-auto">
            <center> <a href="/form"><button class="btn btn-primary">------- Apply Now------- </button></a> </center>
        </div>
    </div>
</div>


@endsection