@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="top">
        <div class="container-fluid">
            <div class="row time-details-row">
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center flex-column">
                        <p class="city">@lang('site.timeIn') <a
                                href="{{ route('country.show', ['country' => $country->id, 'city_name' => $displayName]) }}">{{ $displayName }}</a>
                            @lang('site.now')</p>
                        @if(app()->getLocale() == 'en')
                            <p class="time-notic d-none">Your clock is <span>0.8</span> seconds ahead.</p>
                        @else
                            <p class="time-notic d-none">ساعتك متقدمة ب <span>0.8</span> ثانيه</p>
                        @endif
                    </div>
                    <div id="time-offset" class="d-none">{{ $getOffset }}</div>
                    <div id="real-timer-hidden" class="d-none">{{ $now->format('H:i:s') }}</div>
                    <div id="real-timer" class="d-flex justify-content-center"></div>
                    <div class="d-flex justify-content-center align-items-center flex-column date-details">
                        <p>{{ \Carbon\Carbon::now()->format('l') }}
                            , {{ \Carbon\Carbon::now()->format('F') }} {{ \Carbon\Carbon::now()->format('d') }}
                            , {{ \Carbon\Carbon::now()->format('Y') }},
                            @lang('site.week') {{ \Carbon\Carbon::now()->weekOfYear }}</p>
                        <p>@lang('site.sun'): ↑ {{ $sunRise->format("H:i") }} ↓ {{ $sunSet->format("H:i") }}
                            ({{ $formatedHoursToSunset }})</p>
                        <a href="{{ route('country.show', ['country' => $country->id, 'city_name' => $displayName]) }}"
                           class="more-info">
                            @lang('site.moreInfo')
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row most_popular_cities">
                    @if(app()->getLocale() == 'ar')
                        <div class="col box">
                            <div class="d-flex justify-content-center align-items-center flex-column box-content">
                                <div class="time"></div>
                                <div class="city">مكة</div>
                                <div class="d-none timezone">Asia/Riyadh</div>
                            </div>
                        </div>
                    @else
                        <div class="col box">
                            <div class="d-flex justify-content-center align-items-center flex-column box-content">
                                <div class="time"></div>
                                <div class="city">Los Angeles</div>
                                <div class="d-none timezone">America/Los_Angeles</div>
                            </div>
                        </div>
                    @endif
                    <div class="col box">
                        <div class="d-flex justify-content-center align-items-center flex-column box-content">
                            <div class="time"></div>
                            <div class="city">@lang('site.new_york')</div>
                            <div class="d-none timezone">America/New_York</div>
                        </div>
                    </div>
                    <div class="col box">
                        <div class="d-flex justify-content-center align-items-center flex-column box-content">
                            <div class="time"></div>
                            <div class="city">@lang('site.london')</div>
                            <div class="d-none timezone">Europe/London</div>
                        </div>
                    </div>
                    <div class="col box">
                        <div class="d-flex justify-content-center align-items-center flex-column box-content">
                            <div class="time"></div>
                            <div class="city">@lang('site.paris')</div>
                            <div class="d-none timezone">Europe/Paris</div>
                        </div>
                    </div>
                    <div class="col box">
                        <div class="d-flex justify-content-center align-items-center flex-column box-content">
                            <div class="time"></div>
                            <div class="city">@lang('site.moscow')</div>
                            <div class="d-none timezone">Europe/Moscow</div>
                        </div>
                    </div>
                    <div class="col box">
                        <div class="d-flex justify-content-center align-items-center flex-column box-content">
                            <div class="time"></div>
                            <div class="city">@lang('site.beijing')</div>
                            <div class="d-none timezone">Asia/Shanghai</div>
                        </div>
                    </div>
                    <div class="col box">
                        <div class="d-flex justify-content-center align-items-center flex-column box-content">
                            <div class="time"></div>
                            <div class="city">@lang('site.tokyo')</div>
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
                            @lang('site.shareOn') @lang('site.fb')
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="twitter">
                            <img src="{{ asset('images/icons/twitter.png') }}" alt="twitter logo">
                            @lang('site.shareOn') @lang('site.tw')
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" class="whatsapp">
                            <img src="{{ asset('images/icons/whatsapp.png') }}" alt="whatsapp logo">
                            @lang('site.shareOn') @lang('site.wap')
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bottom">
        <div class="container-fluid py-5">
            <div class="row mx-5">
                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">Abu Dhabi</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Addis Ababa</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Amsterdam</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Antananarivo</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Auckland</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Baghdad</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Bangkok</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Barcelona</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Beijing</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Berlin</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Bogotá</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Boston</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Brussels</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Buenos</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Aires</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Cape Town</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">Cairo</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Caracas</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Chicago</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Delhi</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Dhaka</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">Dubai</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Dublin</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Frankfurt</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Guangzhou</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Hanoi</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Havana</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Helsinki</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Jakarta</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Honolulu</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Istanbul</a>
                </div>

                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">Hong Kong</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Karachi</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Kinshasa</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Kuala</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Lumpur</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Kyiv</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Lagos</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Las Vegas</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Lima</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">London</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Los Angeles</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Luanda</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Madrid</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Manila Mecca</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Mexico City</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Miami</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Milan</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Moscow</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Mumbai</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">New Delhi</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">New York</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Nuuk Osaka</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">Paris</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Oslo</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Prague</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Reykjavik</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Rio de Janeiro</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Riyadh</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Rome Saint</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Petersburg</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">San Francisco</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Santiago</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Seoul</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Shanghai</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Shenzhen</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Singapore</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Stockholm</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Sydney</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">São Paulo</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Taipei</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big">
                    <a href="#">Tehran</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Tokyo Toronto</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Vancouver</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Vienna</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center">
                    <a href="#">Washington, D.C.</a>
                </div>
                <div class="col d-flex justify-content-center align-items-center big-trans">
                    <a href="#">Yangon</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="separetor"></div>
            </div>
            <div class="row justify-content-center footer-buttons">
                <a href="#" class="active">
                    <span class="">@lang('site.uct')</span>
                </a>
                <a href="#">
                    <span class="buttons">@lang('site.gmt')</span>
                </a>
                <a href="#">
                    <span class="buttons">@lang('site.cet')</span>
                </a>
            </div>
            <div class="row justify-content-center">
                <div class="separetor"></div>
            </div>
            <div class="row justify-content-center footer">
                <div class="footer-container">
                    <div class="row justify-content-center">
                        <a href="#">@lang('site.pt')</a>
                        <a href="#">@lang('site.mt')</a>
                        <a href="#">@lang('site.ct')</a>
                        <a href="#">@lang('site.et')</a>
                    </div>
                    <div class="row justify-content-center">
                        <a href="#">@lang('site.cst')</a>
                        <a href="#">@lang('site.ist')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
