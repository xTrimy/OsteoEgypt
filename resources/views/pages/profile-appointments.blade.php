@extends('layouts.profile')

@section('title')
    Profile
@endsection

@section('contents-outside-wrapper')
<div class="w-full h-80 -mt-8 bg-black">
    <img class="w-full h-full object-cover opacity-30" src="{{ asset('assets/image/zb9tj0.jpg') }}" alt="">
</div>
@endsection

@section('profile-nav')
<div class="font-semibold flex w-full my-4 border-0 border-b pb-2 uppercase border-solid border-blueGray-light">
    <div class="text-xl pr-4 text-gray-400">
        <a href="{{ route('profile-about') }}">About</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-appointments') }}">Appointments</a>
    </div>
    <div class="text-xl px-4  text-gray-400">
        <a href="{{ route('profile-doctors') }}">Doctors</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile-payment') }}">Payment</a>
    </div>
</div>
@endsection

@section('profile-data')
<h1 class="text-2xl font-extrabold text-blueGray-dark">
    Upcoming
</h1>
<div class="flex w-full h-44 border border-solid border-gray-300 mt-3 relative">
    <div class="flex-initial w-2/12 h-full bg-chillBlue text-white flex flex-col justify-center items-center">
        <h1 class="text-4xl uppercase">Jan 06</h1>
        <p class="text-lg">08:00 PM</p>
    </div>
    <div class="w-8/12 p-6 flex flex-col justify-between ">
        <div class="flex">
            <div class="flex-1 flex text-lg">
                <div class="text-gray-400 mr-8 uppercase w-32">Location</div>
                <div class="text-blueGray-dark font-bold flex-initial">Masr-elgedida-cairo</div>
            </div>
            <div class="flex-1 flex text-lg">
                <div class="text-gray-400 mr-4 uppercase w-32">Date</div>
                <div class="text-blueGray-dark font-bold">xxxxxxxxxxx</div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 flex text-lg">
                <div class="text-gray-400 mr-8 uppercase w-32">Visit type</div>
                <div class="text-blueGray-dark font-bold">xxxxx</div>
            </div>
            <div class="flex-1 flex text-lg">
                <div class="text-gray-400 mr-4 uppercase w-32">Time</div>
                <div class="text-blueGray-dark font-bold">xxxxx</div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 flex text-lg">
                <div class="text-gray-400 mr-8 uppercase w-32">Doctor</div>
                <div class="text-blueGray-dark font-bold">xxxx</div>
            </div>
        </div>
        
    </div>
    <div class="absolute flex h-10 bottom-0 right-0">
        <button class="px-10 py-3 border-none bg-blueGray-light text-blueGray-dark cursor-pointer font-bold">
            <i class="fas fa-paperclip"></i> View Attachment
        </button>
        <button class="px-10 py-3 border-none bg-red-300 text-black cursor-pointer font-bold">
            Cancel
        </button>
    </div>
    
</div>
    
@endsection

@section('profile-title')
    Profile Details    
@endsection