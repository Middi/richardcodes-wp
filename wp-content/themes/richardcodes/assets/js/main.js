// START SKEW ANIMATION
// Check to see if skew is there.
if (!document.body.classList.contains('article')) {
    document.querySelector('.hero-skew').classList.add("hero-animation");
}

// GRAB ELEMENTS
const toggle = document.querySelector("#navToggle");
const ul = document.querySelector('nav ul');
const nav = document.querySelector('nav');
const aboutText = document.querySelectorAll('.about-container-text');
const card = document.querySelectorAll('.card-container .card');
const socialContainer = document.querySelector('.social-container');
const liList = document.querySelectorAll('nav ul li');
const contNav = document.querySelector('#container-nav');
const cardCont = document.querySelector('#card-container');
const filterClass = document.querySelectorAll('.filters-item');
const instaGrid = document.querySelector('#insta-grid');


// MOBILE TOGGLE
toggle.addEventListener('click', function (e) {
    e.preventDefault();

    if (document.body.clientWidth > 720) {
        ul.classList.toggle('menu-open');
        document.querySelector('#navToggle').classList.toggle('open');
    }
    else {
        nav.classList.toggle('mobile-open');
        document.querySelector('#navToggle').classList.toggle('open');
        contNav.classList.toggle('cont-nav-open');
    }
});


// KONAMI CODE 
if (window.addEventListener) {
    let keys = [];
    const konami = "38,38,40,40,37,39,37,39,66,65,13";
    window.addEventListener("keydown", function (e) {
        keys.push(e.keyCode);
        if (keys.toString().indexOf(konami) >= 0) {
            window.location = "/anklebiters1918";
            keys = [];
        }
    }, true);
}


// ANIMATION ON SCROLL
if (!document.body.classList.contains('article')) {

    let about = false;
    let cards = false;
    let social = false;

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 180 && !about) {
            aboutText[0].classList.toggle('about-animation');
            about = true;
        }

        if (window.pageYOffset > 1180 && !cards) {
            var i = 0;
            function myLoop() {
                setTimeout(function () {
                    card[i].classList.add("card-animation");
                    i++;
                    if (i < card.length) {
                        myLoop()
                    }
                }, 250)
            }
            myLoop();
            cards = true;
        }

        if (window.pageYOffset > 2080 && !social) {
            socialContainer.classList.toggle('social-animation');
            social = true;
        }


        // ACTIVE LINKS
        function removeLi() {
            for (var i = 0; i < liList.length; i++) {
                liList[i].firstElementChild.classList.remove('nav-active')
            }
        }

        if (window.pageYOffset < 623) {
            removeLi();
            liList[0].firstElementChild.classList.add("nav-active");
        }
        else if (window.pageYOffset > 623 && window.pageYOffset < 1400) {
            removeLi();
            liList[1].firstElementChild.classList.add("nav-active");
        }
        else if (window.pageYOffset > 1400 && window.pageYOffset < 2535) {
            removeLi();
            liList[2].firstElementChild.classList.add("nav-active");
        }
        else {
            removeLi();
            liList[3].firstElementChild.classList.add("nav-active");
        }
    });


}


// Smooth scrolling
initSmoothScrolling();

function initSmoothScrolling() {

    var duration = 400;

    var pageUrl = location.hash ?
        stripHash(location.href) :
        location.href;

    delegatedLinkHijacking();

    function delegatedLinkHijacking() {
        document.body.addEventListener('click', onClick, false);

        function onClick(e) {
            if (!isInPageLink(e.target))
                return;

            e.stopPropagation();
            e.preventDefault();

            jump(e.target.hash, {
                duration: duration,
                callback: function () {
                    setFocus(e.target.hash);
                }
            });
        }
    }

    function directLinkHijacking() {
        [].slice.call(document.querySelectorAll('a'))
            .filter(isInPageLink)
            .forEach(function (a) {
                a.addEventListener('click', onClick, false);
            });

        function onClick(e) {
            e.stopPropagation();
            e.preventDefault();

            jump(e.target.hash, {
                duration: duration,
            });
        }

    }

    function isInPageLink(n) {
        return n.tagName.toLowerCase() === 'a' &&
            n.hash.length > 0 &&
            stripHash(n.href) === pageUrl;
    }

    function stripHash(url) {
        return url.slice(0, url.lastIndexOf('#'));
    }

    function isCssSmoothSCrollSupported() {
        return 'scrollBehavior' in document.documentElement.style;
    }

    function setFocus(hash) {
        var element = document.getElementById(hash.substring(1));

        if (element) {
            if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
                element.tabIndex = -1;
            }

            element.focus();
        }
    }

}

