@extends('frontend.layouts.master')
@section('meta_title')
<meta name="description"
content="Get in touch with Medhavi Skills University for inquiries, admissions, or any assistance. Our team is here to help you with your educational journey.">
@endsection
@section('title') Contact Us - Medhavi Skills University
@endsection
@push('styles')
<script>(function (w, d, s, l, i) {
    w[l] = w[l] || []; w[l].push({
      'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    }); var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-5HHK5ZC');</script>
<!-- End Google Tag Manager -->

<meta name="p:domain_verify" content="c711886600acc8f58440b8a66c9756ce" />

<!-- Global site tag (gtag.js) - Google Ads: 10779528309 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10779528309"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments); }
  gtag('js', new Date());

  gtag('config', 'AW-10779528309');
</script>
@endpush

@section('content')
<section class="hero--Inner-page-banner" style="background-image: url({{asset('frontend_assets/images/banner/CONNECT-WITH-US.jpg')}}); background-size: cover;
background-position: center;">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-7">
<div class="page-title">
  <h1 class="title">Connect With Us</h1>
</div>
</div>
</div>
</div>
</section>


<!--=====================================-->
<!--=       MSU Campuses Area Start =-->
<!--=====================================-->

<section class="msu__contact__page position-relative">
<div class="container-fluid custom-width__2">
<div class="row">
<div class="col-lg-5 col-md-12 col-12">
<h2 class="title">MSU Campuses</h2>

<div class="top__contacts">
  <h3 class="yellow__text">East Sikkim Campus</h3>
  <p class="address_one">Topakhani, Lower Chisopani
    PO: Singtam Bazar, PS: Singtam
    District: East Sikkim,
    Sikkim – 737134</p>
</div>
<div class="bottom__contacts">
  <h3 class="yellow__text_two">West Sikkim Campus</h3>
  <p class="address_one">Bermoik, West Sikkim
    Ratamatey Thangsing, Barnyak-Barthang GPU,
    Bermoik, West Sikkim- 737113</p>
</div>

</div>
<div class="col-lg-7 col-md-12 col-12">
<div class="contact-form form-style-2">
  <form class="rnt-contact-form rwt-dynamic-form" method="POST" action="{{asset('frontend_assets/email-php/contact-form.php')}}">
    <div class="row">
      <div class="form-group col-lg-6">
        <input type="text" name="name" required id="contact-name" placeholder="Enter your Name">
      </div>
      <div class="form-group col-lg-6">
        <input type="email" name="email" required id="contact-email" placeholder="Enter your Email Address">
      </div>
      <div class="form-group col-lg-6">
        <input type="tel" name="phone" required id="contact-phone" placeholder="Enter Mobile Number">
      </div>
      <div class="form-group col-lg-6">
        <select class="edu-select" name="hear_about">
          <option selected disabled>Where did you hear About Us</option>
          <option value="TV">TV</option>
          <option value="Newspaper">Newspaper</option>
          <option value="Banner">Banner</option>
          <option value="Hoarding">Hoarding</option>
        </select>

      </div>
    </div>
    <div class="row">

      <h4 class="choose__courses">Choose your programe</h4>

      <div class="form-group col-lg-6">
        <select class="search_course" name="school_name">
          <option selected disabled>Search School</option>
          <option value="School of Health Science and Technology">School of Health Science and Technology
          </option>
          <option value="School of Beauty and Wellness">School of Beauty and Wellness</option>
          <option value="School of Indigenous Knowledge, Research, and Applications">School of Indigenous
            Knowledge, Research, and Applications</option>
          <option value="School of Modern Media and Entertainment">School of Modern Media and Entertainment
          </option>
          <option value="School of Design">School of Design</option>
          <option value="School of Applied Science and Technology">School of Applied Science and Technology
          </option>
          <option value="School of Computer Science Engineering">School of Computer Science Engineering
          </option>
          <option value="School of Hospitality and Tourism">School of Hospitality and Tourism</option>
          <option value="School of Management and Commerce">School of Management and Commerce</option>
        </select>

      </div>
      <div class="form-group col-lg-6">
        <select class="select_country" name="country_name">
          <option selected disabled>Select Country</option>
          <option value="India">India</option>
        </select>

      </div>
      <div class="form-group col-lg-6">
        <select class="select_city" name="state_name">
          <option selected disabled>Select State</option>
          <option value="-1" selected disabled>Your State</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">AssamAss</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu
          </option>
          <option value="Delhi">Delhi</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Ladakh">Ladakh</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Puducherry">Puducherry</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
        </select>

      </div>
      <div class="form-group col-lg-6">
        <input type="text" name="mx_City" style="border: none;border-bottom: 1px solid rgba(0,0,0,0.3);"
          placeholder="Type Your City">

      </div>
    </div>


    <div class="form-group col-12">
      <button class="submit-btn" name="submit" value="submit" type="submit">Apply Now</button>
    </div>
  </form>
</div>
</div>
</div>

<div class="row margin-top-100">
<div class="col-lg-4 col-md-6  col-12">
<div class="contact_wrp">
  <div class="contact__bx d-flex align-items-center">
    <div class="icon_width">
      <img src="{{asset('frontend_assets/images/icons/blue-contact-icopn.png')}}" alt="">
    </div>
    <a href="tel:+919874875876">+91 9874875876</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
<div class="contact_wrp">
  <div class="contact__bx d-flex align-items-center">
    <div class="icon_width">
      <img src="{{asset('frontend_assets/images/icons/blue-mail-icon.png')}}" alt="">
    </div>
    <a href="mailto:contact@msu.edu.in">contact@msu.edu.in</a>
  </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-12">
<div class="contact_wrp">
  <div class="contact__bx d-flex align-items-center">
    <div class="icon_width">
      <img src="{{asset('frontend_assets/images/icons/blue-website-icon.png')}}" alt="">
    </div>
    <a href="www.msu.edu.in">www.msu.edu.in</a>
  </div>
</div>
</div>
</div>
</div>
</section>

<!--=====================================-->
<!--=       MSU Campuses Area Start =-->
<!--=====================================-->

<section class="msu__map position-relative">
<div class="container-fluid p-0">
<div class="row">
<iframe
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.3748152772!2d88.5128689576506!3d27.23868174297257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6a1c3e1baaaab%3A0x6e38bf86f7e3420b!2sMedhavi%20Skills%20University%20-%20Top%20College%20in%20Sikkim!5e0!3m2!1sen!2sin!4v1705469601866!5m2!1sen!2sin"
width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy"
referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
</section>



<!--=====================================-->
<!--=          Info Table Sec    =-->
<!--=====================================-->
<section class="info-table-sec pt-0">
<div class="container-fluid custom-width__2">
<div class="info-table-sec-wrap">
<div class="row">
<div class="col-xl-12">
  <div class="info-table-tab-sec">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-zone1" data-bs-toggle="tab" data-bs-target="#zone1"
          type="button" role="tab" aria-controls="zone1" aria-selected="true">
          West
        </button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
          type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
          East
        </button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
          type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
          North
        </button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
          type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
          South
        </button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="zone1" role="tabpanel" aria-labelledby="zone1"
        tabindex="0">
        <div class="state-tab-div">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="state1-tab" data-bs-toggle="tab" data-bs-target="#state1"
                type="button" role="tab" aria-controls="state1" aria-selected="true">
                West Sikkim
              </button>
              <!-- <button class="nav-link" id="state1-tab" data-bs-toggle="tab" data-bs-target="#state1"
                type="button" role="tab" aria-controls="state1" aria-selected="true">
                East Sikkim
              </button> -->
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="state1" role="tabpanel" aria-labelledby="state1-tab"
              tabindex="0">
              <div class="state-table">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" style="width:8%">No</th>
                        <th scope="col" style="width:20%">Place</th>
                        <th scope="col" style="width:50%">Address</th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row">1</th>
                        <td>Bermiok, West Sikkim </td>
                        <td>Ratamatey Thangsing, Barnyak-Barthang GPU, Bermoik,
                          West Sikkim- 737113
                        </td>

                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
        tabindex="0">
        <div class="state-tab-div">
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="state1-tab" data-bs-toggle="tab" data-bs-target="#state1"
                type="button" role="tab" aria-controls="state1" aria-selected="true">
                East Sikkim
              </button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="state1" role="tabpanel" aria-labelledby="state1-tab"
              tabindex="0">
              <div class="state-table">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" style="width:8%">No</th>
                        <th scope="col" style="width:20%">Place</th>
                        <th scope="col" style="width:50%">Address</th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <th scope="row">1</th>
                        <td>Singtam, East Sikkim </td>
                        <td>Topakhani, Lower Chisopani
                          PO: Singtam Bazar, PS: Singtam
                          District: East Sikkim, Sikkim – 737134
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section>
@endsection

@push('scripts')
@endpush
