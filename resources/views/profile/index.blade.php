@extends('layouts.front')

@section('content')
    <div class="container">
      <div class="row">
            <h2>Myプロフィール</h2>
        </div>
        <hr color="#DDEEDD">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="name p-2">
                                    <h1>{{ str_limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                            <div class="caption mx-auto">
                                <div class="gender p-2">
                                    <h1>{{ str_limit($headline->gender, 70) }}</h1>
                                </div>
                            </div>
                            <div class="caption mx-auto">
                                <div class="hobby p-2">
                                    <h1>{{ str_limit($headline->hobby, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="introduction mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
       <hr color="#DDEEDD">
    </div>
</div>
@endsection