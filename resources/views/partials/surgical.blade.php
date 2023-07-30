@php
    $now = now();
    $event = \App\Models\SugicalOutreach::where('end_date', '<=', $now)->latest()->get()->take(1);
@endphp
@foreach ($event as $sug);

<section class="contact-us pq-bg-primary-dark " style="background-image:url(/storage/surgical/{{$sug->image}}); background-attachment:fixed ">
    <div class="container">
          <div class="row ">
               <div class="col-xl-7">
                <img src="" alt="" srcset="">
                <h6 class="pq-title">A place of great medical care</h6>
          </div>
          <div class="col-xl-5 d-xl-flex justify-content-xl-end align-items-center text-left mt-xl-0 mt-4">
                <a class="pq-button pq-button-flat" href="{{route('contact')}}">
                      <div class="pq-button-block"> <span class="pq-button-text">Contact Us</span> <i class="ion ion-plus-round"></i> </div>
                </a>
          </div>
          </div>

    </div>
</section>
@endforeach

