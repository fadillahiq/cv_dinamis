@extends('layouts.master')

@section('content')
     <!-- container -->
     <div class="container-fluid">

        <!-- row -->
        <div class="row p-30-0">

<!-- col -->
<div class="col-lg-12">

    <!-- section title -->
    <div class="art-section-title">
      <!-- title frame -->
      <div class="art-title-frame">
        <!-- title -->
        <h4>Contact information</h4>
      </div>
      <!-- title frame end -->
    </div>
    <!-- section title end -->

  </div>
  @foreach ($datas as $data)
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-4">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>
          <li>
            <h6>Country:</h6><span>{{ $data->country }}</span>
          </li>
          <li>
            <h6>City:</h6><span>{{ $data->city }}</span>
          </li>

          <li>
            <h6>Street:</h6><span>{{ $data->street }}</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->
  </div>
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-4">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>
          <li>
            <h6>Email:</h6><span>{{ $data->email }}</span>
          </li>
          <li>
            <h6>Telegram:</h6><span>{{ $data->telegram }}</span>
          </li>
          <li>
            <h6>WhatsApp:</h6><span>{{ $data->whatsapp }}</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->
  </div>
  <!-- col end -->
  <!-- col -->
  <div class="col-lg-4">
    <!-- contact card -->
    <div class="art-a art-card">
      <div class="art-table p-15-15">
        <ul>
          <li>
            <h6>Personal:</h6><span>{{ $data->whatsapp }}</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- contact card end -->

  </div>
  <!-- col end -->
            @endforeach
          <!-- col -->
          <div class="col-lg-12">

            <!-- section title -->
            <div class="art-section-title">
              <!-- title frame -->
              <div class="art-title-frame">
                <!-- title -->
                <h4>Get in touch</h4>
              </div>
              <!-- title frame end -->
            </div>
            <!-- section title end -->

            <!-- contact form frame -->

            <div class="art-a art-card">
                <form id="" class="art-contact-form" action="{{ route('contactPost') }}" method="POST">
                    @csrf
              <!-- contact form -->

                <!-- form field -->
                <div class="art-form-field">
                  <!-- name input -->
                  <input id="name" name="name" required class="art-input" type="text" placeholder="Name" required>
                  <!-- label -->
                  <label for="name"><i class="fas fa-user"></i></label>
                </div>
                <!-- form field end -->
                <!-- form field -->
                <div class="art-form-field">
                  <!-- email input -->
                  <input id="email" name="email" required class="art-input" type="email" placeholder="Email" required>
                  <!-- label -->
                  <label for="email"><i class="fas fa-at"></i></label>
                </div>
                <!-- form field end -->
                <!-- form field -->
                <div class="art-form-field">
                  <!-- message textarea -->
                  <textarea id="message" name="message" required class="art-input" placeholder="Message" required></textarea>
                  <!-- label -->
                  <label for="message"><i class="far fa-envelope"></i></label>
                </div>
                <!-- form field end -->
                <!-- button -->
                <div class="art-submit-frame">
                  <button type="submit" class="art-btn art-btn-md art-submit"><span>Send message</span></button>
                  <!-- success -->
                  <div class="art-success">Success <i class="fas fa-check"></i></div>
                </div>

              <!-- contact form end -->
            </form>
            </div>
            <!-- contact form frame end -->

          </div>
          <!-- col end -->

        </div>
        <!-- row end -->

      </div>
      <!-- container end -->
@endsection
