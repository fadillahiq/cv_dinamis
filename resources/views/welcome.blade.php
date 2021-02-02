@extends('layouts.master')

@section('content')

                    <!-- container -->
                    <div class="container-fluid">

                      <!-- row -->
                      <div class="row p-60-0 p-lg-30-0 p-md-15-0">
                        <!-- col -->
                        <div class="col-lg-12">

                          <!-- banner -->
                          <div class="art-a art-banner" style="background-image: url(../portofolio/img/bg.jpg)">
                            <!-- banner back -->
                            <div class="art-banner-back"></div>
                            <!-- banner dec -->
                            <div class="art-banner-dec"></div>
                            <!-- banner overlay -->
                            <div class="art-banner-overlay">
                              <!-- main title -->
                              <div class="art-banner-title">
                                <!-- title -->
                                <h1 class="mb-15">Explore my  <br>Portofolio!</h1>
                                <!-- suptitle -->
                                <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build <span class="txt-rotate" data-period="2000"
                                    data-rotate='[ "web interface", "web development" ]'></span>&lt;/<i>code</i>&gt;</div>
                                <div class="art-buttons-frame">
                                  <!-- button -->
                                  <a href="{{ route('portofolio') }}" class="art-btn art-btn-md"><span>Explore now</span></a>
                                </div>
                              </div>
                              <!-- main title end -->
                              <!-- photo -->

                            </div>
                            <!-- banner overlay end -->
                          </div>
                          <!-- banner end -->

                        </div>
                        <!-- col end -->
                      </div>
                      <!-- row end -->

                    </div>
                    <!-- container end -->

                    <!-- container -->
                    <div class="container-fluid p-30-0">

                      <!-- row -->
                      <div class="row">

                        <!-- col -->
                        <div class="col-lg-12">

                          <!-- section title -->
                          <div class="art-section-title">
                            <!-- title frame -->
                            <div class="art-title-frame">
                              <!-- title -->
                              <h4>About Me</h4>
                            </div>
                            <!-- title frame end -->
                          </div>
                          <!-- section title end -->

                        </div>
                        <!-- col end -->

                        <!-- col -->
                        <div class="col-lg-12 col-md-6">

                          <!-- service -->
                          <div class="art-a art-service-icon-box">
                            <!-- service content -->
                            <div class="art-service-ib-content">
                              <!-- title -->
                            @foreach ($datas as $data)
                            <div class="mb-15">{{ $data->about }}</div>
                            @endforeach
                              <!-- text -->

                              <!-- button -->
                            </div>
                            <!-- service content end -->
                          </div>
                          <!-- service end -->

                        </div>
                        <!-- col end -->

                      </div>
                      <!-- row end -->

                    </div>
                    <!-- container end -->


        <!-- container -->
        <div class="container-fluid">

            <!-- row -->
            <div class="row p-30-0">

              <!-- col -->
              <div class="col-lg-6">

                <!-- section title -->
                <div class="art-section-title">
                  <!-- title frame -->
                  <div class="art-title-frame">
                    <!-- title -->
                    <h4>Education</h4>
                  </div>
                  <!-- title frame end -->
                </div>
                <!-- section title end -->

                <!-- timeline -->
                <div class="art-timeline art-gallery">

                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>

                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>SMK Wikrama Bogor</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">July 2018 - June 2021</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>SMP Taruna Andigha</h5>
                              <div class="art-el-suptitle mb-15">Student</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">July 2015 - June 2018</span>
                            </div>
                          </div>
                        </div>
                      </div>

                  <div class="art-timeline-item">
                    <div class="art-timeline-mark-light"></div>
                    <div class="art-timeline-mark"></div>
                    <div class="art-a art-timeline-content">
                      <div class="art-card-header">
                        <div class="art-left-side">
                          <h5>SDN Sindang Barang 2</h5>
                          <div class="art-el-suptitle mb-15">Student</div>
                        </div>
                        <div class="art-right-side">
                          <span class="art-date">July 2009 - June 2015</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- timeline end -->


              </div>
              <div class="col-lg-6">

                <!-- section title -->
                <div class="art-section-title">
                  <!-- title frame -->
                  <div class="art-title-frame">
                    <!-- title -->
                    <h4>Work Experience</h4>
                  </div>
                  <!-- title frame end -->
                </div>
                <!-- section title end -->

                <!-- timeline -->
                <div class="art-timeline">
                    @foreach ($experiences as $experience)
                    <div class="art-timeline-item">
                        <div class="art-timeline-mark-light"></div>
                        <div class="art-timeline-mark"></div>
                        <div class="art-a art-timeline-content">
                          <div class="art-card-header">
                            <div class="art-left-side">
                              <h5>{{ $experience->company }}</h5>
                              <div class="art-el-suptitle mb-15">{{ $experience->job_desc }}</div>
                            </div>
                            <div class="art-right-side">
                              <span class="art-date">{{ Carbon\Carbon::parse($experience->start_work)->toFormattedDateString() }} - {{ Carbon\Carbon::parse($experience->end_work)->toFormattedDateString() }}</span>
                            </div>
                          </div>
                          <a href="{{ $experience->certificate }}"
                          class="art-link art-color-link art-w-chevron" target="_blank">Certificate</a>
                        </div>
                      </div>
                    @endforeach
                </div>
                <!-- timeline end -->

              </div>
              <!-- col end -->

            </div>
            <!-- row end -->

          </div>
          <!-- container end -->


@endsection
