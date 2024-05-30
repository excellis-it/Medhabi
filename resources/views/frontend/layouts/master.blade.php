<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    @yield('meta_title')
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend_assets/images/icons/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/RemixIcon_Fonts_v4.0.0/fonts/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/medhavi-floating-menu-icons/font/flaticon_mycollection.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/sal.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend_assets/css/vendor/swiper.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"> <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend_assets/css/main.css')}}">
    <style>
        .rbt-card-subtext {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .view_all_button {
            padding: 10px 40px;
            border-radius: 5px;
            background-color: #0B7EAE;
            color: white;
            width: max-content;
        }

        .view_all_button_bg a {
            width: max-content;
        }

        .view_all_button_bg {
            display: flex;
            align-items: center;
            justify-content: center;
        }


    </style>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    @stack('styles')

</head>

<body class="sticky-header">
    <div id="main-wrapper" class="main-wrapper">
        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->


        @include('frontend.includes.header')

        <!--=====================================-->
        <!--=       Hero Inner Page Banner Area Start =-->
        <!--=====================================-->
        @yield('content')


        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        @include('frontend.includes.footer')
        <!-- End Footer Area  -->


    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
 ============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('frontend_assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- Jquery Js -->
    <script src="{{asset('frontend_assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/sal.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/magnifypopup.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/backtotop.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/odometer.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/isotop.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/imageloaded.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/jquery-ui.min.')}}js"></script>
    <script src="{{asset('frontend_assets/js/vendor/swiper.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/vendor/smooth-scroll.min')}}.js"></script>
    <script src="{{asset('frontend_assets/js/vendor/isInViewport.jquery.min.js')}}"></script>

    <!-- Site Scripts -->
    <script src="{{asset('frontend_assets/js/hamburger.js')}}"></script>
    <script src="{{asset('frontend_assets/js/app.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    <script>
        $(document).ready(function() {
            $('.submit-newsletter').click(function() {
                var email = $('#newsletter_email').val();
                if (email === '') {
                    toastr.error('Please enter an email address');
                    return false;
                }
                $.ajax({
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        email: email,
                    },
                    success: function(response) {
                        if (response.status === true) {
                            $('#newsletter_email').val('');
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message,
                                showConfirmButton: true,
                                timer: 3000
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: response.message,
                                showConfirmButton: true,
                                timer: 3000
                            });
                        }
                    }
                });
            });
        });
    </script>
  <script>
    const Cities = {
      "Andaman and Nicobar Islands": ["Port Blair", "Other"],
      "Andhra Pradesh": ["Adoni", "Amaravati", "Anantapur", "Chandragiri", "Chittoor", "Dowlaiswaram", "Eluru", "Guntur", "Kadapa", "Kakinada", "Kurnool", "Machilipatnam", "Nagarjunakoá¹‡á¸a", "Rajahmundry", "Srikakulam", "Tirupati", "Vijayawada", "Visakhapatnam", "Vizianagaram", "Yemmiganur", "Other"],
      "Arunachal Pradesh": ["Itanagar", "Other"],
      "Assam": ["Dhuburi", "Dibrugarh", "Dispur", "Guwahati", "Jorhat", "Nagaon", "Sivasagar", "Silchar", "Tezpur", "Tinsukia", "Other"],
      "Bihar": ["Ara", "Barauni", "Begusarai", "Bettiah", "Bhagalpur", "Bihar Sharif", "Bodh Gaya", "Buxar", "Chapra", "Darbhanga", "Dehri", "Dinapur Nizamat", "Gaya", "Hajipur", "Jamalpur", "Katihar", "Madhubani", "Motihari", "Munger", "Muzaffarpur", "Patna", "Purnia", "Pusa", "Saharsa", "Samastipur", "Sasaram", "Sitamarhi", "Siwan", "Other"],
      "Chandigarh": ["Chandigarh", "Other"],
      "Chhattisgarh": ["Ambikapur", "Bhilai", "Bilaspur", "Dhamtari", "Durg", "Jagdalpur", "Raipur", "Rajnandgaon", "Other"],
      "Dadra and Nagar Haveli and Daman and Diu": ["Daman", "Diu", "Silvassa", "Other"],
      "Delhi": ["Delhi", "New Delhi", "Other"],
      "Goa": ["Madgaon", "Panaji", "Other"],
      "Gujarat": ["Ahmadabad", "Amreli", "Bharuch", "Bhavnagar", "Bhuj", "Dwarka", "Gandhinagar", "Godhra", "Jamnagar", "Junagadh", "Kandla", "Khambhat", "Kheda", "Mahesana", "Morbi", "Nadiad", "Navsari", "Okha", "Palanpur", "Patan", "Porbandar", "Rajkot", "Surat", "Surendranagar", "Valsad", "Veraval", "Other"],
      "Haryana": ["Ambala", "Bhiwani", "Chandigarh", "Faridabad", "Firozpur Jhirka", "Gurugram", "Hansi", "Hisar", "Jind", "Kaithal", "Karnal", "Kurukshetra", "Panipat", "Pehowa", "Rewari", "Rohtak", "Sirsa", "Sonipat", "Other"],
      "Himachal Pradesh": ["Bilaspur", "Chamba", "Dalhousie", "Dharmshala", "Hamirpur", "Kangra", "Kullu", "Mandi", "Nahan", "Shimla", "Una", "Other"],
      "Jammu and Kashmir": ["Anantnag", "Baramula", "Doda", "Gulmarg", "Jammu", "Kathua", "Punch", "Rajouri", "Srinagar", "Udhampur", "Other"],
      "Jharkhand": ["Bokaro", "Chaibasa", "Deoghar", "Dhanbad", "Dumka", "Giridih", "Hazaribag", "Jamshedpur", "Jharia", "Rajmahal", "Ranchi", "Saraikela", "Other"],
      "Karnataka": ["Badami", "Ballari", "Bengaluru", "Belagavi", "Bhadravati", "Bidar", "Chikkamagaluru", "Chitradurga", "Davangere", "Halebid", "Hassan", "Hubballi-Dharwad", "Kalaburagi", "Kolar", "Madikeri", "Mandya", "Mangaluru", "Mysuru", "Raichur", "Shivamogga", "Shravanabelagola", "Shrirangapattana", "Tumakuru", "Vijayapura", "Other"],
      "Kerala": ["Alappuzha", "Vatakara", "Idukki", "Kannur", "Kochi", "Kollam", "Kottayam", "Kozhikode", "Mattancheri", "Palakkad", "Thalassery", "Thiruvananthapuram", "Thrissur", "Other"],
      "Ladakh": ["Kargil", "Leh", "Other"],
      "Lakshadweep": ["Lakshadweep", "Other"],
      "Madhya Pradesh": ["Balaghat", "Barwani", "Betul", "Bharhut", "Bhind", "Bhojpur", "Bhopal", "Burhanpur", "Chhatarpur", "Chhindwara", "Damoh", "Datia", "Dewas", "Dhar", "Dr. Ambedkar Nagar (Mhow)", "Guna", "Gwalior", "Hoshangabad", "Indore", "Itarsi", "Jabalpur", "Jhabua", "Khajuraho", "Khandwa", "Khargone", "Maheshwar", "Mandla", "Mandsaur", "Morena", "Murwara", "Narsimhapur", "Narsinghgarh", "Narwar", "Neemuch", "Nowgong", "Orchha", "Panna", "Raisen", "Rajgarh", "Ratlam", "Rewa", "Sagar", "Sarangpur", "Satna", "Sehore", "Seoni", "Shahdol", "Shajapur", "Sheopur", "Shivpuri", "Ujjain", "Vidisha", "Other"],
      "Maharashtra": [, "Ahmadnagar", "Akola", "Amravati", "Aurangabad", "Bhandara", "Bhusawal", "Bid", "Buldhana", "Chandrapur", "Daulatabad", "Dhule", "Jalgaon", "Kalyan", "Karli", "Kolhapur", "Mahabaleshwar", "Malegaon", "Matheran", "Mumbai", "Nagpur", "Nanded", "Nashik", "Osmanabad", "Pandharpur", "Parbhani", "Pune", "Ratnagiri", "Sangli", "Satara", "Sevagram", "Solapur", "Thane", "Ulhasnagar", "Vasai-Virar", "Wardha", "Yavatmal", "Other"],
      "Manipur": ["Imphal", "Other"],
      "Meghalaya": ["Cherrapunji", "Shillong", "Other"],
      "Mizoram": ["Aizawl", "Lunglei", "Other"],
      "Nagaland": ["Kohima", "Mon", "Phek", "Wokha", "Zunheboto", "Other"],
      "Odisha": ["Balangir", "Baleshwar", "Baripada", "Bhubaneshwar", "Brahmapur", "Cuttack", "Dhenkanal", "Kendujhar", "Konark", "Koraput", "Paradip", "Phulabani", "Puri", "Sambalpur", "Udayagiri", "Other"],
      "Puducherry": ["Karaikal", "Mahe", "Puducherry", "Yanam", "Other"],
      "Punjab": ["Amritsar", "Batala", "Chandigarh", "Faridkot", "Firozpur", "Gurdaspur", "Hoshiarpur", "Jalandhar", "Kapurthala", "Ludhiana", "Nabha", "Patiala", "Rupnagar", "Sangrur", "Other"],
      "Rajasthan": ["Abu", "Ajmer", "Alwar", "Amer", "Barmer", "Beawar", "Bharatpur", "Bhilwara", "Bikaner", "Bundi", "Chittaurgarh", "Churu", "Dhaulpur", "Dungarpur", "Ganganagar", "Hanumangarh", "Jaipur", "Jaisalmer", "Jalor", "Jhalawar", "Jhunjhunu", "Jodhpur", "Kishangarh", "Kota", "Merta", "Nagaur", "Nathdwara", "Pali", "Phalodi", "Pushkar", "Sawai Madhopur", "Shahpura", "Sikar", "Sirohi", "Tonk", "Udaipur", "Other"],
      "Sikkim": ["Mangan", "Gangtok", "Geyzing", "Namchi", "Rangpo", "Jorethang", "Singtam", "Upper Tadong", "Nayabazar", "Rhenock", "Pakyong", "Lachung", "Pelling", "Soreng", "Thangu Valley", "Zuluk", "Chalamthang", "Damthang", "Kaluk", "Yuksom", "Lachen", "Chungthang", "Tumlong", "Tinkitam", "Gor", "Namthang", "Tarku", "Rongli", "Sumbuk", "Ravangla", "Phodong", "Okhrey", "Majitar", "Rabdentse", "Rinchenpong", "Singhik", "Dikchu", "Yangang", "Sarathang", "Rorathang", "Pedong", "Sevoke", "Other"],
      "Tamil Nadu": ["Arcot", "Chengalpattu", "Chennai", "Chidambaram", "Coimbatore", "Cuddalore", "Dharmapuri", "Dindigul", "Erode", "Kanchipuram", "Kanniyakumari", "Kodaikanal", "Kumbakonam", "Madurai", "Mamallapuram", "Nagappattinam", "Nagercoil", "Palayamkottai", "Pudukkottai", "Rajapalayam", "Ramanathapuram", "Salem", "Thanjavur", "Tiruchchirappalli", "Tirunelveli", "Tiruppur", "Thoothukudi", "Udhagamandalam", "Vellore", "Other"],
      "Telangana": ["Hyderabad", "Karimnagar", "Khammam", "Mahbubnagar", "Nizamabad", "Sangareddi", "Warangal", "Other"],
      "Tripura": ["Agartala", "Other"],
      "Uttar Pradesh": ["Agra", "Aligarh", "Amroha", "Ayodhya", "Azamgarh", "Bahraich", "Ballia", "Banda", "Bara Banki", "Bareilly", "Basti", "Bijnor", "Bithur", "Budaun", "Bulandshahr", "Deoria", "Etah", "Etawah", "Faizabad", "Farrukhabad-cum-Fatehgarh", "Fatehpur", "Fatehpur Sikri", "Ghaziabad", "Ghazipur", "Gonda", "Gorakhpur", "Hamirpur", "Hardoi", "Hathras", "Jalaun", "Jaunpur", "Jhansi", "Kannauj", "Kanpur", "Lakhimpur", "Lalitpur", "Lucknow", "Mainpuri", "Mathura", "Meerut", "Mirzapur-Vindhyachal", "Moradabad", "Muzaffarnagar", "Partapgarh", "Pilibhit", "Prayagraj", "Rae Bareli", "Rampur", "Saharanpur", "Sambhal", "Shahjahanpur", "Sitapur", "Sultanpur", "Tehri", "Varanasi", "Other"],
      "Uttarakhand": ["Almora", "Dehra Dun", "Haridwar", "Mussoorie", "Nainital", "Pithoragarh", "Other"],
      "West Bengal": ["Alipore", "Alipur Duar", "Asansol", "Baharampur", "Bally", "Balurghat", "Bankura", "Baranagar", "Barasat", "Barrackpore", "Basirhat", "Bhatpara", "Bishnupur", "Budge Budge", "Burdwan", "Chandernagore", "Darjeeling", "Diamond Harbour", "Dum Dum", "Durgapur", "Halisahar", "Haora", "Hugli", "Ingraj Bazar", "Jalpaiguri", "Kalimpong", "Kamarhati", "Kanchrapara", "Kharagpur", "Cooch Behar", "Kolkata", "Krishnanagar", "Malda", "Midnapore", "Murshidabad", "Nabadwip", "Palashi", "Panihati", "Purulia", "Raiganj", "Santipur", "Shantiniketan", "Shrirampur", "Siliguri", "Siuri", "Tamluk", "Titagarh", "Other"]
    }
    function stateChanged(current) {
      let state = current.value;
      let citySelect = current.closest('.form-row').nextElementSibling.querySelector('select[name="city"]');
      let options = '<option value="-1" selected disabled>Your City</option>';
      for (let city of Cities[state]) {
        options += `<option value="${city}">${city}</option>`;
      }
      citySelect.innerHTML = options;
    }

    function cityChanged(current) {
      let city = current.value;
      let otherCityInput = current.closest('.form-row').nextElementSibling.querySelector('input[name="Other_City"]');
      let parent = current.closest('.form-row');
      if (city === 'Other') {
        otherCityInput.classList.add('active');
        parent.classList.add('active');
      } else {
        otherCityInput.classList.remove('active');
        parent.classList.remove('active');
      }
    }


  </script>

<script>
    // Get all menu from document
    document.querySelectorAll('.fabTrigger').forEach(OpenMenu);

    // Menu Open and Close function
    function OpenMenu(active) {
      if (active.classList.contains('fabTrigger') === true) {
        active.addEventListener('click', function (e) {
          e.preventDefault();

          if (this.parentElement.classList.contains('active') === true) {
            // Close the clicked dropdown
            this.parentElement.classList.remove('active');

          } else {
            // Close the opend dropdown
            closeMenu();
            // add the open and active class(Opening the DropDown)
            this.parentElement.classList.add('active');
          }
        });
      }
    };

    // Close the openend Menu
    function closeMenu() {
      // remove the open and active class from other opened Moenu (Closing the opend Menu)
      document.querySelectorAll('.fab').forEach(function (container) {
        container.classList.remove('active')
      });
    }
  </script>



    @stack('scripts')
</body>

</html>
