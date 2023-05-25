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
