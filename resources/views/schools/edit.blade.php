@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Edit {{ $school->school_name }}</h1>
                </div>
                <!-- /.col-lg-12 -->
                <form class="form-horizontal" method="POST" action="/schools/{{ $school->id }}" >
                    {{ csrf_field() }}


                    {{ method_field('PATCH') }}

                      @include('schools._form', ['btnText' => 'Update'])
                </form>   

            </div>

            
        </div>
        
@endsection
    