@extends('layouts.app')

@section('content')

<div class="background img-responsive">
  <div class="container">
      <div class="row">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif
            </div>
            <div class="searcher col-md-4">
              <script>
                (function() {
                  var cx = '002931220090294969341:1xzgprgoydo';
                  var gcse = document.createElement('script');
                  gcse.type = 'text/javascript';
                  gcse.async = true;
                  gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                  var s = document.getElementsByTagName('script')[0];
                  s.parentNode.insertBefore(gcse, s);
                })();
              </script>
              <gcse:search></gcse:search>
            </div>

            <h1 class="text-center header">Powder snowboards</h1>
            <p class="text-center header"><a class="btn btn-primary btn-lg" href="{{ '/taules' }}" role="button" accesskey="h">@lang('home.content.header.button')</a></p>
            <!-- <div class="links scroll-section btn btn-info">
              <a href="#products">SCROLL</a>
            </div> -->
      </div>
  </div>

</div>

<!-- CONTENT -->
<section id="products">
  <div class="container-fluid">
    <div class="row nosaltres">

      <div class="flex-center">
        <h1>@lang('home.content.about.title')</h1>
      </div>
      <div class="flex-center">
        <p>@lang('home.content.about.description')</p>
      </div>
      <div class="flex-center">
        <div class="row">
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail ">
              <img src="{{asset('css/img/fr_tumbnail.jpg') }}" alt="Taules snowboard freestyle">
              <div class="caption">
                <h3>Taules Freeride</h3>
                <p>Has dit forapista?</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail ">
              <img src="{{asset('css/img/freestyle.jpg') }}" alt="Taules snowboard freestyle">
              <div class="caption">
                <h3>Taules Freestyle</h3>
                <p>Vola pels mòduls del park amb el millor material</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail ">
              <img src="{{asset('css/img/allmountain.jpg') }}" alt="Taules snowboard freestyle">
              <div class="caption">
                <h3>Taules All mountain</h3>
                <p>Aparteu pixapins!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
<section>

<!-- FREESTYLE SECTION -->
<section>
  <div class="parallax">
    <div class="freestyle-section">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <!-- <div class="flex-center video">
                <div style="position: relative; z-index: -99; width: 100%; height: 100%">
                  <iframe frameborder="0" height="100%" width="100%"
                    src="https://youtube.com/embed/k9qWa0Yn6bo?autoplay=1&controls=1&showinfo=0&autohide=1">
                  </iframe>
                </div>
              </div> -->

              <div class="flex-center video">
                <h1 class="freestyle">@lang('home.content.freestyle.title')</h1>
              </div>
              <div class="flex-center">
                <p class="freestyle">@lang('home.content.freestyle.description')</p>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>



@endsection
