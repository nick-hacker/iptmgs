@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Create Courses</h1>
                </div>

                        <form class="form-horizontal" method="POST" action="/programs" >
                    {{ csrf_field() }}
                      <div class="form-group {{ $errors->has('course_code') ? ' has-error' : '' }}">
                        <label for="course_code" class="col-sm-2 control-label">Code</label>
                        <div class="col-sm-6">
                          <input type="text" name="course_code" class="form-control" value="{{ old('course_code') }}">
                          @if ($errors->has('course_code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('course_code') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group {{ $errors->has('course_name') ? ' has-error' : '' }}" >
                            
                        <label for="course_name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="course_name" class="form-control" value="{{ old('course_name') }}">
                          @if ($errors->has('course_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('course_name') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('pass_grade') ? ' has-error' : '' }}" >
                            
                        <label for="pass_grade" class="col-sm-2 control-label">Grade</label>
                        <div class="col-sm-6">
                          <input type="text" name="pass_grade" class="form-control" value="{{ old('program_acronym') }}">
                          @if ($errors->has('pass_grade'))
                            <span class="help-block">
                                <strong>{{ $errors->first('pass_grade') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('cw') ? ' has-error' : '' }}" >
                            
                        <label for="cw" class="col-sm-2 control-label">Course Work</label>
                        <div class="col-sm-6">
                          <input type="text" name="cw" class="form-control" value="{{ old('cw') }}">
                          @if ($errors->has('cw'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cw') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>
                      <div class="form-group {{ $errors->has('ue') ? ' has-error' : '' }}" >
                            
                        <label for="ue" class="col-sm-2 control-label">University exam</label>
                        <div class="col-sm-6">
                          <input type="text" name="ue" class="form-control" value="{{ old('ue') }}">
                          @if ($errors->has('ue'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ue') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>
                      <!-- <div class="form-group">
                            <label>Selects</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div> -->
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                      </div>
                </form>       
                <!-- /.col-lg-12 -->

            </div>

            
            
        </div>
        
@endsection
    