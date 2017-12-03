@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>

<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<hr>

<a href="{{ route('blog.index') }}" class="btn btn-info">Blogs</a>
<a href="{{ route('blog.create') }}" class="btn btn-primary">Add New Blog</a>

@stop