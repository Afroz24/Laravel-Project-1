<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script> --}}

    <title> Fill Form </title>
</head>

<body>

    @extends('layout')
    @section('content')


{{-- 
    @if(Auth::user())
    <div class="dropdown mb-5">
        <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
    @endif --}}





    <center>
        <h1 class="text-shadow"> JOB Application </h1>
    </center>

    {{-- <ul>
        @foreach ( $errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul> --}}

    <div class="container card mt-3 shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <form action=" {{ url('/store') }} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Name </h5>
                    </label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name')}}" id="formGroupExampleInput" placeholder="Enter Name">

                    @error('name')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Age </h5>
                    </label>
                    <input type="number" name="age" class="form-control  @error('age') is-invalid @enderror"
                        id="formGroupExampleInput" value="{{ old('age')}}" placeholder="Enter Age">

                    @error('age')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Qualification </h5>
                    </label>
                    <input type="text" name="qual" class="form-control @error('qual') is-invalid @enderror"
                        id="formGroupExampleInput" value="{{ old('qual')}}" placeholder="Enter Qualification">

                    @error('qual')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Phone Number </h5>
                    </label>
                    <input type="number" name="ph_number" class="form-control @error('ph_number') is-invalid @enderror"
                        id="formGroupExampleInput" value="{{ old('ph_number')}}" placeholder="Enter Phone Number">

                    @error('ph_number')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                {{--below is a radio buttons--}}

                <div class="my-3">
                    <h5> Gender </h5>
                    <div class="form-check form-check-inline @error('gender') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male" {{ old('gender') == 'Male' ? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline @error('gender') is-invalid @enderror">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" {{ old('gender') == 'Female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>

                    @error('gender')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror

                </div>


                {{-- belowisa check boxes --}}
                <div class=" my-3">
                    <h5> Skills </h5>
                    <div class="form-check form-check-inline @error('skill') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="skill[]" value="PHP" {{ in_array('PHP', old('skill',[]))? 'checked' : '' }}  >
                        <label class="form-check-label" for="inlineCheckbox1"> PHP </label>
                    </div>
                    <div class="form-check form-check-inline @error('skill') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="Python" {{ in_array('Python', old('skill',[]))? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineCheckbox2"> Python </label>
                    </div>
                    <div class="form-check form-check-inline @error('skill') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="Laravel" {{ in_array('Laravel', old('skill',[]))? 'checked' : '' }}  >
                        <label class="form-check-label" for="inlineCheckbox2"> Laravel </label>
                    </div>
                    <div class="form-check form-check-inline @error('skill') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="Java" {{ in_array('Java', old('skill',[]))? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineCheckbox2"> Java </label>
                    </div>
                    <div class="form-check form-check-inline @error('skill') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="React" {{ in_array('React', old('skill',[]))? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineCheckbox2"> React </label>
                    </div>

                    @error('skill')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>



                <div class="mb-3">
                    <h5><label for="formGroupExampleInput2" class="form-label"> Profile Picture </label></h5>
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                        id="formGroupExampleInput2" placeholder="Upload Profile Picture">

                    @error('image')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror

                </div>

                {{--Below is a select button--}}

                <div class=" mt-3">
                    <h5> Select Your State </h5>
                    <select class="form-select @error('country') is-invalid @enderror" name="country" id="country" aria-label="Default select example">
                        <option value="default"> --Select State-- </option>
                        <option value="Telangana" {{  old('country')=='Telangana' ? 'selected': '' }}> Telangana </option>
                        <option value="Tamil"  {{  old('country')=='Tamil' ? 'selected': '' }}> Tamil Nadu</option>
                        <option value="Karnataka" {{  old('country')=='Karnataka' ? 'selected': '' }}> Karnataka</option>
                        <option value="Maharastra" {{  old('country')=='Maharastra' ? 'selected': '' }}> Maharastra </option>
                    </select>

                    @error('country')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>
                {{-- https://github.com/Afroz24/Laravel_Simple_Project1~ --}}

                <div class="mb-3 my-3">
                    <h5><label for="formGroupExampleInput2" class="form-label"> Upload Resume</label></h5>
                    <input type="file" name="resume"  class="form-control @error('resume') is-invalid @enderror"
                        id="formGroupExampleInput2" placeholder="Upload Resume">

                    @error('resume')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror

                </div>


                <div class=" my-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>

                <br>

            </form>
        </div>
    </div>




    @endsection

</body>

</html>