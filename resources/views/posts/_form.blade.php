 <div class="form-group {{ $errors->has('college_name') ? ' has-error' : '' }}">
                        <label for="college_name" class="col-sm-2 control-label">Name Of Post</label>
                        <div class="col-sm-6">
                          <input type="text" name="college_name" class="form-control" value="{{ $college->college_name or old('college_name') }}">
                          @if ($errors->has('college_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('college_name') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group {{ $errors->has('college_acronym') ? ' has-error' : '' }}" >
                            
                        <label for="college_acronym" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-6">
                          <input type="text" name="college_acronym" class="form-control" value="{{ $college->college_acronym or old('college_acronym') }}">
                          @if ($errors->has('college_acronym'))
                            <span class="help-block">
                                <strong>{{ $errors->first('college_acronym') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>
                      <div class="form-group">
                            <label class="col-sm-2 control-label">Select Organization</label>
                            <div class="col-sm-4">
                            <select class="form-control">
                                <option value="">-Select-</option>
                                @foreach($organizations as $organization)
                                <option value="{{ $organizations->id }}">{{ $organization->name_of_org }}</option>
                                @endforeach
                            </select>
                            
                            </div>
                            <div class="col-sm-2">
                              <a href="/organizations/create" class="btn btn-link">Or Create New</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Select Category</label>
                            <div class="col-sm-6">
                            <select class="form-control">
                                <option value="">-Select-</option>
                                @foreach($organizations as $organization)
                                <option value="{{ $organizations->id }}">{{ $organization->name_of_org }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
                        </div>
                      </div>