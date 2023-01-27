document.querySelectorAll(".js-form").forEach(function (form) {
  const controlWrapElements =
    form.querySelectorAll(".wpcf7-form-control-wrap") || [];
  const statusResetElements =
    form.querySelectorAll(".wpcf7-form-status-reset") || [];
  let messages = [];

  const removeErrors = () => {
    controlWrapElements.forEach((el) => el.classList.remove("_error"));
  };

  const removeMessages = () => {
    messages.forEach((message) => {
      if (message.parentNode) {
        message.parentNode.removeChild(message);
      }
    });
    messages = [];
  };

  const renderMessage = (selector, message) => {
    const el = form.querySelector(selector);
    el.classList.add("_error");
    const messageEl = document.createElement("span");
    messageEl.classList.add("ui-form-error");
    messageEl.innerHTML = message;
    el.appendChild(messageEl);
    messages.push(messageEl);
    const close = document.createElement("span");
    close.classList.add("ui-form-error__close");
    messageEl.appendChild(close);
    close.addEventListener("click", () => {
      messageEl.parentNode.removeChild(messageEl);
    });
  };

  statusResetElements.forEach((el) => {
    el.addEventListener("click", () => {
      form.classList.remove("_mail-sent");
      form.classList.remove("_mail-failed");
    });
  });

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    form.classList.add("_mail-sending");

    grecaptcha
      .execute(wpcf7_recaptcha.sitekey, { action: "submit" })
      .then(function (token) {
        removeErrors();
        removeMessages();

        const request = new XMLHttpRequest();
        request.open("POST", form.action, true);
        request.addEventListener("readystatechange", function () {
          if (this.readyState != 4) return;

          form.classList.remove("_mail-sending");

          form.dispatchEvent(new Event("wpcf7submit"));

          const response = JSON.parse(request.response);

          if (response.status == "mail_sent") {
            form.dispatchEvent(new Event("wpcf7mailsent"));

            form.reset();

            form.classList.add("_mail-sent");
          }

          if (response.status == "acceptance_missing") {
            form.dispatchEvent(new Event("wpcf7invalid"));

            renderMessage(".wpcf7-form-acceptance-wrap", response.message);
          }

          if (response.status == "mail_failed") {
            form.dispatchEvent(new Event("wpcf7mailfailed"));

            form.classList.add("_mail-failed");
          }

          if (response.status == "spam") {
            form.dispatchEvent(new Event("wpcf7spam"));

            form.classList.add("_mail-failed");
          }

          if (response.status == "validation_failed") {
            form.dispatchEvent(new Event("wpcf7invalid"));

            response.invalid_fields.forEach((field) => {
              renderMessage(field.into, field.message);
            });
          }
        });

        const formData = new FormData(form);
        formData.append("_wpcf7_recaptcha_response", token);
        request.send(formData);
      });
  });
});
