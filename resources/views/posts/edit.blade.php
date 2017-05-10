@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Edit Post {{ $post->name_of_post }}</h1>
                </div>

                    <form class="form-horizontal" method="POST" action="/posts/{{ $post->id }}" >
                    {{ csrf_field() }}

                    {{ method_field('patch') }}

                     @include('posts._form', ['btnText' => 'Update'])
                    </form>       
                    <!-- /.col-lg-12 -->

            </div>
            
        </div>
        
@endsection
    