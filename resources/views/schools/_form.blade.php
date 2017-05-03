<div class="form-group {{ $errors->has('school_name') ? ' has-error' : '' }}">
                        <label for="school_name" class="col-sm-2 control-label">School Name</label>
                        <div class="col-sm-6">
                          <input type="text" name="school_name" class="form-control" value="{{ $school->school_name or old('school_name') }}">
                          @if ($errors->has('school_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('school_name') }}</strong>
                            </span>
                          @endif
                        </div>
                      </div>
                      
                      <div class="form-group {{ $errors->has('school_acronym') ? ' has-error' : '' }}" >
                            
                        <label for="school_acronym" class="col-sm-2 control-label">School Acronym</label>
                        <div class="col-sm-6">
                          <input type="text" name="school_acronym" class="form-control" value="{{ $school->school_acronym or old('school_acronym') }}">
                          @if ($errors->has('school_acronym'))
                            <span class="help-block">
                                <strong>{{ $errors->first('school_acronym') }}</strong>
                            </span>
                           @endif
                        </div>
                      </div>
                      <div class="form-group">
                            <label class="col-sm-2 control-label">College</label>
                            <div class="col-sm-6">
                            <select name="college_id" class="form-control">
                                <option value="">-Select-</option>
                                @foreach($colleges as $college)
                                  <option value="{{ $college->id }}">{{ $college->college_name }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
                        </div>
                      </div>