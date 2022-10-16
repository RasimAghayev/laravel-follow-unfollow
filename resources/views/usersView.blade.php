@extends('layouts.app')

@section('content')
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $user->name }}
                        <br/>
                        <small>
                            <strong>Website:</strong> Codechief.org,
                            <strong>Email: </strong>{{ $user->email }}
                        </small>
                    </div>

                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#followers" role="tab" aria-controls="nav-home" aria-selected="true">Followers <span class="badge badge-primary">{{ $user->followers()->get()->count() }}</span></a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#following" role="tab" aria-controls="nav-profile" aria-selected="false">Following <span class="badge badge-primary">{{ $user->followings()->get()->count() }}</span></a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="followers" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="row pl-5">
                                    @include('userList', ['users'=>$user->followers()->get()])
                                </div>
                            </div>
                            <div class="tab-pane fade" id="following" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row pl-5">
                                    @include('userList', ['users'=>$user->followings()->get()])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
