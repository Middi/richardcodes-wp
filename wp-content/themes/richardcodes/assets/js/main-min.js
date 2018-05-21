"use strict";function initSmoothScrolling(){function t(){function t(t){n(t.target)&&(t.stopPropagation(),t.preventDefault(),jump(t.target.hash,{duration:c,callback:function e(){o(t.target.hash)}}))}document.body.addEventListener("click",t,!1)}function e(){function t(t){t.stopPropagation(),t.preventDefault(),jump(t.target.hash,{duration:c})}[].slice.call(document.querySelectorAll("a")).filter(n).forEach(function(e){e.addEventListener("click",t,!1)})}function n(t){return"a"===t.tagName.toLowerCase()&&t.hash.length>0&&a(t.href)===r}function a(t){return t.slice(0,t.lastIndexOf("#"))}function i(){return"scrollBehavior"in document.documentElement.style}function o(t){var e=document.getElementById(t.substring(1));e&&(/^(?:a|select|input|button|textarea)$/i.test(e.tagName)||(e.tabIndex=-1),e.focus())}var c=400,r=location.hash?a(location.href):location.href;t()}function jump(t,e){function n(t){d=t-l,window.scrollTo(0,c.easing(d,o,r,s)),d<s?requestAnimationFrame(n):a()}function a(){window.scrollTo(0,o+r),"function"==typeof c.callback&&c.callback(),document.body.clientWidth>720?(ul.classList.remove("menu-open"),document.querySelector("#navToggle").classList.remove("open")):(nav.classList.remove("mobile-open"),document.querySelector("#navToggle").classList.remove("open"),contNav.classList.toggle("cont-nav-open"))}function i(t,e,n,a){return(t/=a/2)<1?n/2*t*t+e:(t--,-n/2*(t*(t-2)-1)+e)}var o=window.pageYOffset,c={duration:e.duration,offset:e.offset||0,callback:e.callback,easing:e.easing||i},r="string"==typeof t?c.offset+document.querySelector(t).getBoundingClientRect().top:t,s="function"==typeof c.duration?c.duration(r):c.duration,l,d;requestAnimationFrame(function(t){l=t,n(t)})}function restAPI(t){var e="http://richardcodeswp.local/wp-json/wp/v2/projects?categories="+t;fetch(e).then(function(t){if(!t.ok)throw Error(t.statusText);return t}).then(function(t){return t.json()}).then(function(t){buildDom(t)}).catch(function(t){})}function buildDom(t){t&&(cardCont.innerHTML="");for(var e=0;e<6||t.length;){var n=t[e].excerpt.rendered.substr(3),a=n.substr(0,n.length-5),i='<div class="card card-animation">\n    <a href="'+t[e].link+'">\n        <div class="card-image" style="background:url(\''+t[e].acf.image+'\'); background-size:cover; background-position: center center;"></div>\n    </a>\n    <div class="card-text">\n        <a href="'+t[e].link+'">\n            <h4 class="h4-display">'+t[e].title.rendered+'</h4>\n        </a>\n        <p class="card-p">'+a+'</p>\n        <div class="card-text-more">\n        '+(t[e].acf.url?'<a href="'+t[e].acf.url+'" class="more" title="view">\n                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-8 -4 23 23"\n                    width="32" height="53" xml:space="preserve">\n                    <g>\n                        <path d="M14.982,7C14.736,3.256,11.744,0.263,8,0.017V0H7.5H7v0.017C3.256,0.263,0.263,3.256,0.017,7H0v0.5V8h0.017C0.263,11.744,3.256,14.736,7,14.982V15h0.5H8v-0.018c3.744-0.246,6.736-3.238,6.982-6.982H15V7.5V7H14.982z M4.695,1.635\n                                            C4.212,2.277,3.811,3.082,3.519,4H2.021C2.673,2.983,3.599,2.16,4.695,1.635z M1.498,5h1.758C3.122,5.632,3.037,6.303,3.01,7H1.019\n                                            C1.072,6.296,1.238,5.623,1.498,5z M1.019,8H3.01c0.027,0.697,0.112,1.368,0.246,2H1.498C1.238,9.377,1.072,8.704,1.019,8z\n                                                M2.021,11h1.497c0.292,0.918,0.693,1.723,1.177,2.365C3.599,12.84,2.673,12.018,2.021,11z M7,13.936\n                                            C5.972,13.661,5.087,12.557,4.55,11H7V13.936z M7,10H4.269C4.128,9.377,4.039,8.704,4.01,8H7V10z M7,7H4.01\n                                            c0.029-0.704,0.118-1.377,0.259-2H7V7z M7,4H4.55C5.087,2.443,5.972,1.339,7,1.065V4z M12.979,4h-1.496\n                                            c-0.293-0.918-0.693-1.723-1.178-2.365C11.4,2.16,12.327,2.983,12.979,4z M8,1.065C9.027,1.339,9.913,2.443,10.45,4H8V1.065z M8,5\n                                            h2.73c0.142,0.623,0.229,1.296,0.26,2H8V5z M8,8h2.99c-0.029,0.704-0.118,1.377-0.26,2H8V8z M8,13.936V11h2.45\n                                            C9.913,12.557,9.027,13.661,8,13.936z M10.305,13.365c0.483-0.643,0.885-1.447,1.178-2.365h1.496\n                                            C12.327,12.018,11.4,12.84,10.305,13.365z M13.502,10h-1.758c0.134-0.632,0.219-1.303,0.246-2h1.99\n                                            C13.928,8.704,13.762,9.377,13.502,10z M11.99,7c-0.027-0.697-0.112-1.368-0.246-2h1.758c0.26,0.623,0.426,1.296,0.479,2H11.99z" fill="#757575" />\n                    </g>\n                </svg>\n            </a>':"")+"\n        "+(t[e].acf.github_url?'\n            <a href="'+t[e].acf.github_url+'" class="more" title="github">\n                <svg version="1.1" viewBox="-6 -15 36 40" width="32" height="40" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"\n                    xml:space="preserve">\n                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"\n                        fill="#757575" />\n                </svg>\n            </a>\n            ':"")+'\n            <a href="'+t[e].link+'" class="more" title="Case Study">\n                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px"\n                    height="50px" viewBox="0 -190 900 900" xml:space="preserve">\n                    <g>\n                        <circle cx="139.091" cy="306" r="55.636" fill="#757575" />\n                        <circle cx="472.909" cy="306" r="55.636" fill="#757575" />\n                        <circle cx="306" cy="306" r="55.636" fill="#757575" />\n                        <path d="M612,306C612,137.004,474.995,0,306,0C137.004,0,0,137.004,0,306c0,168.995,137.004,306,306,306\n                                               C474.995,612,612,474.995,612,306z M27.818,306C27.818,152.36,152.36,27.818,306,27.818S584.182,152.36,584.182,306\n                                               S459.64,584.182,306,584.182S27.818,459.64,27.818,306z" fill="#757575" />\n                    </g>\n                </svg>\n            </a>\n        </div>\n    </div>\n</div>';cardCont.innerHTML+=i,e++}}function instaAPI(){var t="178595410.7e82061.56428f51fa2d4779856bf0af509aa91c",e="https://api.instagram.com/v1/users/self/media/recent/?access_token="+t;fetch(e).then(function(t){if(200!==t.status)throw Error(t.statusText);return t}).then(function(t){return t.json()}).then(function(t){buildInsta(t)}).catch(function(t){console.log(t)})}function buildInsta(t){console.log(t);for(var e=0;e<8;e++){var n=t.data[e].images.thumbnail.url,a=t.data[e].link,i='<a href="'+a+'" target="_blank">\n            <div class="insta-grid-pic" style="background:url(\''+n+"'); background-size:cover; background-position: center center;\">\n\n            </div>\n        </a>";instaGrid.innerHTML+=i}}document.body.classList.contains("article")||document.querySelector(".hero-skew").classList.add("hero-animation");var toggle=document.querySelector("#navToggle"),ul=document.querySelector("nav ul"),nav=document.querySelector("nav"),aboutText=document.querySelectorAll(".about-container-text"),card=document.querySelectorAll(".card-container .card"),socialContainer=document.querySelector(".social-container"),liList=document.querySelectorAll("nav ul li"),contNav=document.querySelector("#container-nav"),cardCont=document.querySelector("#card-container"),filterClass=document.querySelectorAll(".filters-item"),instaGrid=document.querySelector("#insta-grid");if(toggle.addEventListener("click",function(t){t.preventDefault(),document.body.clientWidth>720?(ul.classList.toggle("menu-open"),document.querySelector("#navToggle").classList.toggle("open")):(nav.classList.toggle("mobile-open"),document.querySelector("#navToggle").classList.toggle("open"),contNav.classList.toggle("cont-nav-open"))}),window.addEventListener){var keys=[],konami="38,38,40,40,37,39,37,39,66,65,13";window.addEventListener("keydown",function(t){keys.push(t.keyCode),keys.toString().indexOf(konami)>=0&&(window.location="/anklebiters1918",keys=[])},!0)}if(!document.body.classList.contains("article")){var about=!1,cards=!1,social=!1;window.addEventListener("scroll",function(){function t(){for(var t=0;t<liList.length;t++)liList[t].firstElementChild.classList.remove("nav-active")}if(window.pageYOffset>180&&!about&&(aboutText[0].classList.toggle("about-animation"),about=!0),window.pageYOffset>1180&&!cards){var e=function t(){setTimeout(function(){card[n].classList.add("card-animation"),++n<card.length&&t()},250)},n=0;e(),cards=!0}window.pageYOffset>2080&&!social&&(socialContainer.classList.toggle("social-animation"),social=!0),window.pageYOffset<623?(t(),liList[0].firstElementChild.classList.add("nav-active")):window.pageYOffset>623&&window.pageYOffset<1400?(t(),liList[1].firstElementChild.classList.add("nav-active")):window.pageYOffset>1400&&window.pageYOffset<2535?(t(),liList[2].firstElementChild.classList.add("nav-active")):(t(),liList[3].firstElementChild.classList.add("nav-active"))})}initSmoothScrolling(),document.querySelector("#filters").addEventListener("click",function(t){if(t.target&&t.target.matches(".filters-item")){for(var e=0;e<filterClass.length;e++)filterClass[e].classList.remove("active");t.target.classList.add("active"),restAPI(t.target.getAttribute("data-key"))}}),instaAPI();