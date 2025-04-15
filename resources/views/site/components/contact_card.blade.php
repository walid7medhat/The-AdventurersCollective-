<!-- Start Contact-page -->
<section class="contact-page">
            <div class="container-fluid">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <!-- <div class="title-contact">
                            <h2>
                                Get in Touch
                            </h2>
                        </div> -->
                    </div>
                    <!-- /Col -->
 <div class="col-md-1"></div>
                    <!-- Col -->
                    <div class="col-md-5">
                        <div class="contact-inner">
                            
                            <!-- Item -->
                            <div class="contact-item ">
                                <h2>
                                      GET IN TOUCH
                                </h2>
                                <p>Prices vary based on season, destination, number of people, and personalized trip details.</p>
                                <p>Get a tailored quote for your dream adventure. Contact us to discuss your needs and preferences.</p>
                                <!-- <p>
                                    For PR and Partnerships opportunities, please send your enquiry to
                                </p> -->
                                <!-- <a href="#" target="_blank">
                                    <u>
                                        theadeventurerscollective@gmail.com
                                    </u>
                                </a>. -->
                            </div>
                            <!-- /Item -->
                        </div>
                    </div>
                    <!-- /Col -->
     <div class="col-md-1"></div>
                    <!-- Col -->
                    <div class="col-md-5">
                        <div class="contact-inner">
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
                                       <div class="form-group row">
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
                                        
                                        <div class="form-group row">
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
                                         <label for="privacy_policy">I AGREE TO THE PRIVACY POLICY</label>
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
                    <!-- /Col -->
                    
                </div>
            </div>
        </section>
        <!-- End Contact-page -->