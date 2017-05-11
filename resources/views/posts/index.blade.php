@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                <br/>
                    <span class="pull-left"><strong>Loged in as: </strong>T/UDOM/2013/04620</span>
                    <!-- <span class="pull-center"><strong>Loged in as:</strong>T/UDOM/2013/04620</span> -->
                    <span class="pull-right">Wednesday 10th of May 2017</span>
                    <h1 class="page-header" align="center">Posts</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/posts/create" class="btn btn-primary pull-right">Add New</a>
                            <br/>
                            @if($posts->count())
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Organization</th>
                                            <th>Available Post</th>
                                            <th>Post Criteria</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $post->name_of_post }}</td>
                                                <td><a href="/posts/{{$post->id}}"> {{ str_limit($post->description, 50) }}</a></td>
                                                <td>{{ $post->organization }}</td>
                                                <td>{{ $post->number_of_posts }}</td>
                                                <td>{{ $post->post_criteria }}</td>
                                                <td><a href="/posts/{{ $post->id }}/edit">Edit</a></td>
                                                <td>
                                                    <a class="btn btn-danger" data-toggle="modal" href='#{{ $post->id }}'>Delete</a>
                                                    <div class="modal fade" id="{{ $post->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title">Delete {{ $post->name_of_post }}</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Delete {{ $post->name_of_post }}?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-primary">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach                           
                                    </tbody>
                                </table>
                            @endif

                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->

            </div>

            
        </div>
        
@endsection
    