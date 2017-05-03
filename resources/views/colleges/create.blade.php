@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Create Colleges</h1>
                </div>

                        <form class="form-horizontal" method="POST" action="/colleges" >
                    {{ csrf_field() }}
                      <div class="form-group {{ $errors->has('college_name') ? ' has-error' : '' }}">
                        <label for="college_name" class="col-sm-2 control-label">College Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="college_name" class="form-control" value="{{ old('college_name') }}">
                          @if ($errors->has('college_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('college_name') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group {{ $errors->has('college_acronym') ? ' has-error' : '' }}" >
                            
                        <label for="college_acronym" class="col-sm-2 control-label">College Acronym</label>
                        <div class="col-sm-6">
                          <input type="text" name="college_acronym" class="form-control" value="{{ old('college_acronym') }}">
                          @if ($errors->has('college_acronym'))
                            <span class="help-block">
                                <strong>{{ $errors->first('college_acronym') }}</strong>
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
    