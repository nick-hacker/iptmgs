@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Posts</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/posts/create" class="btn btn-primary pull-right">New</a>
                            <br><br>
                            @if($posts->count())
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Organization</th>
                                            <th>Post Number</th>
                                            <th>Post Criteria</th>
                                            <th>Added</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $post->name_of_post }}</td>
                                                <td>{{ str_limit($post->description, 50) }}</td>
                                                <td>{{ $post->organization }}</td>
                                                <td>{{ $post->post_number }}</td>
                                                <td>{{ $post->post_criteria }}</td>
                                                <td><a href="/colleges/{{ $post->id }}/edit">Edit</a></td>
                                                <td>
                                                    <a class="btn btn-danger" data-toggle="modal" href='#{{ $post->id }}'>Delete</a>
                                                    <div class="modal fade" id="{{ $post->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title">Delete {{ $post->college_name }}</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Delete {{ $post->college_name }}?
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
    