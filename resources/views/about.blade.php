@extends('layouts.template')

@section('content')
    <div class="p-5 p-absolute d-flex flex-column justify-content-center" style=" background-size:cover; background-image: url('{{ asset('img/capadocia.jpg') }}'); height:600px; ">
        <div class="text-light" style="font-size: 50pt; margin-left:100px"><b>Travel</b></div>
        <div class="text-light" style="font-size: 25pt; margin-left:100px">Your money will return.</div>
        <div class="text-light" style="font-size: 25pt; margin-left:100px">Your time won't.</div>
    </div>
    <div style="width: 1506px">
        <div class="row " style="height: 300px">
            <div class="col-2" style="background-color: #E0E1DC; color: #E0E1DC">-</div>
            <div class="col-2 "></div>
            <div class="col-6 d-flex flex-column justify-content-center">
            <h1>About Us</h1>
                <div>
                    Horizon is a a trip planner service which developed for the web. This appication allow the users to manage itineraries, search for tourist destination, and more.
                </div> 
            </div>
            <div class="col-2" style="background-color: #7D8DA6"></div>
        </div>
        <div class="row text-center " style="height: 300px">
            <div class="col"></div>
            <div class="col d-flex flex-column justify-content-center" style="background-color: #E0E1DC;">
                <h3>
                    #WHAT WE DO
                </h3>
           
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam mollitia, corrupti ullam dolores doloribus sequi molestiae eveniet omnis, nobis modi quidem voluptatum, praesentium consequatur ducimus vel? Necessitatibus, ipsam adipisci?
                </div>
            </div>
            <div class="col d-flex flex-column justify-content-center" style="background-color: #E0E1DC;">
                <h3>
                    # WE ARE
                </h3>     
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam mollitia, corrupti ullam dolores doloribus sequi molestiae eveniet omnis, nobis modi quidem voluptatum, praesentium consequatur ducimus vel? Necessitatibus, ipsam adipisci?
                </div>
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h3>
                    # VISION
                </h3>
                <div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi veniam mollitia, corrupti ullam dolores doloribus sequi molestiae eveniet omnis, nobis modi quidem voluptatum, praesentium consequatur ducimus vel? Necessitatibus, ipsam adipisci?
                </div>
            </div>
            <div class="col" style="background-color: #475B74"></div>
          </div>
      </div>

@endsection