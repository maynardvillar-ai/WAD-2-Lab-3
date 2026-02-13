@extends('layout')

@section('title', 'Home')

@section('content')

<section class="hero">

    <img src="{{ asset('n1.jpg') }}" alt="Maynard" class="profile-pic">

    <h1>Hello, I'm Maynard </h1>
    <p>Aspiring Full Stack Developer</p>

</section>


<section class="cards">
    <div class="card">
        <h3>Skills</h3>
        <p>HTML, CSS, PHP, Laravel, MySQL</p>
    </div>

    <div class="card">
        <h3>Projects</h3>
        <p>Student Portfolio Website, CRUD App</p>
    </div>

    <div class="card">
        <h3>Goals</h3>
        <p>to create an application or website that promotes responsible use of technology to support daily life without encouraging dependence or laziness.</p>
    </div>
</section>

@endsection

