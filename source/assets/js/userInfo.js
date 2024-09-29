// user-info-update image preview===================
document.querySelector("#profile-pic").addEventListener("change", (e) => {
  const file = e.target.files[0];
  const filereader = new FileReader();
  filereader.onload = () => {
    const image = filereader.result;
    const imgSrc = image instanceof Blob ? URL.createObjectURL(image) : image;
    // console.log(imgSrc);
    // console.log(image);

    document.querySelector("#imagePreview").setAttribute("src", imgSrc);
  };
  filereader.readAsDataURL(file);
});

// display message=======(Already in header.js)
// const displayMessages = (messages, className, messageElement) => {
//   Object.entries(messages).forEach(([key, value]) => {
//     const div = document.createElement("div");
//     div.className = className;
//     div.textContent = value;
//     messageElement.appendChild(div);

//     // Set a timeout to remove the message after 3 seconds
//     setTimeout(() => {
//       messageElement.removeChild(div);
//     }, 3000);
//   });
// };

// form handling=======
document
  .querySelector(".user-info-update")
  .addEventListener("submit", function (e) {
    e.preventDefault();

    var action = this.getAttribute("action");
    var formData = new FormData(this);

    var submitButton = document.getElementById("user-info-submit");
    var messageElement = document.getElementById("user-info-message");

    // Show loader
    var loader = document.createElement("img");
    loader.src = "assets/img/ajax-loader.gif";
    loader.className = "loader";
    submitButton.parentNode.insertBefore(loader, submitButton.nextSibling);
    submitButton.disabled = true;

    // console.log(Object.fromEntries(formData));

    // Send form data using Axios
    const submitData = async (url, data) => {
      try {
        let response = await axios.post(url, data);
        const responseData = response.data;

        // Determine whether to show errors or success messages
        // console.log(responseData);
        if (responseData.errors) {
          displayMessages(
            responseData.errors,
            "alert alert-error-p",
            messageElement
          );

          // console.log(responseData.errors);
        } else {
          displayMessages(
            responseData.success,
            "alert alert-success-p",
            messageElement
          );
          // console.log(responseData.success);

          // Clear the form fields
          // event.target.reset();
        }

        // event.target.reset();

        loader.parentNode.removeChild(loader); // Remove loader
        submitButton.disabled = false; // Enable submit button
      } catch (error) {
        // console.error("Request failed", error);
        loader.parentNode.removeChild(loader); // Remove loader in case of error
        submitButton.disabled = false; // Enable submit button in case of error
      }
    };

    submitData(action, formData);
  });
