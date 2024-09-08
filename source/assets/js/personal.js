const displayMessages = (messages, className, messageElement) => {
  Object.entries(messages).forEach(([key, value]) => {
    const div = document.createElement("div");
    div.className = className;
    div.textContent = value;
    messageElement.appendChild(div);

    // Set a timeout to remove the message after 3 seconds
    setTimeout(() => {
      messageElement.removeChild(div);
    }, 3000);
  });
};

// Register form submission handling===========
document.querySelectorAll(".register-form").forEach((formInstance) => {
  formInstance.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    var action = this.getAttribute("action");
    var formData = new FormData(this);
    console.log(Object.fromEntries(formData));

    var submitButton = document.getElementById("register-submit");
    var messageElement = document.getElementById("message");

    // Clear previous messages
    messageElement.innerHTML = "";

    // Show loader
    var loader = document.createElement("img");
    loader.src = "assets/img/ajax-loader.gif";
    loader.className = "loader";
    submitButton.parentNode.insertBefore(loader, submitButton.nextSibling);
    submitButton.disabled = true;

    // Send form data using Axios
    const submitData = async (url, data) => {
      try {
        let response = await axios.post(url, data);
        const responseData = response.data;

        console.log(responseData);

        // Determine whether to show errors or success messages
        if (responseData.errors) {
          displayMessages(
            responseData.errors,
            "alert alert-error-p",
            messageElement
          );
        } else if (responseData.success) {
          let { phone, email } = responseData.info;

          displayMessages(
            responseData.success,
            "alert alert-success-p",
            messageElement
          );

          console.log(responseData.success);

          // Clear the form fields
          event.target.reset();
        }

        //in case of error clear after 60s
        setTimeout(() => {
          event.target.reset();
        }, 60000);

        loader.parentNode.removeChild(loader); // Remove loader
        submitButton.disabled = false; // Enable submit button
      } catch (error) {
        console.error("Request failed", error);
        loader.parentNode.removeChild(loader); // Remove loader in case of error
        submitButton.disabled = false; // Enable submit button in case of error
      }
    };

    submitData(action, formData);
  });
});

// END of Register form submission handling===========

// -----------------------------------------------------------------------------------------------------------------------------

//Login form submission=====================

document.querySelectorAll(".login-form").forEach((formInstance) => {
  formInstance.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    var action = this.getAttribute("action");
    var formData = new FormData(this);

    var submitButton = document.getElementById("login-submit");
    var messageElement = document.getElementById("message");

    // Clear previous messages
    messageElement.innerHTML = "";

    // Show loader
    var loader = document.createElement("img");
    loader.src = "assets/img/ajax-loader.gif";
    loader.className = "loader";
    submitButton.parentNode.insertBefore(loader, submitButton.nextSibling);
    submitButton.disabled = true;

    // Send form data using Axios
    const submitData = async (url, data) => {
      try {
        let response = await axios.post(url, data);
        const responseData = response.data;

        // console.log(responseData.user_details);

        // Determine whether to show errors or success messages
        // console.log(responseData);
        if (responseData.errors) {
          displayMessages(
            responseData.errors,
            "alert alert-error-p",
            messageElement
          );
        } else {
          // Page refresh on successful login
          window.location.reload();
        }

        event.target.reset();

        loader.parentNode.removeChild(loader); // Remove loader
        submitButton.disabled = false; // Enable submit button
      } catch (error) {
        console.error("Request failed", error);
        loader.parentNode.removeChild(loader); // Remove loader in case of error
        submitButton.disabled = false; // Enable submit button in case of error
      }
    };

    submitData(action, formData);
  });
});

// enquiry form handling=================================

document
  .querySelector(".enquiry-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    var action = this.getAttribute("action");
    var formData = new FormData(this);

    var submitButton = document.getElementById("enquiry-submit");
    var messageElement = document.getElementById("enquiry-message");

    // Clear previous messages
    messageElement.innerHTML = "";

    // Show loader
    var loader = document.createElement("img");
    loader.src = "assets/img/ajax-loader.gif";
    loader.className = "loader";
    submitButton.parentNode.insertBefore(loader, submitButton.nextSibling);
    submitButton.disabled = true;

    // Send form data using Axios
    const submitData = async (url, data) => {
      try {
        let response = await axios.post(url, data);
        const responseData = response.data;

        // console.log(responseData.user_details);

        // Determine whether to show errors or success messages
        // console.log(responseData);
        if (responseData.errors) {
          displayMessages(
            responseData.errors,
            "alert alert-error-p",
            messageElement
          );
        } else {
          displayMessages(
            responseData.success,
            "alert alert-success-p",
            messageElement
          );

          // Clear the form fields
          event.target.reset();
        }

        // event.target.reset();

        loader.parentNode.removeChild(loader); // Remove loader
        submitButton.disabled = false; // Enable submit button
      } catch (error) {
        console.error("Request failed", error);
        loader.parentNode.removeChild(loader); // Remove loader in case of error
        submitButton.disabled = false; // Enable submit button in case of error
      }
    };

    submitData(action, formData);
  });

// =====Toggle eye for password======

const passIcons = document.querySelectorAll(".eye-icon");

passIcons.forEach((icon) => {
  icon.addEventListener("click", (e) => {
    // toggle the type attribute
    const type =
      e.currentTarget.previousElementSibling.getAttribute("type") === "password"
        ? "text"
        : "password";

    e.currentTarget.previousElementSibling.setAttribute("type", type);

    // toggle the icon
    e.currentTarget.classList.toggle("fa-eye");
  });
});

// OTP form handling  =============================

const inputs = document.querySelectorAll(".otp-field input");
inputs.forEach((input, index) => {
  input.dataset.index = index;
  input.addEventListener("keyup", handleOtp);
  input.addEventListener("paste", handleOnPasteOtp);
});

function handleOtp(e) {
  const input = e.target;
  let value = input.value;
  let isValidInput = value.match(/[0-9a-z]/gi);
  input.value = "";
  input.value = isValidInput ? value[0] : "";
  let fieldIndex = input.dataset.index;
  if (fieldIndex < inputs.length - 1 && isValidInput) {
    input.nextElementSibling.focus();
  }
  if (e.key === "Backspace" && fieldIndex > 0) {
    input.previousElementSibling.focus();
  }
  if (fieldIndex == inputs.length - 1 && isValidInput) {
    submit();
  }
}

function handleOnPasteOtp(e) {
  const data = e.clipboardData.getData("text");
  const value = data.split("");
  if (value.length === inputs.length) {
    inputs.forEach((input, index) => (input.value = value[index]));
    submit();
  }
}

function submit() {
  console.log("Submitting...");
  // 👇 Entered OTP
  let otp = "";
  inputs.forEach((input) => {
    otp += input.value;
    input.disabled = true;
    input.classList.add("disabled");
  });
  console.log(otp);
  // 👉 Call API below
}
