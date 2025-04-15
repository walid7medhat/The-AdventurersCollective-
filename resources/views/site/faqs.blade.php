@extends('site.layouts.app')
@section('content')


<main class="main-content">
        <!-- Start Faq-page -->
        <section class="faq-page">
            <div class="container-fluid">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="faq-inner">
                            <div class="title-page">
                                <h2>
                                    frequently asked <br />
                                    questions
                                </h2>
                            </div>
                        
                            <div class="accordion accordion-flush" id="accordionFaq">
                                @foreach($faqs as $f=>$faq)
                                <!-- Item -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-{{$f}}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{$f}}" aria-expanded="false" aria-controls="collapse-{{$f}}">
                                            {{$faq->question}}
                                        </button>
                                    </h2>
                                    <div id="collapse-{{$f}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$f}}"
                                        data-bs-parent="#accordionFaq">
                                        <div class="accordion-body">
                                            <p>
                                            {{$faq->answer}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Item -->
                                 @endforeach
                             
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Faq-page -->
    </main>
@endsection