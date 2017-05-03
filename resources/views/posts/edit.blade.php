@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Edit {{ $college->college_name }}</h1>
                </div>

                    <form class="form-horizontal" method="POST" action="/colleges/{{ $college->id }}" >
                    {{ csrf_field() }}

                    {{ method_field('patch') }}

                     @include('colleges._form', ['btnText' => 'Update'])
                </form>       
                <!-- /.col-lg-12 -->

            </div>

            
            
        </div>
        
@endsection
    