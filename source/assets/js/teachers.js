const teacherDetails = [
  {
    id: 1,
    name: "Pankaj Balujha",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "B.Tech",
    University: "Pantnagar University",
    about:
      "Senior Faculty of Mathematics and chemistry with 22+ Years of experience in Reputed National Level Institutes",
    image: "Pankaj-Balujha.png",
  },
  {
    id: 2,
    name: "Neera Singh",
    subject: "Physics",
    honorific: "Ms",
    edu: "B.Tech",
    University: "Magadh University",
    about:
      "Senior Faculty of Physics and chemistry with 22+ Years of experience in Reputed National Level Institutes",
    image: "Neera-Ma'am.png",
  },
  {
    id: 3,
    name: "Pradeep Kumar",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "B.Tech",
    University: "R.T.U Kota",
    about:
      "Senior Faculty of Mathematics with 13+ Years of experience in Reputed National Level Institutes",
    image: "pradeep-sir.png",
  },
  {
    id: 4,
    name: "Ankit Kumar",
    subject: "Physics",
    honorific: "Mr.",
    edu: "B.Tech",
    University: "R.T.U Kota",
    about:
      "Senior Faculty of Physics with 13+ Years of experience in Reputed National Level Institutes",
    image: "ankit-kumar-1.jpg",
  },
  {
    id: 5,
    name: "Suresh Khokhar",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "Chemical Science",
    University: "IIT Bombay BS",
    about:
      "Senior Faculty of Chemistry with 7+ Years of experience in Reputed National Level Institutes",
    image: "suresh_sir.jpg",
  },
  {
    id: 6,
    name: "Ashok Kumar",
    subject: "Chemistry",
    honorific: "Mr.",
    edu: "B.Tech",
    University: "NIT Jalandhar, Punjab",
    about:
      "Senior Faculty of Chemistry with 8+ Years of experience in Reputed National Level Institutes",
    image: "Ashok-Sir.png",
  },
  {
    id: 7,
    name: "Kavita Agarwal",
    subject: "Biology",
    honorific: "Ms.",
    edu: "M.Sc.(Microbiology), B.ed",
    University: "Devi Ahilya Vishwavidyalaya, Indore",
    about:
      "Senior Faculty of Biology and chemistry with 8+ Years of experience in Reputed National Level Institutes",
    image: "Kavita-Agarwal.png",
  },
  {
    id: 8,
    name: "Mukesh Kumar",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "M.Tech",
    University: "R.T.U Kota",
    about:
      "Senior Faculty of Biology and chemistry with 8+ Years of experience in Reputed National Level Institutes",
    image: "Mukesh-Sir.png",
  },
  {
    id: 8,
    name: "Lakhan Vaishnav",
    subject: "Physics and Mathematics",
    honorific: "Mr.",
    edu: "B.Tech, B.Sc.",
    University: "R.T.U ",
    about:
      "Senior Faculty of Physics and Mathematics with 15+ Years of experience in Reputed National Level Institutes",
    image: "Lakhan-Vaishnav.png",
  },
  {
    id: 9,
    name: "Prashant Bharadwaj",
    subject: "Biology",
    honorific: "Mr.",
    edu: "M.Sc.(Biochemistry)",
    University: "BHU, Varanasi ",
    about:
      "Senior Faculty of Biology and chemistry with 0+ Years of experience.",
    image: "Prashant-Bharadwaj.png",
  },
  {
    id: 10,
    name: "Bhupendra Sharma",
    subject: "Biology",
    honorific: "Mr.",
    edu: "M.Sc",
    University: "Rajasthan University",
    about:
      "Senior Faculty of Biology and Chemistry with 20+ Years of experience in Reputed National Level Institutes",
    image: "Bhupendra-Sharma.png",
  },
  {
    id: 11,
    name: "Gaurav Sharma",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "M.Sc ,B.ed",
    University: "Rajasthan University",
    about:
      "Senior Faculty of Mathematics with 8+ Years of experience in Reputed National Level Institutes",
    image: "gaurav-sharma.png",
  },
  {
    id: 12,
    name: "Govind Kumar",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "M.Tech",
    University: "REC Jaipur",
    about:
      "Senior Faculty of Mathematics with 5+ Years of experience in Reputed National Level Institutes",
    image: "Govind-Kumar.png",
  },
  {
    id: 13,
    name: "Anushka",
    subject: "Social Studies",
    honorific: "Ms.",
    edu: "M.A.",
    University: "Rajasthan University",
    about:
      "Senior Faculty of SST with 9+ Years of experience in Reputed National Level Institutes",
    image: "Anushka-ma'am.jpg",
  },
  {
    id: 14,
    name: "Shekhar Ravindra Ghodeswar",
    subject: "English",
    honorific: "Mr.",
    edu: "M.A, B.Ed",
    University: "Mumbai University",
    about:
      "Senior Faculty of English and chemistry with 17+ Years of experience in Reputed National Level Institutes",
    image: "Shekhar-Sir.png",
  },
  {
    id: 15,
    name: "Rahul Kumar Singh",
    subject: "Physics",
    honorific: "Mr.",
    edu: "B.Tech",
    University: "Aku Patna University",
    about:
      "Senior Faculty of Physics with 2+ Years of experience in Reputed National Level Institutes",
    image: "Rahul-Kumar-Singh.png",
  },
  {
    id: 16,
    name: " Mohit Sharma",
    subject: "Chemistry",
    honorific: "Mr.",
    edu: "B.Tech",
    University: "Rajasthan Technical University",
    about:
      "Senior Faculty of Chemistry with 2+ Years of experience in Reputed National Level Institutes",
    image: "Mohit-Sharma.png",
  },

  {
    id: 17,
    name: "Akhil Saxena",
    subject: "Mathematics",
    honorific: "Mr.",
    edu: "M.Com, D.EI.Ed",
    University: "Rajasthan Technical University",
    about:
      "Senior Faculty of Mathematics and chemistry with 9+ Years of experience in Reputed National Level Institutes",
    image: "Akhil-Sir.png",
  },

  {
    id: 18,
    name: "Chetanya Kumar",
    subject: "Biology",
    honorific: "Mr.",
    edu: "B.Sc",
    University: "Delhi University",
    about:
      "Senior Faculty of Biology and chemistry with 1+ Years of experience",
    image: "Chetanya-Sir.png",
  },

  {
    id: 19,
    name: "Manish Kumar",
    subject: "Physics",
    honorific: "Mr.",
    edu: "M.Sc",
    University: "VG University Jaipur",
    about:
      "Senior Faculty of Biology and chemistry with 7+ Years of experience in Reputed National Level Institutes",
    image: "Manish-Kumar.png",
  },
];

// looping teachers

const teacherDivs = document.querySelectorAll(".advisor-carousel");

// console.log(teacherDiv);
teacherDivs.forEach((teacherDiv) => {
  teacherDiv.innerHTML = teacherDetails
    .map((teacher) => {
      const { id, name, subject, honorific, about, image, edu, University } =
        teacher;
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
                        <p style="color:#F58026;font-weight:600">
                        ${edu}
                        </p>
                        <p style="margin:-15px 0 0;color:#F58026">
                        ${University}
                        </p>
                        <p style="color:#fff">
                        ${about}.
                        </p>
                        <a href="./teachers-details.php?id=${id}" >Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>`;
    })
    .join("");
});

document.querySelectorAll(".advisor-items").forEach((teacherDiv) => {
  teacherDiv.innerHTML = teacherDetails
    .map((teacher) => {
      const { id, name, subject, honorific, about, image, edu, University } =
        teacher;
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
                        <p style="color:#F58026;font-weight:600">
                        ${edu}
                        </p>
                        <p style="margin:-15px 0 0;color:#F58026">
                        ${University}
                        </p>
                        <p style="color:#fff">
                        ${about}.
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
