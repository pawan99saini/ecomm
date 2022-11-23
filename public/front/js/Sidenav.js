// function for open My Account Side Nav
function openNav() {
  document.getElementById("mySidenav").style.width = "470px";
  document.getElementById("mySidenav").style.right = "0";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mySidenav").style.right = "-50px";
}
// function for Wish List Side Nav
function openWishlistSideNav() {
  document.getElementById("myWishList").style.width = "470px";
  document.getElementById("myWishList").style.right = "0";
}
function closeWishlistSideNav() {
  document.getElementById("myWishList").style.width = "0";
  document.getElementById("myWishList").style.right = "-50px";
}
// function for My Cart Side Nav
function openMyCart() {
  document.getElementById("myCart").style.width = "470px";
  document.getElementById("myCart").style.right = "0";
}

function closeMyCart() {
  document.getElementById("myCart").style.width = "0";
  document.getElementById("myCart").style.right = "-50px";
}

// function for Size Guide Side Nav desktop
function openSizeGuide() {
  document.getElementById("sizeGuide").style.width = "100%";
  document.getElementById("sizeGuide").style.right = "0";
  document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
}

function closeSizeGuide() {
  document.getElementById("sizeGuide").style.width = "0";
  document.getElementById("sizeGuide").style.right = "-50px";
  document.getElementsByTagName("BODY")[0].style.overflow = "auto";
}

// function for Size Guide Side Nav Mobile
function openSizeGuideMob() {
  document.getElementById("sizeGuideMobile").style.width = "100%";
  document.getElementById("sizeGuideMobile").style.right = "0";
  // document.getElementsByTagName("BODY")[0].style.overflow = "hidden";
}

function closeSizeGuideMob() {
  document.getElementById("sizeGuideMobile").style.width = "0";
  document.getElementById("sizeGuideMobile").style.right = "-50px";
  // document.getElementsByTagName("BODY")[0].style.overflow = "auto";
}

// function for Filter Side Nav
function openFilterSideNav() {
  document.getElementById("FilterSideNav").style.width = "470px";
}

function closeFilterSideNav() {
  document.getElementById("FilterSideNav").style.width = "0";
}
// function for Open Search Bar
function openSearch() {
  document.getElementById("searchToggle").classList.add("search-active");
  document
    .getElementById("search-toggle-button")
    .classList.add("search-toggle-active");
}
function closeSearch() {
  document.getElementById("searchToggle").classList.remove("search-active");
  document
    .getElementById("search-toggle-button")
    .classList.remove("search-toggle-active");
}

// function for Switch Currency

function switchCur() {
  var currencyFlag = document.getElementById("curSwitcher");
  currencyFlag.classList.toggle("open");
}

// function for Change Grid Layout two to Three

function changeTwo() {
  var elements = document.getElementsByClassName("productChange");
  for (var i = 0, len = elements.length; i < len; i++) {
    elements[i].classList.add("col-lg-6","viewTwo");
    elements[i].classList.remove("col-lg-4","col-lg-3","viewFour","viewThree");
  }
}
function changeThree() {
  var elements = document.getElementsByClassName("productChange");
  for (var i = 0, len = elements.length; i < len; i++) {
    elements[i].classList.add("col-lg-4","viewThree");
    elements[i].classList.remove("col-lg-6","col-lg-3","viewTwo","viewFour");
  }
}
function changeFour() {
  var elements = document.getElementsByClassName("productChange");
  for (var i = 0, len = elements.length; i < len; i++) {
    elements[i].classList.add("col-lg-3","viewFour");
    elements[i].classList.remove("col-lg-4","col-lg-6","viewThree","viewTwo");
  }
}

// function for Footer Cookies

setTimeout(() => {
    const box = document.getElementById("cookies");
    box.style.display = "none";
  }, 10000);

  function closeCookies() {
    document.getElementById("cookies").style.display = "none";
  }


  
