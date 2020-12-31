<div class="card">
    <div class="card-body">

     
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
            @if ($errors->has('name'))
                <code>{{ $errors->first('name') }}</code>
            @endif
        </div> 

         <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" id="phone" name="phone" class="form-control" value="{{old('phone')}}">
            @if ($errors->has('phone'))
                <code>{{ $errors->first('phone') }}</code>
            @endif
        </div>    

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control" value="{{old('address')}}">
            @if ($errors->has('address'))
                <code>{{ $errors->first('address') }}</code>
            @endif
        </div>
       
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
            @if ($errors->has('email'))
                <code>{{ $errors->first('email') }}</code>
            @endif
        </div>

        <div class="form-group">
            <label for="blood_group">Blood Group</label>
                <select class="select2 form-control custom-select" id="blood_group" name="blood_group" style="width: 100%; height:36px;">
                        
                    <option selected="selected" disabled="disabled">Select</option>

                    @foreach ($blood_groups as $blood_group)
                        <option value="{{ $blood_group->name }}">{{ $blood_group->name }}</option>
                    @endforeach

                </select>
            @if ($errors->has('blood_group'))
                <code>{{ $errors->first('blood_group') }}</code>
            @endif

        </div>

      <!--   <div class="form-group">
            <label for="body"></label>
            <textarea id="body" name="body" class="form-control tinymce" rows="20"></textarea>

            @if ($errors->has('body'))
                <code>{{ $errors->first('body') }}</code>
            @endif
        </div>

        <div class="form-group">
            <label class="">File Upload</label>
            <div class="col-md-4" style="padding-left:0;">
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                </div>
            </div>


            @if ($errors->has('image'))
                <code>{{ $errors->first('image') }}</code>
            @endif
        </div>                        
 -->

    </div>
    <!-- card body end -->
    
    <div class="border-top">
        <div class="card-body">
            <button type="submit" class="btn btn-success">Create New Post</button>
        </div>
    </div>
</div>