var cards = document.getElementsByClassName("step-card");

for (var i = 0; i < cards.length; i++) {
  const cardClickedId = `step-image-${i}`;
  cards[i].addEventListener("click", function () {
    for (var j = 0; j < cards.length; j++) {
      if (cards[j] == this) {
        cards[j].classList.add("active");
      } else {
        cards[j].classList.remove("active");
      }
    }
    $("#step-images")
      .children()
      .each(function () {
        var childId = $(this).attr("id");
        console.log(childId + " - " + cardClickedId);

        if (!$(this).hasClass("d-none")) {
          $(this).addClass("d-none");
        }
        if (childId === cardClickedId) {
          $(this).removeClass("d-none");
        }
      });
  });
}

$(document).ready(function () {
  $("#methodology-buttons").on("click", "button", function () {
    const clickedButton = $(this);
    $("#methodology-buttons")
      .children()
      .each(function () {
        $(this).addClass("ghost");
      });
    clickedButton.removeClass("ghost");
    var methodologyId = clickedButton
      .attr("id")
      .replace("methodology-button-", "");
    $("#methodologies")
      .children()
      .each(function () {
        if (!$(this).hasClass("d-none")) {
          $(this).addClass("d-none");
        }
      });
    $(`#methodology-${methodologyId}`).removeClass("d-none");

    // toggling images

    $("#methodologies-images")
      .children()
      .each(function () {
        if (!$(this).hasClass("d-none")) {
          $(this).addClass("d-none");
        }
      });
    $(`#methodology-image-${methodologyId}`).removeClass("d-none");
  });
});
