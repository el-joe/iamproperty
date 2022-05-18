@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-xl-8 col-md-12">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25">
                                            <img src="https://img.icons8.com/bubbles/100/000000/user.png"
                                                class="img-radius" alt="User-Profile-Image">
                                        </div>
                                        <h6 class="f-w-600">{{$user->name}}</h6>
                                        @if($address->status == 200 && !isset($address->error))
                                            <a target="_blank" href="https://www.google.com/maps/{{'@'.$address->result->latitude}},{{$address->result->longitude}},12z" class="btn btn-info">Show Address</a>
                                        @endif
                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400">{{$user->email}}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Phone</p>
                                                <h6 class="text-muted f-w-400">{{$user->phone}}</h6>
                                            </div>
                                        </div>
                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Address</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h6 class="text-muted f-w-400">
                                                    @if($address->status == 200 && !isset($address->error))
                                                        {{$address->result->postcode}} , {{$address->result->admin_ward}} , {{$address->result->country}}
                                                    @endif
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
