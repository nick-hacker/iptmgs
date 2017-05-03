@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Schools</h1>
                                        <div class="row">
                        <div class="col-sm-12">
                            
                            <a href="/schools/create" class="btn btn-primary pull-right">New</a>

                            <br><br>

                            @if($schools->count())
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Added</th>
                                            <th colspan="2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($schools as $school)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $school->school_name }}</td>
                                                <td>{{ $school->created_at }}</td>
                                                <td><a href="/schools/{{ $school->id }}/edit">Edit</a></td>
                                                <td><a href="#">Delete</a></td>
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
    