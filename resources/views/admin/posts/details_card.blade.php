<div class="row clone">
        <div class="form-group col-md-3">
            <label for="exampleInputName">@lang('site.title')</label>
            <input type="text" name="detail_title[]" required value="{{old('detail_title')}}"  class="form-control" id="exampleInputdetail_title" placeholder="@lang('site.Enter') @lang('site.title')">
            @error('detail_title')
            <label class="alert alert-danger ">{{$message}}</label>
            @enderror
        </div>     
        <div class="form-group col-md-3">
            <label for="exampleInputName">@lang('site.description')</label>
            <input type="text" name="detail_description[]" required value="{{old('detail_description')}}"  class="form-control" id="exampleInputdetail_description" placeholder="@lang('site.Enter') @lang('site.description')">
            @error('detail_description')
            <label class="alert alert-danger ">{{$message}}</label>
            @enderror
        </div>       
        <div class="form-group col-md-2">
            <label for="exampleInputName">@lang('site.type')</label>
            <input type="text" name="detail_type[]" required value="{{old('detail_type')}}"  class="form-control" id="exampleInputdetail_type" placeholder="@lang('site.Enter') @lang('site.type')">
            @error('detail_type')
            <label class="alert alert-danger ">{{$message}}</label>
            @enderror
        </div>     
           
        <div class="form-group col-md-3">
            <label for="customFile">@lang('site.image')</label>
                <div class="custom-file">
                <input type="file" required name="image[]"accept="image/*"  class="custom-file-input btn-primary" id="customFile">
                <label class="custom-file-label" for="customFile">@lang('site.choose')</label>
                </div>
                @error('image')
                <label class="alert alert-danger ">{{$message}}</label>
                @enderror

            </div>
               
                <div class="col-md-1  ">
                    <span class="btn text-black btn-del-select py-2"><i class="fas fa-times"></i></span>
                </div>
</div>