function jump(target, options) {

    var
        start = window.pageYOffset,
        opt = {
            duration: options.duration,
            offset: options.offset || 0,
            callback: options.callback,
            easing: options.easing || easeInOutQuad
        },
        distance = typeof target === 'string' ?
            opt.offset + document.querySelector(target).getBoundingClientRect().top :
            target,
        duration = typeof opt.duration === 'function' ?
            opt.duration(distance) :
            opt.duration,
        timeStart, timeElapsed;

    requestAnimationFrame(function (time) {
        timeStart = time;
        loop(time);
    });

    function loop(time) {
        timeElapsed = time - timeStart;

        window.scrollTo(0, opt.easing(timeElapsed, start, distance, duration));

        if (timeElapsed < duration)
            requestAnimationFrame(loop)
        else
            end();
    }

    function end() {
        window.scrollTo(0, start + distance);

        if (typeof opt.callback === 'function')
            opt.callback();

        if (document.body.clientWidth > 720) {
            ul.classList.remove('menu-open');
            document.querySelector('#navToggle').classList.remove('open');
        }
        else {
            nav.classList.remove('mobile-open');
            document.querySelector('#navToggle').classList.remove('open');
            contNav.classList.toggle('cont-nav-open');
        }
    }

    function easeInOutQuad(t, b, c, d) {
        t /= d / 2
        if (t < 1) return c / 2 * t * t + b
        t--
        return -c / 2 * (t * (t - 2) - 1) + b
    }

}


// AJAX FOR PROJECTS

// Get the element, add a click listener...
document.querySelector("#filters").addEventListener("click", function (e) {
    if (e.target && e.target.matches(".filters-item")) {
        for(var i=0; i< filterClass.length; i++){
            filterClass[i].classList.remove('active');
        }
        e.target.classList.add('active');
        restAPI(e.target.getAttribute('data-key'));
    }
});



function restAPI(id) {
    const url = `http://richardcodeswp.local/wp-json/wp/v2/projects?categories=${id}`;

    fetch(url)
        .then(function (res) {
            if (!res.ok) {
                throw Error(res.statusText);
            }
            return res;
        })
        .then(function (res) {
            return res.json();
        })
        .then(function (res) {
            buildDom(res);
        })
        .catch(function (err) {
        })
};

