@extends('front.assets.master')
@section('title','Educosol Services')

@section('content')

    <main id="main" data-aos="fade-in">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="container">
                <h2>Servislerimiz</h2>
{{--                <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>--}}
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Courses Section ======= -->
        <section id="courses" class="courses">
            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="course-item">
                            <img src="{{asset('')}}{{$service->image}}" class="img-fluid" alt="...">
                            <div class="course-content">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4>{{$service->keyword}}</h4>
                                    <!-- <p class="price">$169</p> -->
                                </div>

                                <h3><a href="">{{$service->name}}</a></h3>
                                <p>{{$service->about}}</p>
                                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                                  <div class="trainer-profile d-flex align-items-center">
                                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt=""> -->
                                <!-- <span>Antonio</span> -->
                            </div>
                            <!-- <div class="trainer-rank d-flex align-items-center">
                              <i class="bx bx-user"></i>&nbsp;50
                              &nbsp;&nbsp;
                              <i class="bx bx-heart"></i>&nbsp;65
                            </div> -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div> <!-- End Course Item-->





            </div>

            </div>
        </section><!-- End Courses Section -->

    </main><!-- End #main -->
@endsection
