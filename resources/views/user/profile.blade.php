@extends('layouts.master')
@section('content')
  <h1>Here is the profile view!</h1>
  <a href="{{ route('user.logout') }}">Logout</a>
@endsection