function buildDom(res) {

    if (res) {
        cardCont.innerHTML = "";
    }

    let i = 0;

    while (i < 6 || res.length) {
        
        var excerptRend = res[i].excerpt.rendered.substr(3);
        var excerpt = excerptRend.substr(0, excerptRend.length - 5);

        var dom = `<div class="card card-animation">
    <a href="${res[i].link}">
        <div class="card-image" style="background:url('${res[i].acf.image}'); background-size:cover; background-position: center center;"></div>
    </a>
    <div class="card-text">
        <a href="${res[i].link}">
            <h4 class="h4-display">${res[i].title.rendered}</h4>
        </a>
        <p class="card-p">${excerpt}</p>
        <div class="card-text-more">
        ${res[i].acf.url ?
            `<a href="${res[i].acf.url}" class="more" title="view">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-8 -4 23 23"
                    width="32" height="53" xml:space="preserve">
                    <g>
                        <path d="M14.982,7C14.736,3.256,11.744,0.263,8,0.017V0H7.5H7v0.017C3.256,0.263,0.263,3.256,0.017,7H0v0.5V8h0.017C0.263,11.744,3.256,14.736,7,14.982V15h0.5H8v-0.018c3.744-0.246,6.736-3.238,6.982-6.982H15V7.5V7H14.982z M4.695,1.635
                                            C4.212,2.277,3.811,3.082,3.519,4H2.021C2.673,2.983,3.599,2.16,4.695,1.635z M1.498,5h1.758C3.122,5.632,3.037,6.303,3.01,7H1.019
                                            C1.072,6.296,1.238,5.623,1.498,5z M1.019,8H3.01c0.027,0.697,0.112,1.368,0.246,2H1.498C1.238,9.377,1.072,8.704,1.019,8z
                                                M2.021,11h1.497c0.292,0.918,0.693,1.723,1.177,2.365C3.599,12.84,2.673,12.018,2.021,11z M7,13.936
                                            C5.972,13.661,5.087,12.557,4.55,11H7V13.936z M7,10H4.269C4.128,9.377,4.039,8.704,4.01,8H7V10z M7,7H4.01
                                            c0.029-0.704,0.118-1.377,0.259-2H7V7z M7,4H4.55C5.087,2.443,5.972,1.339,7,1.065V4z M12.979,4h-1.496
                                            c-0.293-0.918-0.693-1.723-1.178-2.365C11.4,2.16,12.327,2.983,12.979,4z M8,1.065C9.027,1.339,9.913,2.443,10.45,4H8V1.065z M8,5
                                            h2.73c0.142,0.623,0.229,1.296,0.26,2H8V5z M8,8h2.99c-0.029,0.704-0.118,1.377-0.26,2H8V8z M8,13.936V11h2.45
                                            C9.913,12.557,9.027,13.661,8,13.936z M10.305,13.365c0.483-0.643,0.885-1.447,1.178-2.365h1.496
                                            C12.327,12.018,11.4,12.84,10.305,13.365z M13.502,10h-1.758c0.134-0.632,0.219-1.303,0.246-2h1.99
                                            C13.928,8.704,13.762,9.377,13.502,10z M11.99,7c-0.027-0.697-0.112-1.368-0.246-2h1.758c0.26,0.623,0.426,1.296,0.479,2H11.99z" fill="#757575" />
                    </g>
                </svg>
            </a>` : ``
            
        }
        ${res[i].acf.github_url ?
            `
            <a href="${res[i].acf.github_url}" class="more" title="github">
                <svg version="1.1" viewBox="-6 -15 36 40" width="32" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                        fill="#757575" />
                </svg>
            </a>
            ` : ``
        }
            <a href="${res[i].link}" class="more" title="Case Study">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"
                    height="50px" viewBox="0 -190 900 900" xml:space="preserve">
                    <g>
                        <circle cx="139.091" cy="306" r="55.636" fill="#757575" />
                        <circle cx="472.909" cy="306" r="55.636" fill="#757575" />
                        <circle cx="306" cy="306" r="55.636" fill="#757575" />
                        <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306
                                               C474.995,612,612,474.995,612,306z M27.818,306C27.818,152.36,152.36,27.818,306,27.818S584.182,152.36,584.182,306
                                               S459.64,584.182,306,584.182S27.818,459.64,27.818,306z" fill="#757575" />
                    </g>
                </svg>
            </a>
        </div>
    </div>
</div>`;
        cardCont.innerHTML += dom;
    i++;
    }
}


//INSTAGRAM API
function instaAPI() {

    var token = '178595410.7e82061.56428f51fa2d4779856bf0af509aa91c';
    var instaURL = `https://api.instagram.com/v1/users/self/media/recent/?access_token=${token}`;
    
    fetch(instaURL)
        .then(function (res) {
            if (res.status !== 200) {
                throw Error(res.statusText);
            }
            return res;
        })
        .then(function (res) {
            return res.json();
        })
        .then(function (res) {
            buildInsta(res);
        })
        .catch(function (err) {
            console.log(err);
        })
}

instaAPI();

function buildInsta(res) {
console.log(res);
    for(var i=0; i<8; i++){

        var resImg = res.data[i].images.thumbnail.url;
        var link = res.data[i].link;
        
        var image = `<a href="${link}" target="_blank">
            <div class="insta-grid-pic" style="background:url('${resImg}'); background-size:cover; background-position: center center;">

            </div>
        </a>`;

        instaGrid.innerHTML += image;
    }
}