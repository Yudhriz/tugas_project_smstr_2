// /**
// * PHP Email Form Validation - v3.5
// * URL: https://bootstrapmade.com/php-email-form/
// * Author: BootstrapMade.com
// */
(function () {
  "use strict";

  let forms = document.querySelectorAll(".php-email-form");

  forms.forEach(function (input) {
    input.addEventListener("submit", function (event) {
      event.preventDefault();

      let thisForm = this;

      thisForm.querySelector(".loading").classList.add("d-block");

      let formData = new FormData(thisForm);

      php_email_form_submit(thisForm, formData);
    });
  });

  function php_email_form_submit(thisForm, formData) {
    let action = thisForm.getAttribute("action");

    fetch(action, {
      method: "POST",
      body: formData,
      headers: { "X-Requested-With": "XMLHttpRequest" },
    })
      .then((response) => {
        return response.text();
      })
      .then((data) => {
        thisForm.querySelector(".loading").classList.remove("d-block");
        if (data.trim() == "OK") {
          thisForm.reset();
        } else {
          throw new Error(
            data
              ? data
              : "Form submission failed and no error message returned from: " +
                action
          );
        }
      })
      .catch((error) => {
        console.log(error);
      });
  }
})();
