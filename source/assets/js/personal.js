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

        // console.log(responseData.user_details);

        // Determine whether to show errors or success messages
        if (responseData.errors) {
          displayMessages(
            responseData.errors,
            "alert alert-error-p",
            messageElement
          );
        } else if (responseData.success) {
          displayMessages(
            responseData.success,
            "alert alert-success-p",
            messageElement
          );

          // Clear the form fields
          event.target.reset();
        }

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
