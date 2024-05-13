// register form submission handling===========
document.querySelectorAll(".register-form").forEach((formInstance) => {
  formInstance.addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission

    var action = this.getAttribute("action");
    var formData = new FormData(this);
    console.log(Object.fromEntries(formData));

    var submitButton = document.getElementById("submit");

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
        // console.log(response.data);
        // messageElement.innerHTML = response.data;

        loader.parentNode.removeChild(loader); // Remove loader
        submitButton.disabled = false; // Enable submit button
      } catch (error) {
        console.error("Request failed", error);
      }
    };

    submitData(action, formData);

    event.target.elements.name.value = "";
    event.target.elements.password.value = "";
    event.target.elements.phone.value = "";
    event.target.elements["confirm-password"].value = "";

    formInstance.classList.remove(".white-popup-block");
    formInstance.classList.add(".mfp-hide");
  });
});
