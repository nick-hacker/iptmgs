@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Create Organization</h1>
                </div>

                        <form class="form-horizontal" method="POST" action="/organizations" >
                    {{ csrf_field() }}
                      @include('organizations._form', ['btnText' => 'Add'])
                </form>       
                <!-- /.col-lg-12 -->

            </div>

            
            
        </div>
        
@endsection
    