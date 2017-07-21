@extends('layouts.master')
@section('title')
    {{ 'CarRent' }}
@endsection
@section('content')

    <div id="models" class="models">
        <div class="row">
        <div class="col-md-10 col-sm-6 col-lg-10">
            <h3 class="text-center">Available models</h3>
            <div class="btn-group btn-group-justified " role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <button type="button"  class="btn btn-default" @click="switchView('sedans')">Sedans</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default"   @click="switchView('off_roaders')">Off-roaders</button>
                </div>
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default" @click="switchView('family_cars')">Family cars</button>
                </div>
            </div>
        </div>
      </div>
        <component :is="currentView" transition="switch"></component>
    </div>




    <template id="sedans">
        <div class="sedans models_list">
            <img src="{{URL::asset('images/sedans/audi-a6.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/sedans/chevrolet-impala.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/sedans/honda-accord.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/sedans/mazda-mazda-6.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/sedans/mercedes-benz-c-class.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/sedans/volkswagen-passat.jpg')}}" alt="" width="250" height="150">
        </div>
    </template>

    <template id="off-roaders">
       <div class="off-roaders models_list">
            <img src="{{URL::asset('images/off-roaders/Nissan-Qashqai-2015.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/off-roaders/Nissan-X-Trail-2015.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/off-roaders/Dacia-Duster-compact-2015.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/off-roaders/Skoda-Yeti-2015.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/off-roaders/Volkswagen-Touareg-2015.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/off-roaders/Range-Rover-Sport-2015.jpg')}}" alt="" width="250" height="150">
       </div>
    </template>

    <template id="family-cars">
        <div class="family-cars models_list">
            <img src="{{URL::asset('images/family-cars/honda-odyssey.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/family-cars/chrysler-town-country.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/family-cars/ford-transit-connect.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/family-cars/i40-hyundai.png')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/family-cars/mazda-mazda-5.jpg')}}" alt="" width="250" height="150">
            <img src="{{URL::asset('images/family-cars/opel-zafira-5d-silber-2012.png')}}" alt="" width="250" height="150">
        </div>
    </template>


@endsection
