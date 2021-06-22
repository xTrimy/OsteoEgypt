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
        <a href="{{ route('profile-about',$user->id) }}">About</a>
    </div>
    <div class="text-xl px-4 border-0 border-b-4 border-chillBlue border-solid -mb-2.5 text-blueGray-dark font-extrabold">
        <a href="{{ route('profile-appointments',$user->id) }}">Appointments</a>
    </div>
    <div class="text-xl px-4  text-gray-400">
        <a href="{{ route('profile-doctors',$user->id) }}">Doctors</a>
    </div>
    <div class="text-xl px-4 text-gray-400 ">
        <a href="{{ route('profile-payment',$user->id) }}">Payment</a>
    </div>
    <div class="text-xl px-4 text-gray-400">
        <a href="{{ route('profile-badges',$user->id) }}">Badges</a>
</div>
</div>
@endsection

@section('profile-data')
<h1 class="text-2xl font-extrabold text-blueGray-dark mb-8">
    Upcoming
</h1>
@if(!isset($upcoming))
    @if($upcoming->first()->appointment_available_time == null)
        <p class="mb-8">No upcoming appointments.</p>
    @endif
@endif
@foreach ($upcoming as $appointment)
    @if($appointment->appointment_available_time)
    <div class="flex w-full h-52 border border-solid border-blueGray-light mt-3 relative mb-8 bg-white">
    <div class="flex-initial w-2/12 lg:w-3/12 h-full bg-chillBlue text-white flex flex-col justify-center items-center">
        <h1 class="text-lg lg:text-4xl uppercase">{{ date('M d',strtotime($appointment->appointment_available_time->appointment_time))  }}</h1>
        <p class="text-base lg:text-lg">{{ date('h:i A',strtotime($appointment->appointment_available_time->appointment_time)) }}</p>
    </div>
    <div class="w-8/12 p-4 lg:p-8 flex flex-col lg:justify-between ">
        <div class="lg:flex">
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-8 uppercase w-14 md:w-32">Location</div>
                <div class="text-blueGray-dark font-bold flex-initial">{{ $appointment->appointment_available_time->branch->name }}</div>
            </div>
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-2 uppercase w-14 md:w-32">Date</div>
                <div class="text-blueGray-dark font-bold">{{ date('Y/m/d',strtotime($appointment->appointment_available_time->appointment_time)) }}</div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-2 md:mr-8 uppercase w-14 md:w-32">Visit type</div>
                <div class="text-blueGray-dark font-bold">{{ $appointment->appointment_available_time->type->name }}</div>
            </div>
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-2 md:mr-4 uppercase w-14 md:w-32">Time</div>
                <div class="text-blueGray-dark font-bold">{{ date('h:i A',strtotime($appointment->appointment_available_time->appointment_time)) }}</div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-8 uppercase w-14 md:w-32">Doctor</div>
                <div class="text-blueGray-dark font-bold">{{ $appointment->appointment_available_time->doctor->name }}</div>
            </div>
        </div>
        
    </div>
    <div class="absolute flex h-10 bottom-0 right-0 ">
        <button class="w-40 flex items-center justify-center px-2 md:px-8 py-3 border-none bg-chillBlue-lighter text-chillBlue cursor-pointer font-bold hover:bg-chillBlue-light">
            <i class="fas fa-paperclip text-blueGray-dark text-base mr-3 "></i> View Attachment
        </button>
        <button class="w-36 px-10 py-3 border-none bg-xred-lightest text-xred-dark cursor-pointer font-bold hover:bg-xred-light">
            Cancel
        </button>
    </div>
    
</div>
@endif
@endforeach
<h1 class="text-2xl font-extrabold text-blueGray-dark mb-8">
    History
</h1>
@if(!isset($history))
    @if($history->first()->appointment_available_time == null)
        <p class="mb-8">No history.</p>
    @endif
@endif
@foreach ($history as $appointment)
    @if($appointment->appointment_available_time)
    <div class="flex w-full h-44 border border-solid border-blueGray-light mt-3 relative bg-white">

    <div class="w-12/12 md:w-8/12 p-6 flex flex-col justify-between ">
        <div class="flex">
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-12 md:mr-8 uppercase w-12 md:w-32">Location</div>
                <div class="text-blueGray-dark font-bold flex-initial">{{ $appointment->appointment_available_time->branch->name }}</div>
            </div>
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-2 md:mr-4 uppercase w-11 md:w-32">Date</div>
                <div class="text-blueGray-dark font-bold">{{ date('Y/m/d',strtotime($appointment->appointment_available_time->appointment_time)) }}</div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-4 md:mr-8 uppercase w-11 md:w-32">Visit type</div>
                <div class="text-blueGray-dark font-bold">{{ $appointment->appointment_available_time->type->name }}</div>
            </div>
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-2 md:mr-4 uppercase w-11 md:w-32">Time</div>
                <div class="text-blueGray-dark font-bold">{{ date('h:i A',strtotime($appointment->appointment_available_time->appointment_time)) }}</div>
            </div>
        </div>
        <div class="flex">
            <div class="flex-1 flex text-base md:text-lg">
                <div class="text-gray-400 mr-8 uppercase w-11 md:w-32">Doctor</div>
                <div class="text-blueGray-dark font-bold">{{ $appointment->appointment_available_time->doctor->name }}</div>
            </div>
        </div>
        
    </div>
    <div class="absolute flex h-10 bottom-0 right-0">
        <button class="w-52 flex items-center justify-center px-8 py-3 border-none bg-chillBlue text-white cursor-pointer font-bold hover:bg-chillBlue-dark">
             Book Again
        </button>
    </div>
</div>
@endif
@endforeach

@endsection

@section('profile-title')
    Profile Details    
@endsection