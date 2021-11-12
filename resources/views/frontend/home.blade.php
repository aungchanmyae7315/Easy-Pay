@extends('frontend.layouts.app')

@section('content')
@yield('css')

    <div>
        <main>
            @include('frontend.layouts.header')
            @include('frontend.layouts.body')
            @include('frontend.layouts.footer') 
        </main>
        
    </div>
      
   
@endsection
