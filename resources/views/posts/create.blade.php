@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <hr>

                <div class="">
                    <span class="pull-left"><strong>Loged in as: </strong>T/UDOM/2013/04620</span>
                    <!-- <span class="pull-center"><strong>Loged in as:</strong>T/UDOM/2013/04620</span> -->
                    <span class="pull-right">Wednesday 10th of May 2017</span>
                    <!-- <h1 class="page-header">Create Post</h1> -->
                </div>

                <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- <span class="align-center">Create new post</span> -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="/posts" >
                                {{ csrf_field() }}
                                  @include('posts._form', ['btnText' => 'Create'])
                            </form>       
                        </div>
                </div>

            </div>

            
            
        </div>
        
@endsection
    