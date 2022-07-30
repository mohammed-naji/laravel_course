@extends('site3.master')

@section('title', 'Awards | My Resume')

@section('content')
<!-- Awards-->
<section class="resume-section" id="awards">
    <div class="resume-section-content">
        <h2 class="mb-5">Awards & Certifications</h2>
        <ul class="fa-ul mb-0">
            @foreach ($awards as $award)
            <li>
                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                {{ $award }}
            </li>
            @endforeach
        </ul>
    </div>
</section>
@stop
