@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Organizations</h1>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="/organizations/create" class="btn btn-primary pull-right">New</a>
                            <br><br>
                            @if($organizations->count())
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Added</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($organizations as $organization)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $organization->name_of_org }}</td>
                                                <td>{{ str_limit($organization->description, 50) }}</td>
                                                <td><a href="/organizations/{{ $organization->id }}/edit">Edit</a></td>
                                                <td>
                                                    <a class="btn btn-danger" data-toggle="modal" href='#{{ $organization->id }}'>Delete</a>
                                                    <div class="modal fade" id="{{ $organization->id }}">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                    <h4 class="modal-title">Delete {{ $organization->college_name }}</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Delete {{ $organization->college_name }}?
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
    