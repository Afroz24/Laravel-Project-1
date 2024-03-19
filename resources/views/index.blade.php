@extends('layout')

@section('content')
{{-- 
@if(Auth::user())
<div class="dropdown mb-5">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown"
        aria-expanded="false">
        {{ Auth::user()->name }}
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
        <li><a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
</div>
@endif --}}



@if(session()->has('success'))
<div class="alert alert-success"> {{ session('success')}}
</div>
@endif

<div class="card mt-3">
    <h5 class="card-header"> Associate Software Engineer </h5>
    <div class="card-body">
        <h4 class="card-title"> Job Description </h4>
        <h5 class="card-title"> Overview </h5>
        <p class="card-text"> Provide a brief, four-sentence description of the role, what success in the position looks
            like, and how it fits into the company or organization overall.</p>
        <h5 class="card-title"> Responsibilities and Duties : </h5>
        <ul>
            <li> List the essential duties required to carry out this job.</li>
            <li> List them in order of importance.</li>
            <li> Use complete sentences.</li>
            <li> Start sentences with verbs.</li>
            <li> Use the present tense.</li>
            <li> Use gender-neutral language.</li>
        </ul>
        <h5 class="card-title"> Qualifications : </h5>
        <ul>
            <li> Education level.</li>
            <li> Experience.</li>
            <li> Specific skills.</li>
            <li> Personal characteristics.</li>
            <li> Certifications.</li>
            <li> Licenses.</li>
            <li> Physical abilities.</li>
        </ul>
        <a href="/form" class="btn btn-primary"> Apply </a>
    </div>
</div>

<div class="card mt-4">
    <h5 class="card-header"> Laravel Developer </h5>
    <div class="card-body">
        <h5 class="card-title"> Job Description </h5>
        <p class="card-text"> Provide a brief, four-sentence description of the role, what success in the position looks
            like, and how it fits into the company or organization overall.</p>
        <h5 class="card-title"> Responsibilities and Duties : </h5>
        <ul>
            <li> List the essential duties required to carry out this job.</li>
            <li> List them in order of importance.</li>
            <li> Use complete sentences.</li>
            <li> Start sentences with verbs.</li>
            <li> Use the present tense.</li>
            <li> Use gender-neutral language.</li>
        </ul>
        <h5 class="card-title"> Qualifications : </h5>
        <ul>
            <li> Education level.</li>
            <li> Experience.</li>
            <li> Specific skills.</li>
            <li> Personal characteristics.</li>
            <li> Certifications.</li>
            <li> Licenses.</li>
            <li> Physical abilities.</li>
        </ul>
        <a href="/form" class="btn btn-primary"> Apply </a>
    </div>
</div>

<div class="card mt-4">
    <h5 class="card-header"> Full Stack Engineer </h5>
    <div class="card-body">
        <h5 class="card-title"> Job Description </h5>
        <p class="card-text"> Provide a brief, four-sentence description of the role, what success in the position looks
            like, and how it fits into the company or organization overall.</p>
        <h5 class="card-title"> Responsibilities and Duties : </h5>
        <ul>
            <li> List the essential duties required to carry out this job.</li>
            <li> List them in order of importance.</li>
            <li> Use complete sentences.</li>
            <li> Start sentences with verbs.</li>
            <li> Use the present tense.</li>
            <li> Use gender-neutral language.</li>
        </ul>
        <h5 class="card-title"> Qualifications : </h5>
        <ul>
            <li> Education level.</li>
            <li> Experience.</li>
            <li> Specific skills.</li>
            <li> Personal characteristics.</li>
            <li> Certifications.</li>
            <li> Licenses.</li>
            <li> Physical abilities.</li>
        </ul>
        <a href="/form" class="btn btn-primary"> Apply </a>
    </div>
</div>

<div class="card mt-4">
    <h5 class="card-header"> Content Moderator</h5>
    <div class="card-body">
        <h5 class="card-title"> Job Description </h5>
        <p class="card-text"> Provide a brief, four-sentence description of the role, what success in the position looks
            like, and how it fits into the company or organization overall.</p>
        <h5 class="card-title"> Responsibilities and Duties : </h5>
        <ul>
            <li> List the essential duties required to carry out this job.</li>
            <li> List them in order of importance.</li>
            <li> Use complete sentences.</li>
            <li> Start sentences with verbs.</li>
            <li> Use the present tense.</li>
            <li> Use gender-neutral language.</li>
        </ul>
        <h5 class="card-title"> Qualifications : </h5>
        <ul>
            <li> Education level.</li>
            <li> Experience.</li>
            <li> Specific skills.</li>
            <li> Personal characteristics.</li>
            <li> Certifications.</li>
            <li> Licenses.</li>
            <li> Physical abilities.</li>
        </ul>
        <a href="/form" class="btn btn-primary"> Apply </a>
    </div>
</div>

<div class="card mt-4 mb-4">
    <h5 class="card-header"> Associate Driver </h5>
    <div class="card-body">
        <h5 class="card-title"> Job Description </h5>
        <p class="card-text"> Provide a brief, four-sentence description of the role, what success in the position looks
            like, and how it fits into the company or organization overall.</p>
        <h5 class="card-title"> Responsibilities and Duties : </h5>
        <ul>
            <li> List the essential duties required to carry out this job.</li>
            <li> List them in order of importance.</li>
            <li> Use complete sentences.</li>
            <li> Start sentences with verbs.</li>
            <li> Use the present tense.</li>
            <li> Use gender-neutral language.</li>
        </ul>
        <h5 class="card-title"> Qualifications : </h5>
        <ul>
            <li> Education level.</li>
            <li> Experience.</li>
            <li> Specific skills.</li>
            <li> Personal characteristics.</li>
            <li> Certifications.</li>
            <li> Licenses.</li>
            <li> Physical abilities.</li>
        </ul>
        <a href="/form" class="btn btn-primary"> Apply </a>
    </div>
</div>


@endsection