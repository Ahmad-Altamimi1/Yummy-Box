
$(document).ready(function () {
          $("#myTable").DataTable();
});
let countElement; 

buttons = document.querySelectorAll("#cart");
minus = document.querySelectorAll("#minus");

total = document.querySelector("#total");
let noadd = false;
// console.log(buttons);
buttons.forEach((el) => {
          el.addEventListener("click", () => {
                    let countcart = document.getElementById("countcart");
                  let cart2 = document.querySelectorAll(".mini-cart__item");
countcart.innerHTML=cart2.length
                    let allbaba = document.querySelectorAll(".mini-cart__item");
                    allbaba.forEach((baba) => {
                              console.log(
                                        baba.childNodes[3].childNodes[1]
                                                  .childNodes[1].childNodes[0].innerHTML
                              );
                              if (
                                        el.getAttribute("namepr") ===
                                        baba.childNodes[3].childNodes[1]
                                                  .childNodes[1].childNodes[0]
                                                  .innerHTML
                              ) {
                                        let countElement =
                                                  baba.querySelector(
                                                            ".countpopcart"
                                                  );
                                                  console.log(countElement);
                                        let currentQuantity = parseInt(
                                                  countElement.innerHTML
                                        );
                                        console.log(currentQuantity);
                                        //     console.log(countElement.textContent[1].trim());
                                        countElement.innerHTML = `${
                                                  currentQuantity + 1
                                        }`;
                                        console.log(countElement.innerHTML);
                                        total.innerHTML =
                                                  (currentQuantity + 1) *
                                                  el.getAttribute("price");

                                        noadd = true;
                              }
                    });

                    if (!noadd) {
                              let productcart = document.createElement("div");
                              productcart.classList.add("cart-detail");
                              productcart.classList.add("row");

                              productcart.innerHTML = `


     <div class="mini-cart__item">
                <img src="../${el.getAttribute("image")}" alt="">
                <div class="mini-cart__item-content">
                    <div class="mini-cart__item-top">
                        <h3><a href="product-details.html">${el.getAttribute(
                                  "namepr"
                        )}</a></h3>
                        <p > ${el.getAttribute("price")}</p>
                    </div><!-- /.mini-cart__item-top -->
                    <div class="quantity-box">
                        <p class='countpopcart'>1</p>
                    </div>
                </div><!-- /.mini-cart__item-content -->
            </div>

       `;

                              let cart = document.querySelector("#baba");
                              console.log(cart);



                              cart.appendChild(productcart);
                    }

                    let valueToAdd = el.getAttribute("name");
                    console.log(valueToAdd);

                    axios.post("/add-product-to-session-array", {
                              data: valueToAdd,
                    })
                              .then(function (response) {
                                        console.log(response.data.message); // Output the response message
                                        // You can update the DOM or perform other actions here if needed
                              })
                              .catch(function (error) {
                                        console.error(error);
                              });
          });
          return false;
});
minus.forEach((el) => {
          el.addEventListener("click", () => {
                    let countcart = document.getElementById("countcart");
                    let cart2 = document.querySelectorAll(".mini-cart__item");
                    countcart.innerHTML = cart2.length;
                    let allbaba = document.querySelectorAll(".mini-cart__item");
                    allbaba.forEach((baba) => {
                              console.log(
                                        baba.childNodes[3].childNodes[1]
                                                  .childNodes[1].childNodes[0]
                                                  .innerHTML
                              );
                              if (
                                        el.getAttribute("namepr") ===
                                        baba.childNodes[3].childNodes[1]
                                                  .childNodes[1].childNodes[0]
                                                  .innerHTML
                              ) {
                                        let countElement =
                                                  baba.querySelector(
                                                            ".countpopcart"
                                                  );
                                        console.log(countElement);
                                        let currentQuantity = parseInt(
                                                  countElement.innerHTML
                                        );
                                        console.log(currentQuantity);
                                        //     console.log(countElement.textContent[1].trim());
                                        countElement.innerHTML = `${
                                                  currentQuantity - 1
                                        }`;
                                        console.log(countElement.innerHTML);
                                        total.innerHTML =
                                                  (currentQuantity - 1) *
                                                  el.getAttribute("price");

                                        noadd = true;
                              }
                    });

                  

                    let valueToAdd = el.getAttribute("name");
                    console.log(valueToAdd);

                    axios.post("/add-product-to-session-array", {
                              data: valueToAdd,
                    })
                              .then(function (response) {
                                        console.log(response.data.message); // Output the response message
                                        // You can update the DOM or perform other actions here if needed
                              })
                              .catch(function (error) {
                                        console.error(error);
                              });
          });
          return false;
});


(function ($) {
          "use strict";

          /* ..............................................
	Loader 
    ................................................. */

          $(window).on("load", function () {
                    $(".preloader").fadeOut();
                    $("#preloader").delay(550).fadeOut("slow");
                    $("body").delay(450).css({ overflow: "visible" });
          });

          /* ..............................................
    Fixed Menu
    ................................................. */

          $(window).on("scroll", function () {
                    if ($(window).scrollTop() > 50) {
                              $(".top-header").addClass("fixed-menu");
                    } else {
                              $(".top-header").removeClass("fixed-menu");
                    }
          });

          /* ..............................................
    Gallery
    ................................................. */
          $(document).ready(function () {
                    $("#slides").superslides({
                              inherit_width_from: ".cover-slides",
                              inherit_height_from: ".cover-slides",
                              play: 5000,
                              animation: "fade",
                    });
          });
          $(".cover-slides ul li").append(
                    "<div class='overlay-background'></div>"
          );

          /* ..............................................
    Map Full
    ................................................. */

          $(document).ready(function () {
                    $(window).on("scroll", function () {
                              if ($(this).scrollTop() > 100) {
                                        $("#back-to-top").fadeIn();
                              } else {
                                        $("#back-to-top").fadeOut();
                              }
                    });
                    $("#back-to-top").click(function () {
                              $("html, body").animate({ scrollTop: 0 }, 600);
                              return false;
                    });
          });

          /* ..............................................
    Special Menu
    ................................................. */

          var Container = $(".container");
          Container.imagesLoaded(function () {
                    var portfolio = $(".special-menu");
                    portfolio.on("click", "button", function () {
                              $(this)
                                        .addClass("active")
                                        .siblings()
                                        .removeClass("active");
                              var filterValue = $(this).attr("data-filter");
                              $grid.isotope({
                                        filter: filterValue,
                              });
                    });
                    var $grid = $(".special-list").isotope({
                              itemSelector: ".special-grid",
                    });
          });

          /* ..............................................
    BaguetteBox
    ................................................. */

          baguetteBox.run(".tz-gallery", {
                    animation: "fadeIn",
                    noScrollbars: true,
          });

          /* ..............................................
    Datepicker
    ................................................. */

          $(".datepicker").pickadate();

          $(".time").pickatime();
})(jQuery);
