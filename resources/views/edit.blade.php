<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Edit Form </title>
</head>

<body>

    @extends('layout')

    @section('content')



    <center>
        <h1 class="text-shadow"> Edit JOB Application </h1>
    </center>

    {{-- <ul>
        @foreach ( $errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
    </ul> --}}

    <div class="container card mt-3 shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
            <form action=" {{ route('update',['record'=>$record->id]) }} " method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Name </h5>
                    </label>
                    <input type="text" name="name" value="{{ $record->name }}" class="form-control  @error('name') is-invalid @enderror  @error('name') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Enter Name">

                        @error('name')
                        <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Age </h5>
                    </label>
                    <input type="number" name="age" value="{{ $record->age }}" class="form-control  @error('age') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Enter Age">

                        @error('age')
                        <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Qualification </h5>
                    </label>
                    <input type="text" name="qual" value="{{ $record->qualification }}" class="form-control  @error('qual') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Enter Qualification">

                        @error('qual')
                        <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">
                        <h5> Phone Number </h5>
                    </label>
                    <input type="number" name="ph_number" value="{{ $record->phone_number }}" class="form-control  @error('ph_number') is-invalid @enderror"
                        id="formGroupExampleInput" placeholder="Enter Phone Number">

                        @error('ph_number')
                        <p class="invalid-feedback"> {{ $message }} </p>
                        @enderror
                </div>

                {{--below is a radio buttons--}}

                <div class="my-3">
                    <h5> Gender </h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="inlineRadio1" value="Male"
                            {{$record->gender === 'Male' ? 'checked' : ""}} {{ old('gender') == 'Male' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="inlineRadio2" value="Female"
                            {{$record->gender === 'Female' ? 'checked' : ""}} {{ old('gender') == 'Female' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>

                    @error('gender')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>


                {{-- belowisa check boxes --}}
                <div class=" my-3">
                    <h5> Skills </h5>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input  @error('skill') is-invalid @enderror" type="checkbox" id="inlineCheckbox1" name="skill[]" value="PHP"
                            {{ in_array('PHP',explode(',', $record->skills)) ? 'checked' : ''}} {{ in_array('PHP', old('skill',[]))? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox1"> PHP </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input  @error('skill') is-invalid @enderror" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="Python" {{ in_array('Python',explode(',', $record->skills)) ? 'checked' : ''}} {{ in_array('Python', old('skill',[]))? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2"> Python </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input  @error('skill') is-invalid @enderror" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="Laravel" {{ in_array('Laravel',explode(',', $record->skills)) ? 'checked' : ''}} {{ in_array('Laravel', old('skill',[]))? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2"> Laravel </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input  @error('skill') is-invalid @enderror" type="checkbox" id="inlineCheckbox2" name="skill[]" value="Java"
                            {{ in_array('Java',explode(',', $record->skills)) ? 'checked' : ''}} {{ in_array('Java', old('skill',[]))? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2"> Java </label>
                    </div>
                    <div class="form-check form-check-inline @error('skill') is-invalid @enderror">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="skill[]"
                            value="React" {{ in_array('React',explode(',', $record->skills)) ? 'checked' : ''}} {{ in_array('React', old('skill',[]))? 'checked' : '' }} >
                        <label class="form-check-label" for="inlineCheckbox2"> React </label>
                    </div>

                    @error('skill')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>



                <div class="mb-3">
                    <h5><label for="formGroupExampleInput2" class="form-label"> Profile Picture </label></h5>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="formGroupExampleInput2" name="image"
                        placeholder="Change Profile Picture">

                        @error('image')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                {{-- toshow image down --}}
                <div class="pt3">
                    @if($record->picture != '' && file_exists('storage/photos/'.$record->picture))
                    <img src="/storage/photos/{{ $record->picture}}" width="100" height="100">
                    @else
                    <p> You didn't uploaded image </p>
                    @endif
                </div>

                {{--Below is a select button--}}

                <div class=" mt-3">
                    <h5> Select Your State </h5>
                    <select class="form-select" name="country" aria-label="Default select example">
                        <option value="default"> --Select State-- </option>
                        <option value="Telangana" {{$record->country === 'Telangana' ? 'selected' : ""}} {{  old('country')=='Telangana' ? 'selected': '' }}> Telangana
                        </option>
                        <option value="Tamil" {{$record->country === 'Tamil' ? 'selected' : ""}} {{  old('country')=='Tamil' ? 'selected': '' }}> Tamil Nadu</option>
                        <option value="Karnataka" {{$record->country === 'Karnataka' ? 'selected' : ""}} {{  old('country')=='Karnataka' ? 'selected': '' }}> Karnataka
                        </option>
                        <option value="Maharastra" {{$record->country === 'Maharastra' ? 'selected' : ""}} {{  old('country')=='Maharastra' ? 'selected': '' }}> Maharastra
                        </option>
                    </select>

                    @error('country')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                <div class="mb-3 my-3">
                    <h5><label for="formGroupExampleInput2" class="form-label"> Upload Resume</label></h5>
                    <input type="file" class="form-control @error('resume') is-invalid @enderror" id="formGroupExampleInput2" name="resume"
                        placeholder="Upload Resume">

                        @error('resume')
                    <p class="invalid-feedback"> {{ $message }} </p>
                    @enderror
                </div>

                @if($record->resume != '' && file_exists('storage/resumes/'.$record->resume))
                <div class="py-3">
                    <input type="text" class="bg-secondary text-white"  value="{{ $record->resume }}" readonly>
                </div>
                @endif


                <div class=" my-3 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success"> Update </button>
                </div>

                <br>

            </form>
        </div>
    </div>

    @endsection



</body>

</html>