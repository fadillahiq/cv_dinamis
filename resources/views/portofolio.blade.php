@extends('layouts.master')

@section('content')
              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- filter -->
                    <div class="art-filter mb-30">
                      <!-- filter link -->
                      <a href="{{ route('portofolio') }}" data-filter="*" class="art-link art-current">All Projects</a>
                    </div>
                    <!-- filter end -->

                  </div>
                  <!-- col end -->

                  <div class="art-grid art-grid-3-col art-gallery">
                        @foreach ($projects as $project)
                            <!-- grid item -->
                        <div class="art-grid-item webTemplates">
                            <!-- grid item frame -->
                            <a data-fancybox="gallery" href="{{ Storage::url($project->image) }}" class="art-a art-portfolio-item-frame art-square">
                            <!-- img -->
                            <img src="{{ Storage::url($project->image) }}" alt="item">
                            <!-- zoom icon -->
                            <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                            </a>
                            <!-- grid item frame end -->
                            <!-- description -->
                            <div class="art-item-description">
                            <!-- title -->
                            <h5 class="mb-15">{{ $project->title }}</h5>
                            <div class="mb-15">{{ $project->desc }}</div>
                            <!-- button -->
                            <a href="{{ $project->link }}" class="art-link art-color-link art-w-chevron">Read more</a>
                            </div>
                            <!-- description end -->

                        </div>
                        <!-- grid item end -->
                        @endforeach

                  </div>

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->
@endsection
