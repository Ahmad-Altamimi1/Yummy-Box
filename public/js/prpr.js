// JavaScript code
$(document).ready(function () {
          showAllItems(); // Display all items with no filter applied
});

$("#min-price").on("change mousemove", function () {
          min_price = parseInt($("#min-price").val());
          $("#min-price-txt").text("$" + min_price);
          showItemsFiltered();
});

$("#max-price").on("change mousemove", function () {
          max_price = parseInt($("#max-price").val());
          $("#max-price-txt").text("$" + max_price);
          showItemsFiltered();
});

function showAllItems() {
          // Default grid to show all items on page load in
          $("#display-items-div").empty();
          for (let i = 0; i < category_items.length; i++) {
                    let item_content =
                              '<div class="col-12 col-md-4 text-center product-card" data-available-sizes="' +
                              category_items[i]["sizes"] +
                              '"><b>' +
                              category_items[i]["title"] +
                              '</b><br><img src="' +
                              category_items[i]["thumbnail"] +
                              '" height="64" width="64" alt="shoe thumbnail"><p>$' +
                              category_items[i]["price"] +
                              "</p></div>";
                    $("#display-items-div").append(item_content);
          }
}

function showItemsFiltered() {
          // Default grid to show all items on page load in
          $("#display-items-div").empty();
          for (let i = 0; i < category_items.length; i++) {
                    // Go through the items but only show items that have price within the specified range
                    if (
                              category_items[i]["price"] <= max_price &&
                              category_items[i]["price"] >= min_price
                    ) {
                              let item_content =
                                        '<div class="col-12 col-md-4 text-center product-card" data-available-sizes="' +
                                        category_items[i]["sizes"] +
                                        '"><b>' +
                                        category_items[i]["title"] +
                                        '</b><br><img src="' +
                                        category_items[i]["thumbnail"] +
                                        '" height="64" width="64" alt="shoe thumbnail"><p>$' +
                                        category_items[i]["price"] +
                                        "</p></div>";
                              $("#display-items-div").append(item_content); // Display in grid
                    }
          }
}
