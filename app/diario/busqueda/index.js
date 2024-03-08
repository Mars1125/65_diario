/*$(document).ready(function () {
 
  $("#searchForm").submit(function (event) {
    event.preventDefault(); // Evitar el envío del formulario

    var selectedCategory = $("#category").val();
    var startDate = $("#start_date").val();
    var endDate = $("#end_date").val();
    var searchText = $("#search_text").val();

    $.ajax({
      type: "POST",
      url: "search.php",
      data: {
        category: selectedCategory,
        start_date: startDate,
        end_date: endDate,
        search_text: searchText,
      },
      success: function (response) {
        $("#searchResults").html(response);

        
      },
    });
  });
});*/

