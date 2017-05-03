@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Schools</h1>
                </div>
                <!-- /.col-lg-12 -->
                <form class="form-horizontal" method="POST" action="/schools" >
                    {{ csrf_field() }}
                      @include('schools._form', ['btnText' => 'Create'])
                </form>   

            </div>

            
        </div>
        
@endsection
    