let url = window.location.href;
let header = document.querySelector("header");
// if (url !='https://antares-2000.com.ua/'){

if (url.indexOf("services") >= 0) {
  header.style.height = "0px";
}
header.style.background = "#292a2c";
let dropDownMenu = document.querySelectorAll(".dropdown-menu");
for (let i = 0; i < dropDownMenu.length; i++) {
  dropDownMenu[i].style.background = "rgb(41, 42, 44)";
}
// }

if (url == "https://antares-2000.com.ua/news/") {
  let newsPage = document.querySelector("#menu-item-610");
  newsPage.classList += " current_page_item active";
}

//fix 06.11
document.querySelector(".navbar-toggler").addEventListener("click", (e) => {
  const aa = e.currentTarget.parentNode.querySelector(
    "#menu-header-menu-right",
  );
  document.querySelector("#header-menu-left").style.cssText =
    "background-color:rgb(41, 42, 44)";
  aa.style.cssText = "background-color:rgb(41, 42, 44)";
  console.log(aa);
});
//end

jQuery(document).ready(function ($) {
  $(".first").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: "<button class='documents-slider__prev-arrow'><i></i></button>",
    nextArrow: "<button class='documents-slider__next-arrow'><i></i></button>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
    ],
  });
  $(".second").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: "<button class='documents-slider__prev-arrow'><i></i></button>",
    nextArrow: "<button class='documents-slider__next-arrow'><i></i></button>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
    ],
  });
  $(".third").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: "<button class='documents-slider__prev-arrow'><i></i></button>",
    nextArrow: "<button class='documents-slider__next-arrow'><i></i></button>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
    ],
  });
  $(".fourth").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: "<button class='documents-slider__prev-arrow'><i></i></button>",
    nextArrow: "<button class='documents-slider__next-arrow'><i></i></button>",
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
        },
      },
    ],
  });
});
let searchInput = document.querySelector(".search-form");
let searchBtn = document.getElementById("search-form_btn");
let isInputActive = false;

searchBtn.addEventListener("click", function () {
  searchInput.classList.toggle("search-form");
});

jQuery(function ($) {
  $("contacts__contact-us_btn").on("click.smoothscroll", function (e) {
    var hash = this.hash,
      _hash = hash.replace(/#/, ""),
      theHref = $(this).attr("href").replace(/#.*/, "");
    if (theHref && location.href.replace(/#.*/, "") != theHref) return;
    var $target =
      _hash === "" ? $("body") : $(hash + ', a[name="' + _hash + '"]').first();
    if (!$target.length) return;
    e.preventDefault();
    $("html, body")
      .stop()
      .animate(
        { scrollTop: $target.offset().top - 400 },
        700,
        "swing",
        function () {
          window.location.hash = hash;
        },
      );
  });
});

let hotVacantion = document.querySelectorAll(".hot-vacantion");
for (let i = 0; i < hotVacantion.length; i++) {
  if (!hotVacantion[i].firstChild) {
    hotVacantion[i].style.display = "none";
  }
}

let actionsSpan = document.getElementById("menu-item-425");
actionsSpan.classList += " nav-item d-flex ";
let span = document.createElement("span");
span.setAttribute("class", "navbar-actions text-white");
const actionsCount = document.getElementById("actions-posts-count");
span.innerText = actionsCount.innerText;
actionsSpan.appendChild(span);

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.opacity = "0";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.opacity = "1";
  evt.currentTarget.className += " active";
}
