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

document
  .getElementById("admin-register-form")
  .addEventListener("submit", function (e) {
    e.preventDefault();

    var action = this.getAttribute("action");
    var formData = new FormData(this);

    var submitButton = document.getElementById("admin-register-submit");
    var messageElement = document.getElementById("admin-register-message");

    // Clear previous messages
    messageElement.innerHTML = "";

    // Show loader
    var loader = document.createElement("img");
    loader.src = "../source/assets/img/ajax-loader.gif";
    loader.className = "loader";
    submitButton.parentNode.insertBefore(loader, submitButton.nextSibling);
    submitButton.disabled = true;

    // Send form data using Axios
    console.log("hi");

    const submitData = async (url, data) => {
      try {
        console.log("hi");

        let response = await axios.post(url, data);
        console.log(response);

        const responseData = response.data;
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
          e.target.reset();
        }

        //in case of error clear after 60s
        setTimeout(() => {
          e.target.reset();
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
