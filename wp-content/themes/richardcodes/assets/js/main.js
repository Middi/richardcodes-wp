// START SKEW ANIMATION
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



/*=============================================
=                  NAVIGATION                 =
=============================================*/

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


/*=============================================
=                 KONAMI CODE                 =
=============================================*/
if (window.addEventListener) {
    let keys = [];
    const konami = "38,38,40,40,37,39,37,39,66,65,13";
    window.addEventListener("keydown", function (e) {
        keys.push(e.keyCode);
        if (keys.toString().indexOf(konami) >= 0) {
            window.location = "/wp-admin";
            keys = [];
        }
    }, true);
}


/*=============================================
=              ANIMATION ON SCROLL            =
=============================================*/
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


/*=============================================
=               SMOOTH SCROLLING              =
=============================================*/
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


/*=============================================
=                     AJAX                    =
=============================================*/

// Get the filter buttons, add a click listener..
if(document.querySelector("#filters")) {
    document.querySelector("#filters").addEventListener("click", function (e) {
        if (e.target && e.target.matches(".filters-item")) {
            for(var i=0; i< filterClass.length; i++){
                filterClass[i].classList.remove('active');
                restAPI(e.target.getAttribute('data-key'));
            }
            e.target.classList.add('active');
        }
    });
}


// Make the call
function restAPI(id) {
    const url = `https://richardmiddleton.me/wp-json/wp/v2/projects?categories=${id}`;

    // SPINNER
    cardCont.innerHTML = `
        <div class="spinner">
            <div class="right-side">
                <div class="bar"></div>
            </div>
            <div class="left-side">
                <div class="bar"></div>
            </div>
        </div>`;

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
            console.log(err);
        })
};


// Build DOM
function buildDom(res) {

    if (res) {
        cardCont.innerHTML = "";
    }

    let i = 0;

    while (i < res.length && i < 6) {
        
        var excerptRend = res[i].excerpt.rendered.substr(3);
        var excerpt = excerptRend.substr(0, excerptRend.length - 5);

        var dom = `<div class="card card-animation">
    <a href="${res[i].link}">
        <div class="card-image" style="background:url('${res[i].acf.image.sizes.medium}'); background-size:cover; background-position: center center;"></div>
    </a>
    <div class="card-text">
        <a href="${res[i].link}">
            <h4 class="h4-display">${res[i].title.rendered}</h4>
        </a>
        <p class="card-p">${excerpt}</p>
        <div class="card-text-more">
        ${res[i].acf.url ?
            `<a href="${res[i].acf.url}" class="more" title="view">
                <img src="/wp-content/themes/richardcodes/assets/img/view.svg" alt="view">
            </a>` : ``
            
        }
        ${res[i].acf.github_url ?
            `
            <a href="${res[i].acf.github_url}" class="more" title="github">
                <img src="/wp-content/themes/richardcodes/assets/img/git-view.svg" alt="github">
            </a>
            ` : ``
        }
            <a href="${res[i].link}" class="more" title="Case Study">
                <img src="/wp-content/themes/richardcodes/assets/img/case-view.svg" alt="case study">
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