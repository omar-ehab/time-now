$(document).ready(function () {
    'use strict';
    let checkbox = $('input[name=theme]');
    checkbox.on('change', function () {
        if (this.checked) {
            document.documentElement.setAttribute('data-theme', 'dark')
            $('#theme-text').text('Dark Mode');
            $(".arrow").attr("src", "images/icons/dark_arrow.png");
        } else {

            document.documentElement.setAttribute('data-theme', 'light')
            $('#theme-text').text('Light Mode');
            $(".arrow").attr("src", "images/icons/light_arrow.png");
        }
    });

    let backendTime = $("#real-timer-hidden").text(),
        backendHour = parseInt(backendTime.slice(0, 2)),
        backendMinute = parseInt(backendTime.slice(3, 5)),
        backendSecond = parseInt(backendTime.slice(6, 8));

    let backendDate = new Date();
    backendDate.setHours(backendHour);
    backendDate.setMinutes(backendMinute);
    backendDate.setSeconds(backendSecond);
    let frontendDate = new Date();
    const diffTime = Math.abs(backendDate - frontendDate);
    if (diffTime > 0) {
        $('.time-notic').removeClass('d-none');
        $('.time-notic span').text(diffTime / 1000)
    }


    function startTimeWithSeconds() {
        let frontendDate = new Date();
        let h = frontendDate.getHours(),
            m = frontendDate.getMinutes(),
            s = frontendDate.getSeconds();

        h = checkTime(h);
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('real-timer').innerHTML =
            h + " : " + m + " : " + s;
        let t = setTimeout(startTimeWithSeconds, 500);
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }
        return i;
    }

    startTimeWithSeconds();

    $('.box .box-content').each(function (key, value) {
        let element = $(value),
            timeElement = element.children('.time'),
            timezoneElement = element.children('.timezone');

        let time = moment.tz(new Date(), timezoneElement.text()).format("HH:mm");
        timeElement.text(time);
        setInterval(function () {
            let time = moment.tz(new Date(), timezoneElement.text()).format("HH:mm");
            timeElement.text(time);
        }, 60000);
    });


    let chartHight = $('.chart').height();
    $('.separator').height(chartHight + 20);

    // setTimeout(function () {
    //     $('.search-results').slideDown();
    // }, 1000)


    function debounce(fn, time) {
        let timeout;
        return function (args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => fn.apply(this, args), time);
        }
    }

    const searchInput = $("#search");
    searchInput.on('input', debounce(() => {
        let searchVal = searchInput.val();
        $('.results-list').empty();
        $.ajax({
            url: `search?city=${searchVal}`,
            cache: false,
            success: function (response) {
                if (response.length > 0) {
                    $.each(response, function (key, val) {
                        console.log(val);
                        $('.results-list').append(`
                            <li>
                                <a href="country/${val.id}">${val.en_capital} - ${val.en_name}</a>
                            </li>
                        `);
                    })
                    $('.search-results').slideDown();
                } else {
                    $('.results-list').empty();
                    $('.results-list').append(`
                            <li class="no-res">
                                There is no result
                            </li>
                    `);
                }
            }
        });
    }, 500));

    $(document).click(function () {
        $('.search-results').slideUp();
        $('.results-list').empty();
    });
});

