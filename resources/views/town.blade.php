@extends('layouts.app')

@section('title', 'Town')

@section('content')
<section class="top">
    <div class="container-fluid">
        <div class="row time-details-row">
            <div class="col">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <p class="city">Time in <a href="#">Cairo, Egypt</a> Now</p>
                    <p class="time-notic">Your clock is 0.8 seconds ahead.</p>
                </div>
                <div id="real-timer" class="d-flex justify-content-center">Test</div>
                <div class="d-flex justify-content-center align-items-center flex-column date-details">
                    <p>Sunday, February 23, 2020, week 8</p>
                    <p>Sun: ↑ 06:28 ↓ 17:49 (11h 21m)</p>
                    <a href="#" class="more-info">
                        More info
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row most_popular_cities">
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">Los Angeles</div>
                        <div class="d-none timezone">America/Los_Angeles</div>
                    </div>
                </div>
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">New York</div>
                        <div class="d-none timezone">America/New_York</div>
                    </div>
                </div>
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">London</div>
                        <div class="d-none timezone">Europe/London</div>
                    </div>
                </div>
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">Paris</div>
                        <div class="d-none timezone">Europe/Paris</div>
                    </div>
                </div>
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">Moscow</div>
                        <div class="d-none timezone">Europe/Moscow</div>
                    </div>
                </div>
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">Beijing</div>
                        <div class="d-none timezone">Asia/Shanghai</div>
                    </div>
                </div>
                <div class="col box">
                    <div class="d-flex justify-content-center align-items-center flex-column box-content">
                        <div class="time"></div>
                        <div class="city">Tokyo</div>
                        <div class="d-none timezone">Asia/Tokyo</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container social-buttons">
            <div class="row justify-content-center align-items-center">
                <div class="col">
                    <a href="#" class="facebook">
                        <img src="{{ asset('images/icons/fb.png') }}" alt="facebook logo">
                        Share on Facebook
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="twitter">
                        <img src="{{ asset('images/icons/twitter.png') }}" alt="twitter logo">
                        Share on Twitter
                    </a>
                </div>
                <div class="col">
                    <a href="#" class="whatsapp">
                        <img src="{{ asset('images/icons/whatsapp.png') }}" alt="whatsapp logo">
                        Share on Whatsapp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bottom">
    <div class="container-fluid py-5">
        <div class="row mx-5 flex-column">
            <div class="timezone mb-5">
                <div class="title">Timezone</div>
                <ul class="ul">
                    <li>Currently Eastern Standard Time (EST), UTC -5</li>
                    <li>Daylight saving time (Eastern Daylight Time (EDT), UTC -4) starts March 8, 202</li>
                    <li>New York is 7 hours behind Cairo.</li>
                    <li>The IANA time zone identifier for New York is America/New_York.</li>
                </ul>
                <div class="w-100 d-flex timezone-btns">
                    <a href="#">
                        <div class="btn-container">
                            Read about New York in Wikipedia
                        </div>
                    </a>
                    <a href="#">
                        <div class="btn-container mx-4">
                            Make New York time default
                        </div>
                    </a>
                    <a href="#">
                        <div class="btn-container">
                            Add to favorite locations
                        </div>
                    </a>
                </div>
            </div>
            <div class="time-details mb-5">
                <div class="title">Sunrise, sunset, day length and solar time for New York</div>
                <ul class="ul">
                    <li>Sunrise: 06:32</li>
                    <li>Sunset: 17:45</li>
                    <li>Day length: 11h 14m</li>
                    <li>Solar noon: 12:09</li>
                    <li>The current local time in New York is 9 minutes ahead of apparent solar time.</li>
                </ul>
            </div>
            <div class="time-difference mb-5">
                <div class="title">Time difference from New York</div>
                <div class="chart">
                    <div class="row">
                        <div class="separator"></div>
                        <div class="col-12">
                            <div class="city-row d-flex" id="city-1">
                                <div class="city-name">Los Angeles</div>
                                <div class="before">-3 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-2">
                                <div class="city-name">London</div>

                                <div class="after" style="width: 10%">+5 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-3">
                                <div class="city-name">
                                    UCT
                                </div>
                                <div class="after" style="width: 10%">+5 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-4">
                                <div class="city-name">
                                    Paris
                                </div>
                                <div class="after" style="width: 12%">+6 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-5">
                                <div class="city-name">
                                    Istanbul
                                </div>

                                <div class="after" style="width: 15%">+8 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-6">
                                <div class="city-name">
                                    Sydney
                                </div>

                                <div class="after" style="width: 15%">+8 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-7">
                                <div class="city-name">
                                    Dubai
                                </div>

                                <div class="after" style="width: 25%">+9 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-8">
                                <div class="city-name">
                                    India
                                </div>

                                <div class="after" style="width: 27%">+10.5 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-9">
                                <div class="city-name">
                                    Beijing
                                </div>

                                <div class="after" style="width: 40%">+13 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-10">
                                <div class="city-name">
                                    Singapore
                                </div>

                                <div class="after" style="width: 50%">+13 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-11">
                                <div class="city-name">
                                    Tokyo
                                </div>

                                <div class="after" style="width: 60%">+14 h</div>
                            </div>
                            <div class="city-row d-flex" id="city-12">
                                <div class="city-name">
                                    Moscow
                                </div>

                                <div class="after" style="width: 70%">+16 h</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-5 chart-btns">
                    <a href="#">
                        <div class="btn-container">
                            Compare other time zones
                        </div>
                    </a>
                </div>
            </div>

            <div class="temp mb-5">
                <div class="title">Annual average temperatures for New York 1895-2018</div>
                <div class="desc">
                    Each of the stripes represents one year.<br/>
                    Graphics by Ed Hawkins, using data from NOAA.<br/>
                    See https://showyourstripes.info/
                </div>
            </div>

            <div class="restaurants mb-5">
                <div class="title">Best restaurants in New York City</div>
                <p>1# Daniel - French and american food</p>
                <p>2# Le Bernardin - Seafood and french food</p>
                <p>3# Marea - Seafood and italian food</p>
            </div>

            <div class="best-places mb-5">
                <div class="title">Find best places to eat in New York City</div>
                <ul>
                    <li>Best pizza restaurants in New York City</li>
                    <li>Best restaurants with desserts in New York City</li>
                    <li>Best dinner restaurants in New York City</li>
                </ul>
                <div class="d-flex mt-5 chart-btns">
                    <a href="#">
                        <div class="btn-container">
                            Restaurants in New York City
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="top-fifty">
            <div class="row mx-5 flex-column align-items-center">
                <h2 class="top-fifty-paragraph">The 50 largest cities in</h2>
                <h1 class="country-name title">United States</h1>
            </div>
            <div class="row mx-5">
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Albuquerque</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Atlanta</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Austin</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Baltimore</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Boston</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Charlotte</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Chicago</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Cleveland</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Colorado</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Springs</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Columbus</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Dallas</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Denver</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Detroit</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">El Paso</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Fort</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Worth Fresno</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Honolulu</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Houston</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Indianapolis</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Jacksonville</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Kansas City</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Las Vegas</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Long Beach</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Los Angeles </a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Memphis</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Mesa</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Miami</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Milwaukee</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Minneapolis</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Nashville</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">New York</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Oakland</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Oklahoma City</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Omaha</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Philadelphia</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Phoenix</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Portland</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Raleigh</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Sacramento</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">San Antonio</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">San Diego</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">San Francisco </a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">San Jose</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Seattle</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Staten Island</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Tucson</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Tulsa</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Virginia</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Beach</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Washington, D.C.</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Wichita</a>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
