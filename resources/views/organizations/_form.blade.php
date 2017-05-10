 <div class="form-group {{ $errors->has('college_name') ? ' has-error' : '' }}">
                        <label for="name_of_post" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-6">
                          <input type="text" name=" name_of_org" class="form-control" value="{{ $college->college_name or old('name_of_post') }}">
                          @if ($errors->has('name_of_post'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name_of_post') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group {{ $errors->has('college_acronym') ? ' has-error' : '' }}" >
                            
                        <label for="description" class="col-sm-2 control-label">About (Option)</label>
                        <div class="col-sm-6">
                          <input type="text" name="description" class="form-control" value="{{ $post->description or old('description') }}">
                          @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
                        </div>
                      </div>