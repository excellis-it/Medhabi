const Cities = {
    "Andaman and Nicobar Islands": ["Port Blair", "Other"],
    "Andhra Pradesh": ["Adoni", "Amaravati", "Anantapur", "Chandragiri", "Chittoor", "Dowlaiswaram", "Eluru", "Guntur", "Kadapa", "Kakinada", "Kurnool", "Machilipatnam", "Nagarjunakoṇḍa", "Rajahmundry", "Srikakulam", "Tirupati", "Vijayawada", "Visakhapatnam", "Vizianagaram", "Yemmiganur", "Other"],
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

function Switch(el) {
    if (!el.target.closest('.item')) return; /* do nothing if another element is clicked */
    let origin = document.querySelector('div[data-pos="0"]'); /* Prepare to swicth the pictures */
    let target = el.target.parentElement;
    [target.dataset.pos, origin.dataset.pos] = [origin.dataset.pos, target.dataset.pos]; /* switch the positions */
}

window.addEventListener('click', Switch, false);

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav a');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            window.scrollTo({
                top: targetElement.offsetTop - document.querySelector('.nav').offsetHeight * 2.5,
                behavior: 'smooth'
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.counter');
    const speed = 2000; // The lower the number, the faster the counting

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;

            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else {
                counter.innerText = target;
            }
        };

        updateCount();
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const playButtons = document.querySelectorAll('.video-play-btn button');
    const popup = document.getElementById('exampleModal2');
    const videoPlayer = document.getElementById('video-player');

    playButtons.forEach(button => {
        button.addEventListener('click', function () {
            const videoSrc = this.dataset.video;
            videoPlayer.src = videoSrc;
            popup.style.display = 'block';
        });
    });

    popup.addEventListener('click', function () {
        popup.style.display = 'none';
        videoPlayer.pause();
        videoPlayer.currentTime = 0;
    });
});


var header = document.getElementById("stickyHeader");
var sticky = header.offsetTop;

function stickyHeader() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
window.onscroll = function () { stickyHeader() };

const menuBtn = document.querySelector('.menu-btn');
const menuLinks = document.querySelector('.menu-links');
const closeBtn = document.querySelector('.close-btn');

menuBtn.addEventListener('click', () => {
    menuLinks.classList.toggle('show-menu');
    menuLinks.classList.toggle('animate-menu');
    closeBtn.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    menuLinks.classList.remove('show-menu');
    closeBtn.style.display = 'none';
});

document.addEventListener('click', (event) => {
    const targetElement = event.target;
    if (!menuBtn.contains(targetElement) && !menuLinks.contains(targetElement)) {
        menuLinks.classList.remove('show-menu');
        closeBtn.style.display = 'none';
    }
});


