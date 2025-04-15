@foreach($countries as $country)


   <!-- Col -->
   <div class="col-md-4" data-value="Type1" data-value2="Country1">
                                    <div class="choose-block position-relative">
                                        <a href="{{route('single_country',$country->slug)}}" class="link-block"></a>
                                        <div class="img">
                                            <img src="{{url('/')}}/{{$country->image}}" alt="#" />
                                        </div>
                                        <div class="details">
                                            <div class="types">
                                                <!-- <span>
                                                    Founder-Led Edition
                                                </span>
                                                <span class="soldOut">SOLD OUT</span> -->
                                            </div>

                                            <div class="details-bottom">
                                                <!-- <div class="date-h">
                                                    <span>02 - 13 Mar 2025</span>
                                                    <span>14 - 25 Mar 2025</span>
                                                </div> -->
                                                <h3>
                                                    {{$country->name}}
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Col -->
@endforeach