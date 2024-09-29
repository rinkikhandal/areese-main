const teacherDetails = [
  {
    id: 1,
    name: "Ankit Kumar",
    subject: "Physics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "ankit-kumar-1.jpg",
  },
  {
    id: 2,
    name: "Bhupendra Sharma",
    subject: "Biology",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Bhupendra-Sharma.png",
  },
  {
    id: 3,
    name: "Gaurav Sharma",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "gaurav-sharma.png",
  },
  {
    id: 4,
    name: " Mohit Sharma",
    subject: "Chemistry",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Mohit-Sharma.png",
  },
  {
    id: 5,
    name: "Rahul Kumar Singh",
    subject: "Physics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Rahul-Kumar-Singh.png",
  },
  {
    id: 6,
    name: "Pradeep Kumar",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "pradeep-sir.png",
  },
  {
    id: 7,
    name: "Suresh Khokhar",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "suresh_sir.jpg",
  },
  {
    id: 8,
    name: "Akhil Sir",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Akhil-Sir.png",
  },
  {
    id: 9,
    name: "Ashok Sir",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Ashok-Sir.png",
  },
  {
    id: 10,
    name: "Chetanya Sir",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Chetanya-Sir.png",
  },
  {
    id: 11,
    name: "Govind Kumar",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Govind-Kumar.png",
  },
  {
    id: 12,
    name: "Kavita Agarwal",
    subject: "Mathematics",
    honorific: "Ms.",
    about: "Together we will learn new things",
    image: "Kavita-Agarwal.png",
  },
  {
    id: 13,
    name: "Manish Kumar",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Manish-Kumar.png",
  },
  {
    id: 14,
    name: "Mukesh Sir",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Mukesh-Sir.png",
  },
  {
    id: 15,
    name: "Prashant Bharadwaj",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Prashant-Bharadwaj.png",
  },
  {
    id: 16,
    name: "Shekhar Sir",
    subject: "Mathematics",
    honorific: "Mr.",
    about: "Together we will learn new things",
    image: "Shekhar-Sir.png",
  },
];

// looping teachers

const teacherDivs = document.querySelectorAll(".advisor-carousel");

// console.log(teacherDiv);
teacherDivs.forEach((teacherDiv) => {
  teacherDiv.innerHTML = teacherDetails
    .map((teacher) => {
      const { id, name, subject, honorific, about, image } = teacher;
      return `<div class="advisor-item" data-id="${id}">
              <div class="info-box">
                <img src="assets/img/teachers/${image}" alt="Thumb" />
                <div class="info-title">
                  <h4>${honorific} ${name}</h4>
                  <span>${subject} Faculty</span>
                </div>
                <div class="overlay">
                  <div class="box">
                    <div class="content">
                      <div class="overlay-content">
                        <h4>About ${name}</h4>
                        <p>
                        ${about}
                        </p>
                        <a href="./teachers-details.php?id=${id}">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;
    })
    .join("");
});

export { teacherDetails };
