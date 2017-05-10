@extends('layouts.master')

        <!-- Navigation -->
        @include('layouts.nav')

        @section('content') 
         
        <div id="page-wrapper">

            <div class="row">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4></h4>
                    </div>
                    <div class="panel-body">
                    <h2>{{ $post->name_of_post }}</h2>

                        {{ $post->description }}

                        <hr>

                        <ul class="list-group">
                            @foreach($post->comments as $comment)
                                <li class="list-group-item">
                                    <strong>
                                        {{ $comment->created_at->diffForHumans() }}: &nbsp;    
                                    </strong>
                                    {{ $comment->body }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal" method="POST" action="/posts/{{ $post->id }}/comments" >
                                    {{ csrf_field() }}
                                      <div class="form-group {{ $errors->has('body') ? ' has-error' : '' }}" >
                                            
                                        <label for="body" class="col-sm-2 control-label">Comment</label>
                                        <div class="col-sm-10">
                                          <textarea class="form-control" name="body" rows="4" value="{{ old('body') }}"> </textarea>
                                          @if ($errors->has('body'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('body') }}</strong>
                                            </span>
                                           @endif
                                        </div>
                                    </div>
                              
                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-primary">Add Comment</button>
                                    </div>
                                  </div>
                        </form>                
                        
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            
        </div>
        
@endsection
    