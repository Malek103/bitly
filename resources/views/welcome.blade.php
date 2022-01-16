<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Bootstrap Theme</title>
</head>

<body id="home" data-spy="scroll" data-target="#main-nav">
 @extends('layouts.nav')
 <section id="showcase" class="py-5">
    <div class="primary-overlay text-white">
    <div class="container ">
      <div class="row">
        <div class="col-lg-6 text-center">
          <h1 class="diplay-2 mt-5 pt-5">
            Short links, big results
          </h1>
          <p class="lead">A URL shortener built with powerful tools to help you grow and protect your brand.</p>
          <a href="#" class="btn btn-outline-secondary btn-lg text-white">
            <i class="fas fa-arrow-right"></i> Get Started for Free
          </a>

        </div>
        <div class="col-lg-6">
          {{-- <img src="{{ asset('img/image1.jpeg') }}" alt="" class="py-5 img-fluid d-none d-lg-block"> --}}
        </div>
      </div>
    </div>
  </div>
  </section>

  <section  class="bg-dark text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <input type="text" class="form-control form-control-lg mb-resp" placeholder="Shorten Your Link">
        </div>
        <div class="col-md-4">
          <button class="btn btn-primary btn-lg btn-block">
            <i class="fas fa-envelope-open-o"></i> Shorten
          </button>
        </div>
      </div>
    </div>
  </section>
  <section id="authors" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
                The link shortener that has your brand’s back
            </h1>
            <p class="lead">
            Your brand wasn’t built to be hidden. Help it stand out with branded links that drive more clicks.
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="{{asset('img/longvsshort.png')}}" alt="" class="img-fluid  w-80 mb-3">

              <h5 class="text-muted">Inspire trust</h5>
              <p>With more clicks comes increased brand recognition and consumer trust in your communications—which in turn inspires even more engagement with your links. (It’s a wonderful cycle.)</p>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('img/Boost results.png') }}" alt="" class="img-fluid w-80 mb-3">

              <h5 class="text-muted">Boost results</h5>
              <p>On top of better deliverability and click-through, rich link-level data gives you crucial insight into your link engagement so your team can make smarter decisions around its content and communications.</p>

            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('img/Gain control.png') }}" alt="" class="img-fluid w-80 mb-3">

              <h5 class="text-muted">Gain control</h5>
              <p>Take credit for your content and learn more about how it’s consumed by enabling auto-branding—a feature that ensures your brand remains in any link someone shortens pointing to your website.</p>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
             <h2 class="text-primary pb-3">
                What our customers are saying
             </h2>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-8 m-auto">





                <!-- SLIDER WITH CAPTIONS -->
                <div id="slider4" class="carousel slide mb-5" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="active" data-target="#slider4" data-slide-to="0"></li>
                    <li data-target="#slider4" data-slide-to="1"></li>
                    <li data-target="#slider4" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block img-fluid" src="{{ asset('img/customer1.PNG') }}" width="700" height="400" alt="First Slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="{{ asset('img/customer2.PNG') }}" width="700" height="400" alt="Second Slide">

                    </div>
                    <div class="carousel-item">
                      <img class="d-block img-fluid" src="{{ asset('img/customer3.PNG') }}" width="700" height="400" alt="Third Slide">

                    </div>
                  </div>

                  <!-- CONTROLS -->
                  <a href="#slider4" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>

                  <a href="#slider4" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="authors" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h3 class="text-primary pb-3">
                The most recognized brands in the world love Bitly
            </h3>

          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
                <img src="{{ asset('img/the new york times.png') }}" alt="" class="img-fluid w-80 mb-3">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('img/disnep.png') }}" alt="" class="img-fluid w-80 mb-3">
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <img src="{{ asset('img/the new york times.png') }}" alt="" class="img-fluid w-80 mb-3">
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <img src="{{ asset('img/disnep.png') }}" alt="" class="img-fluid w-80 mb-3">
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>



  <section id="about" class="py-5 text-center bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
             <h4 class="text-primary pb-3">
                The link shortener that has your brand’s back
             </h4>
             <p class="lead">Your brand wasn’t built to be hidden. Help it stand out with branded links that drive more clicks.</p>
          </div>
          <div id="accordion">
           <div class="card">
             <div class="card-header">
               <h5>
                 <a href="#collapse1" data-parent="#accordion" data-toggle="collapse">
                   What is a URL Shortener?
                 </a>
               </h5>
             </div>

             <div id="collapse1" class="collapse show">
               <div class="card-body">
                   A URL shortener, also known as a link shortener, seems like a simple tool, but it is a service that can have a dramatic impact on your marketing efforts.

                   Link shorteners work by transforming any long URL into a shorter, more readable link. When a user clicks the shortened version, they’re automatically forwarded to the destination URL.

                   Think of a short URL as a more descriptive and memorable nickname for your long webpage address. You can, for example, use a short URL like bit.ly/CelebrateBitly so people will have a good idea about where your link will lead before they click it.

                   If you’re contributing content to the online world, you need a URL shortener.

                   Make your URLs stand out with our easy to use free link shortener above.
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header">
               <h5>
                 <a href="#collapse2" data-parent="#accordion" data-toggle="collapse">
                   Benefits of a Short URL
                 </a>
               </h5>
             </div>

             <div id="collapse2" class="collapse">
               <div class="card-body">
                   How many people can even remember a long web address, especially if it has tons of characters and symbols? A short URL can make your link more memorable. Not only does it allow people to easily recall and share your link with others, it can also dramatically improve traffic to your content.

                   On a more practical side, a short URL is also easier to incorporate into your collateral – whether you’re looking to engage with your customers offline or online.

                   Bitly is the best URL shortener for everyone, from influencers to small brands to large enterprises, who are looking for a simple way to create, track and manage their links.
               </div>
             </div>
           </div>

           <div class="card">
             <div class="card-header">
               <h5>
                 <a href="#collapse3" data-parent="#accordion" data-toggle="collapse">
                   What is a Custom URL Shortener?
                 </a>
               </h5>
             </div>

             <div id="collapse3" class="collapse">
               <div class="card-body">
                   A custom URL shortener, sometimes referred to as a branded URL shortener, lets you brand your links.

                   For example, instead of bit.ly/xyz, you could use a custom short URL like yourbrnd.co/xyz.

                   There are several benefits of branding your short links. Branded links build trust between your audience and your business, drive more clicks, give your audience a preview of where they are being taken and increase brand awareness.

                   A link shortening service that includes custom short URLs is vital to improving audience engagement with your communications. A short URL is good, but a custom URL works every time.
               </div>
             </div>
           </div>
           <div class="card">
               <div class="card-header">
                 <h5>
                   <a href="#collapse4" data-parent="#accordion" data-toggle="collapse">
                   Features of Bitly’s Link Management Platform
                   </a>
                 </h5>
               </div>

               <div id="collapse4" class="collapse">
                 <div class="card-body">
                   If you’re looking to shorten just a link or two, our free URL shortener service will work for you.

                   But if you’re looking to share unique content in a way that feels personal to each user, you will need a link management platform. With our platform, you can brand your links with a custom domain, build QR codes, shorten links in bulk, redirect links, build campaigns and leverage many more features. If you need to create links at higher volumes, you can also take advantage of our powerful Bitly API.

                   Creators, small businesses, large enterprises: if you’re looking to grow and scale your brand or business – Bitly has a plan with the features you need.
                 </div>
               </div>
             </div>
             <div class="card">
               <div class="card-header">
                 <h5>
                   <a href="#collapse5" data-parent="#accordion" data-toggle="collapse">
                       Why Choose Bitly
                   </a>
                 </h5>
               </div>

               <div id="collapse5" class="collapse">
                 <div class="card-body">
                   Whether you’re sharing one link or millions, our platform was built to help you make every point of connection between your content and your audience ignite action.

                   That’s why the most recognized brands in the world love our platform.
                 </div>
               </div>
             </div>
         </div>
        </div>
      </div>
    </div>
  </section>
  <section id="boxes" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="card text-center border-primary mb-resp">
            <div class="card-body">
                <h5 class="card-title">FREE</h5>
              <h3 class="text-primary">0$/month</h3>
              <button class="btn btn-outline-primary px-3 btn-block">Get Started</button>
              <br>
              <p class="text-bold">Includes:</p>
              <p class="text-muted">Unlimited clicks</p>
              <p class="text-muted">Customizable back-halves</p>
              <p class="text-muted">Powerful link history and reporting</p>
              <p class="text-muted">Access to integrations</p>
              <p class="text-muted">2-Factor Authentication (2FA)</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center border-primary mb-resp">
              <div class="card-body">
                  <h5 class="card-title">BASIC</h5>
                <h3 class="text-primary">29$/month</h3>
                <button class="btn btn-outline-primary px-3 btn-block">Get Started</button>
                <br>
                <p class="text-bold">Includes:</p>
                <p class="text-muted">Create and share branded links</p>
                <p class="text-muted">Basic email support</p>
                <p class="text-muted">Redirect any link</p>
                <p class="text-muted">Bulk link shortening </p>
                <p class="text-muted">Bitly-branded QR Codes</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center border-primary mb-resp">
              <div class="card-body">
                  <h5 class="card-title">PREMIUM</h5>
                <h3 class="text-primary">199$/month</h3>
                <button class="btn btn-outline-primary px-3 btn-block">Get Started</button>
                <br>
                <p class="text-bold">Includes:</p>
                <p class="text-muted">Create and share branded links</p>
                <p class="text-muted">Campaigns</p>
                <p class="text-muted">UTM Builder</p>
                <p class="text-muted">Mobile deep links</p>
                <p class="text-muted">QR Codes</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-center border-primary mb-resp">
              <div class="card-body">
                  <h5 class="card-title">ENTERPRISE</h5>
                <h3 class="text-primary">Custom Pricing</h3>
                <button class="btn btn-outline-primary px-3 btn-block">Get Started</button>
                <br>
                <p class="text-bold">Includes:</p>
                <p class="text-muted">At scale link generation</p>
                <p class="text-muted">CAdvanced user and group </p>
                <p class="text-muted">99.9% SLA uptime</p>
                <p class="text-muted">Comprehensive data and analytics</p>
                <p class="text-muted">  manager support</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>

   <section id="authors" class="my-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="info-header mb-5">
            <h1 class="text-primary pb-3">
              Meet The Authors
            </h1>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias laborum numquam aperiam dolores a porro!
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Susan Williams</h3>
              <h5 class="text-muted">Lead Writer</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Grace Smith</h3>
              <h5 class="text-muted">Co-Writer</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>John Doe</h3>
              <h5 class="text-muted">Editor</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card">
            <div class="card-body">
              <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle w-50 mb-3">
              <h3>Kevin Swanson</h3>
              <h5 class="text-muted">Designer</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed commodi nostrum, ab libero voluptas officia.</p>
              <div class="d-flex justify-content-center">
                <div class="p-4">
                  <a href="http://facebook.com">
                    <i class="fab fa-facebook"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://twitter.com">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="p-4">
                  <a href="http://instagram.com">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="" class="py-5 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col"><p class="lead">
          Copyright &copy;
          <span id="year"></span>
        </p></div>
      </div>
    </div>
  </section>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>
