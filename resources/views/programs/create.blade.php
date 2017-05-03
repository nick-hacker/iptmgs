@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Create Degreee Program</h1>
                </div>

                    <form class="form-horizontal" method="POST" action="/programs" >
                    {{ csrf_field() }}
                      <div class="form-group {{ $errors->has('program_code') ? ' has-error' : '' }}">
                        <label for="program_code" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="program_code" class="form-control" value="{{ old('program_code') }}">
                          @if ($errors->has('program_code'))
                            <span class="help-block">
                                <strong>{{ $errors->first('program_code') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group {{ $errors->has('program_name') ? ' has-error' : '' }}" >
                            
                        <label for="program_name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="program_name" class="form-control" value="{{ old('program_name') }}">
                          @if ($errors->has('program_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('program_name') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('program_acronym') ? ' has-error' : '' }}" >
                            
                        <label for="program_acronym" class="col-sm-2 control-label">Acronym</label>
                        <div class="col-sm-6">
                          <input type="text" name="program_acronym" class="form-control" value="{{ old('program_acronym') }}">
                          @if ($errors->has('program_acronym'))
                            <span class="help-block">
                                <strong>{{ $errors->first('program_acronym') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('weight') ? ' has-error' : '' }}" >
                            
                        <label for="weight" class="col-sm-2 control-label">Weight</label>
                        <div class="col-sm-6">
                          <input type="text" name="weight" class="form-control" value="{{ old('weight') }}">
                          @if ($errors->has('weight'))
                            <span class="help-block">
                                <strong>{{ $errors->first('weight') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>
                      <div class="form-group {{ $errors->has('program_years') ? ' has-error' : '' }}" >
                            
                        <label for="program_years" class="col-sm-2 control-label">Years</label>
                        <div class="col-sm-6">
                          <input type="text" name="program_years" class="form-control" value="{{ old('program_years') }}">
                          @if ($errors->has('program_years'))
                            <span class="help-block">
                                <strong>{{ $errors->first('program_years') }}</strong>
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
    