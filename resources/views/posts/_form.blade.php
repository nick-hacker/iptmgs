<div class="form-group {{ $errors->has('name_of_post') ? ' has-error' : '' }}">
  <label for="name_of_post" class="col-sm-2 control-label">Post Title</label>
  <div class="col-sm-6">
    <input type="text" name="name_of_post" class="form-control" value="{{ $post->name_of_post or old('name_of_post') }}">
    @if ($errors->has('name_of_post'))
      <span class="help-block">
          <strong>{{ $errors->first('name_of_post') }}</strong>
      </span>
    @endif
  </div>
</div>

<div class="form-group {{ $errors->has('number_of_posts') ? ' has-error' : '' }}" >
      
  <label for="number_of_posts" class="col-sm-2 control-label">Available Post</label>
  <div class="col-sm-6">
    <input type="text" name="number_of_posts" class="form-control" value="{{ $post->number_of_posts or old('number_of_posts') }}">
    @if ($errors->has('number_of_posts'))
      <span class="help-block">
          <strong>{{ $errors->first('number_of_posts') }}</strong>
      </span>
     @endif
  </div>
</div>

<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}" >
      
  <label for="description" class="col-sm-2 control-label">Description</label>
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
      <label class="col-sm-2 control-label">Select Organization</label>
      <div class="col-sm-4">
      <select name="org_id" class="form-control">
          <option value="">-Select-</option>
          @foreach($organizations as $organization)
          <option value="{{ $organization->id }}">{{ $organization->name_of_org }}</option>
          @endforeach
      </select>
      
      </div>
      <div class="col-sm-2">
        <a href="/organizations/create" class="btn btn-link">Or Create New</a>
      </div>
  </div>
  <div class="form-group">
      <label class="col-sm-2 control-label">Select Category</label>
      <div class="col-sm-4">
      <select name="cartegory_id" class="form-control">
          <option value="">-Select-</option>
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
      </select>
      </div>
      <div class="col-sm-2">
        <a href="/categories/create" class="btn btn-link">Or Create New</a>
      </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">{{ $btnText }}</button>
    </div>
  </div>