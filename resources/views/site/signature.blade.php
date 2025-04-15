@extends('site.layouts.app')
@section('content')



<main class="main-content">
        <!-- Start Banner-h -->
        <section class="banner-h banner-sign">
            <div class="overlay-img">
                <video   src="{{url('/')}}/{{$info->video}}" loop muted playsinline autoplay id="myvideo"></video>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="banner-text">
                            <h1>
                            {{$info->hint1}}
                            </h1>

                            <p>
                            {{$info->description}}
                            </p>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Banner-h -->

        <!-- Start Chosse-h -->
        <section class="chosse-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="title title-dark">
                            <h3>
                                Choose your Adventure
                            </h3>
                        </div>

                        <div class="select-country-inner">
                            <form action="#">
                                <div class="form-group">
                                    <select class="form-control niceSelect select-type">
                                        <option selected disabled>Type</option>
                                        @foreach($categories as $category)
                                             <option value="{{$category->id}}">{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="form-control niceSelect select-country">
                                        <option selected disabled>Country</option>
                                        @foreach($areas as $area)
                                             <option value="{{$area->id}}">{{$area->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn" id="searchFilterBtn1">
                                        Search
                                    </button>
                                </div>
                            </form>

                            <div class="all-choose row">
                                <!-- Col -->
                                <div class="col-md-12">
                                    <div class="result-h">
                                        Showing <span class="count-h">0</span> results <span
                                            class="word-choosing"></span>
                                    </div>
                                </div>
                                <!-- /Col -->
                                 <div class="row" id="results">

                                 </div>

                             
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Chosse-h -->

        <!-- Start Create-h -->
        <section class="create-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="create-text">
                            <h2>
                                Want to create your own expedition?
                            </h2>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#orderModal">
                                <span>
                                    Go For It
                                </span>
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Create-h -->
    </main>

    <!-- Modal -->
    <div class="modal fade orderModal" id="orderModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title text-center">
                        <h3>
                            create your own expedition
                        </h3>
                    </div>
                    <div class="form-modal">
                    <form action="{{route('site.contact.store')}}" method="post">
                                    @csrf
                                    <!-- Form-group -->
                                    <div class="form-group">
                                        <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="NAME" />
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                     
                                    <!-- Form-group -->
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="EMAIL" />
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                     
                                    <!-- Form-group -->
                                    <div class="form-group">
                                        <input type="tel"  name="phone" value="{{old('phone')}}" class="form-control phone" placeholder="MOBILE" />
                                        @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                     
                                    <!-- Form-group -->
                                    <div class="form-group">
                                        <select class="form-control " name="level_of_fitness"  placeholder="Level of fitness" >
                                         <option disabled selected>LEVEL OF FITNESS</option>
                                         <option value="Beginner" {{old("level_of_fitness")=="Beginner"?"selected":""}}>Beginner</option>
                                         <option value="Intermediate" {{old("level_of_fitness")=="Intermediate"?"selected":""}}>Intermediate</option>
                                         <option value="Advanced" {{old("level_of_fitness")=="Advanced"?"selected":""}}>Advanced</option>
                                        </select>
                                        @error('level_of_fitness')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                       <!-- Form-group -->
                                    <div class="form-group">
                                        <select class="form-control " name="budget" placeholder="Budget" >
                                         <option disabled selected>BUDGET</option>
                                         <option value="0-2000" {{old("budget")=="0-2000"?"selected":""}}>0 $ - 2000 $</option>
                                         <option value="2000-5000" {{old("budget")=="2000-5000"?"selected":""}}> 2000 $ -  5000  $</option>
                                         <option value="5000-7000" {{old("budget")=="5000-7000"?"selected":""}}>5000 $ - 7000 $</option>
                                         <option value="7000-10000" {{old("budget")=="7000-10000"?"selected":""}}>7000 $ - 10000 $</option>
                                        </select>
                                        @error('budget')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                     
                                    <!-- Form-group -->
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="INQUIRY">{{old('message')}}</textarea>
                                        @error('message')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                      <!-- Form-group -->
                                    <div class="form-group">
                                        <input type="checkbox" required checked name="privacy_policy" id="privacy_policy">
                                         <label for="privacy_policy">I AGREE PRIVACY POLICY</label>
                                         @error('privacy_policy')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- /Form-group -->
                                    <!-- Form-group -->
                                    <div class="form-group">
                                        <button type="submit" class="btn">
                                            <span>
                                                SEND
                                            </span>
                                        </button>
                                    </div>
                                    <!-- /Form-group -->
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        filter();
    });

    $("#searchFilterBtn1").on('click',function(){
        filter();
        });

        function filter(page){
    
      var type = $('.select-type').val();
      var country = $('.select-country').val();
  
                  $.ajax({
                    url: '{{route("countries.filter")}}',
                    method: 'get',
                    data: {

                        type: type,
                        country:country,
                        },
                    success: function(response) {
                      console.log(response);
                      console.log(response.count);
                  
                     
                        $("#results").empty();
                      $("#results").append(response.html);

                      $(".count-h").html(response.count);

                        
                    },
                    error: function(error) {
                        console.log('AJAX Error:', error);
                    }
             });
    }
    
</script>
@endsection