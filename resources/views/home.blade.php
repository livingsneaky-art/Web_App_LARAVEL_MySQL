@extends('layouts.app')
   
@section('content')
<head>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Princess+Sofia&display=swap" rel="stylesheet"/>
    <style>
        a {
            font-family: 'Open Sans', sans-serif;
            font-family: 'Princess Sofia', cursive;
            font-weight: bold;
        }
        #link1 {
            padding-right: 15px;
            margin: 10px;
            background: yellow;
            
        }
        #link2 {
            padding-left: 15px;
            margin: 10px;
            background: yellow;
            align-content: center;
        }

    </style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>
                <div class="row justify-content-center"><h1><a id="link1" href="/store_image">Reserve a Hotel</a></h1> <h1><a id="link2" href="/displayUser">Your Hotels</a></h1></div>
               
                <div class="card-body">
                    @yield('displayUserHotels')
                    @yield('displayUserForm')
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection