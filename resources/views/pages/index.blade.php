@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->

            </div>

            @include('layouts.initialpage')
            
        </div>
        
@endsection
    