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
    <title> All Applications </title>

</head>

<body>

    @extends('layout')

    @section('content')

    {{-- @if(Auth::user())
    <div class="dropdown mb-5">
        <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
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


    <div class="card container mt-3 p-3 mb-5 shadow bg-white rounded  ">


        @if(session()->has('msg1'))
        <div class="alert alert-success"> {{ session('msg1')}}
        </div>
        @endif

        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="table-dark text-white table-bordered rounded shadow">
                        <th scope="col"> ID </th>
                        <th scope="col"> Name </th>
                        <th scope="col"> Age </th>
                        <th scope="col"> Qualification </th>
                        <th scope="col"> Phone Number </th>
                        <th scope="col"> Gender </th>
                        <th scope="col"> Skills </th>
                        <th scope="col"> Profile Picture </th>
                        <th scope="col"> State </th>
                        <th scope="col"> Resume </th>
                        <th scope="col"> Created At </th>
                        <th scope="col"> Edit </th>
                        <th scope="col"> Delete </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($WholeData as $record)
                    <tr>
                        <th scope="row">{{ $record->id }} </th>
                        <td> {{ $record->name }} </td>
                        <td> {{ $record->age }} </td>
                        <td> {{ $record->qualification }} </td>
                        <td> {{ $record->phone_number }} </td>
                        <td> {{ $record->gender }} </td>
                        <td> {{ $record->skills }} </td>

                        <td> <img src="/storage/photos/{{ $record->picture}}" height="100px" width="100px"
                                class="rounded-circle"> </td>

                        <td> {{ $record->country }} </td>



                        {{-- <td> <embed src="/storage/resumes/{{ $record->resume}}" height="100px" width="100px">
                        </td>
                        --}}

                        <td> <a href="resume/{{ $record->id}}"> <button class="btn btn-info"> Resume </button> </a>
                        </td>



                        <td> {{ $record->created_at }} </td>

                        <td>
                            <a href="edit/{{ $record->id }}"> <button class="btn btn-primary"> Edit </button> </a>
                        </td>

                        {{--if you use delete named route then you need to use below form method --}}

                        <td>
                            <form method="POST" action=" {{ route('delete',['id'=>$record->id]) }}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger"> Delete </button>
                            </form>
                        </td>


                        {{--if you use get named route then you can use below method--}}
                        {{-- <td>
                            <a href="delete/{{ $record->id }}"> <button class="btn btn-danger"> Delete </button>
                            </a>
                        </td> --}}


                    </tr>
                    @endforeach


                </tbody>
            </table>


            {{-- Pagination --}}
            <div> {{ $WholeData->links() }} </div>

        </div>
        {{--
    </div> --}}
    </div>

    @endsection

</body>

</html>