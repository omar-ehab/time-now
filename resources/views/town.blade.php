@extends('layouts.app')

@section('title', 'Town')

@section('content')
    <section class="top">
        <div class="container-fluid">
            <div class="row time-details-row">
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <p class="city">Time in <a
                                href="{{ route('country.show', ['country' => $country->id, 'city_name' => $city_name]) }}">{{ $displayName }}</a>
                            Now</p>
                    </div>
                    <div id="time-offset" class="d-none">{{ $getOffset }}</div>
                    <div id="real-timer-hidden" class="d-none">{{ $now->format('H:s:i') }}</div>
                    <div id="real-timer" class="d-flex justify-content-center"></div>
                    <div class="d-flex justify-content-center align-items-center flex-column date-details">
                        <p>Sunday, February 23, 2020, week 8</p>
                        <p>Sun: ↑ {{ $sunRise->format("H:i") }} ↓ {{ $sunSet->format("H:i") }}
                            ({{ $formatedHoursToSunset }})</p>
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
                        <li>Currently Eastern Standard Time (EST), UTC {{ abs($getOffset) }}</li>
                        <li>Daylight saving time (Eastern Daylight Time (EDT), UTC -4) starts March 8, 2020</li>
                        <li>{{ str_replace('_', ' ', substr($timezone->name, strrpos($timezone->name, '/') + 1)) }} is
                            {{ abs($getOffset) }}
                            hours {{ $getOffset > 0 ? 'after' : 'behind' }} Cairo.
                        </li>
                        <li>The IANA time zone identifier
                            for {{ str_replace('_', ' ', substr($timezone->name, strrpos($timezone->name, '/') + 1)) }}
                            is {{ $timezone->name }}</li>
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
                        <li>Sunrise: {{ $sunRise->format("H:i") }}</li>
                        <li>Sunset: {{ $sunSet->format("H:i") }}</li>
                        <li>Day length: {{ $formatedDayLength }}</li>
                        <li>Solar noon: {{ $solarNoon->format('H:i') }}</li>
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
                                    <div
                                        class="{{ $timeDiffrence['los_angeles'] < 0 ? 'before' : 'after' }}"
                                        style="width: {{ $timeDiffrence['los_angeles'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['los_angeles'] / 2 * 10 }}%">
                                        {{ $timeDiffrence['los_angeles'] >= 0 ? '+' : '' }}{{ $timeDiffrence['los_angeles'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-2">
                                    <div class="city-name">London</div>

                                    <div class="{{ $timeDiffrence['london'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['london'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['london'] / 2 * 10 }}%">{{ $timeDiffrence['london'] >= 0 ? '+' : '' }}{{ $timeDiffrence['london'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-3">
                                    <div class="city-name">
                                        UCT
                                    </div>
                                    <div class="{{ $timeDiffrence['uct'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['uct'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['uct'] / 2 * 10 }}%">{{ $timeDiffrence['uct'] >= 0 ? '+' : '' }}{{ $timeDiffrence['uct'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-4">
                                    <div class="city-name">
                                        Paris
                                    </div>
                                    <div class="{{ $timeDiffrence['paris'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['paris'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['paris'] / 2 * 10 }}%">{{ $timeDiffrence['paris'] >= 0 ? '+' : '' }}{{ $timeDiffrence['paris'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-5">
                                    <div class="city-name">
                                        Istanbul
                                    </div>

                                    <div class="{{ $timeDiffrence['istanbul'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['istanbul'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['istanbul'] / 2 * 10 }}%">{{ $timeDiffrence['istanbul'] >= 0 ? '+' : '' }}{{ $timeDiffrence['istanbul'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-6">
                                    <div class="city-name">
                                        Sydney
                                    </div>

                                    <div class="{{ $timeDiffrence['sydney'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['sydney'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['sydney'] / 2 * 10 }}%">{{ $timeDiffrence['sydney'] >= 0 ? '+' : '' }}{{ $timeDiffrence['sydney'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-7">
                                    <div class="city-name">
                                        Dubai
                                    </div>

                                    <div class="{{ $timeDiffrence['dubai'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['dubai'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['dubai'] / 2 * 10 }}%">{{ $timeDiffrence['dubai'] >= 0 ? '+' : '' }}{{ $timeDiffrence['dubai'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-8">
                                    <div class="city-name">
                                        India
                                    </div>

                                    <div class="{{ $timeDiffrence['india'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['india'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['india'] / 2 * 10 }}%">{{ $timeDiffrence['india'] >= 0 ? '+' : '' }}{{ $timeDiffrence['india'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-9">
                                    <div class="city-name">
                                        Beijing
                                    </div>

                                    <div class="{{ $timeDiffrence['beijing'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['beijing'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['beijing'] / 2 * 10 }}%">{{ $timeDiffrence['beijing'] >= 0 ? '+' : '' }}{{ $timeDiffrence['beijing'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-10">
                                    <div class="city-name">
                                        Singapore
                                    </div>

                                    <div class="{{ $timeDiffrence['singapore'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['singapore'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['singapore'] / 2 * 10 }}%">{{ $timeDiffrence['singapore'] >= 0 ? '+' : '' }}{{ $timeDiffrence['singapore'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-11">
                                    <div class="city-name">
                                        Tokyo
                                    </div>

                                    <div class="{{ $timeDiffrence['tokyo'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['tokyo'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['tokyo'] / 2 * 10 }}%">{{ $timeDiffrence['tokyo'] >= 0 ? '+' : '' }}{{ $timeDiffrence['tokyo'] }}
                                        h
                                    </div>
                                </div>
                                <div class="city-row d-flex" id="city-12">
                                    <div class="city-name">
                                        Moscow
                                    </div>

                                    <div class="{{ $timeDiffrence['moscow'] < 0 ? 'before' : 'after' }}"
                                         style="width: {{ $timeDiffrence['moscow'] / 2 * 10 == 0 ? 'auto' : $timeDiffrence['moscow'] / 2 * 10 }}%">{{ $timeDiffrence['moscow'] >= 0 ? '+' : '' }}{{ $timeDiffrence['moscow'] }}
                                        h
                                    </div>
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
                        See <a href="https://showyourstripes.info/"
                               style="color: inherit">https://showyourstripes.info/</a>
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
                        Albuquerque
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Atlanta
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Austin
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Baltimore
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Boston
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Charlotte
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Chicago
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Cleveland
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Colorado
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Springs
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Columbus
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Dallas
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Denver
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Detroit
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        El Paso
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Fort
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Worth Fresno
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Honolulu
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Houston
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Indianapolis
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Jacksonville
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Kansas City
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Las Vegas
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Long Beach
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Los Angeles
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Memphis
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Mesa
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Miami
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Milwaukee
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Minneapolis
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Nashville
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        New York
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Oakland
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Oklahoma City
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Omaha
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Philadelphia
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Phoenix
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Portland
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Raleigh
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Sacramento
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        San Antonio
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        San Diego
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        San Francisco
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        San Jose
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Seattle
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Staten Island
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Tucson
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Tulsa
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Virginia
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Beach
                    </div>
                    <div class="col d-flex justify-content-center align-items-center big-trans">
                        Washington, D.C.
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        Wichita
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
