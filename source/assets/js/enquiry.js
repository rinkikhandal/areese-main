// enquiry form handling=================================

document.querySelectorAll(".enquiry-form").forEach((form) => {
  form.addEventListener("submit", function (event) {
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
});
