jQuery(function ($) {});

function togglePasswordVisibility() {
  var passwordInput = document.getElementById("passwordInput");
  var toggleIcon = document.getElementById("toggleIcon");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}

function toggleNewPasswordVisibility() {
  var passwordInput = document.getElementById("newPasswordInput");
  var toggleIcon = document.getElementById("toggleIconNew");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}

//forget password

document.querySelectorAll(".tab").forEach((tab) => {
  tab.addEventListener("click", function () {
    document
      .querySelectorAll(".tab")
      .forEach((t) => t.classList.remove("active"));
    document
      .querySelectorAll(".tab-content")
      .forEach((tc) => tc.classList.remove("active"));
    this.classList.add("active");
    document
      .getElementById(this.getAttribute("data-target"))
      .classList.add("active");
  });
});

//otp

document.addEventListener("DOMContentLoaded", function () {
  var countdownElement = document.getElementById("countdown");
  var resendContainer = document.getElementById("resend-container");
  var timeLeft = 30;

  var countdownTimer = setInterval(function () {
    if (timeLeft <= 0) {
      clearInterval(countdownTimer);

      resendContainer.innerHTML =
        '<a href="#" id="resend-link">إعادة الإرسال</a>';

      document
        .getElementById("resend-link")
        .addEventListener("click", function (e) {
          e.preventDefault();

          alert("sended");
        });
    } else {
      countdownElement.innerHTML = timeLeft;
    }
    timeLeft -= 1;
  }, 1000);
});

// home
document.querySelectorAll(".element").forEach((element) => {
  element.addEventListener("click", function () {
    document
      .querySelectorAll(".element")
      .forEach((el) => el.classList.remove("active"));

    this.classList.add("active");
  });
});

//book

document.addEventListener("DOMContentLoaded", function () {
  let currentStep = 1;
  const totalSteps = 3;

  function updateStepIndicator() {
    for (let i = 1; i <= totalSteps; i++) {
      const stepCircle = document.querySelector(`#step-${i}-indicator .circle`);

      stepCircle.innerHTML = "";

      if (i < currentStep) {
        stepCircle.classList.add("completed");
        stepCircle.classList.remove("active");
        stepCircle.innerHTML = '<i class="fas fa-check"></i>';
      } else if (i === currentStep) {
        stepCircle.classList.add("active");
        stepCircle.classList.remove("completed");
      } else {
        stepCircle.classList.remove("active", "completed");
      }
    }
  }
  function updateButtons() {
    const prevButton = document.querySelector(".bre");
    const nextButton = document.querySelector(".next");
    const doneButton = document.querySelector(".done");

    if (currentStep === 1) {
      prevButton.classList.add("bre-unactive");
    } else {
      prevButton.classList.remove("bre-unactive");
    }

    nextButton.style.display = currentStep === totalSteps ? "none" : "block";
    doneButton.style.display = currentStep === totalSteps ? "block" : "none";
  }

  function showStep(step) {
    document
      .querySelectorAll(".form-section, .summary-section, .slider-section")
      .forEach(function (section) {
        section.classList.add("hidden");
        section.classList.remove("visible");
      });

    const currentSection = document.querySelector(`#step-${step}`);
    if (currentSection) {
      currentSection.classList.remove("hidden");
      currentSection.classList.add("visible");
    }

    updateButtons();
    updateStepIndicator();
  }

  document.querySelector(".bre").addEventListener("click", function () {
    if (currentStep > 1) {
      currentStep--;
      showStep(currentStep);
    }
  });

  document.querySelector(".next").addEventListener("click", function () {
    if (currentStep < totalSteps) {
      currentStep++;
      showStep(currentStep);
    }
  });

  document.querySelector(".done").addEventListener("click", function () {
    alert("Form submitted!");
  });

  showStep(currentStep);
});

//edite book modal

const editeButtons = document.querySelectorAll(".edit-button");

editeButtons.forEach((button, index) => {
  button.addEventListener("click", function () {
    $("#editPacageModal").modal("show");
    $("#editPacageModal").addClass("modal-centered");
  });

  $("#editPacageModal").on("hidden.bs.modal", function () {
    $("#editPacageModal").removeClass("modal-centered");
  });
});

const cancelButtons = document.querySelectorAll(".cancel-button");

cancelButtons.forEach((button, index) => {
  button.addEventListener("click", function () {
    $("#cancelPacageModal").modal("show");
    $("#cancelPacageModal").addClass("modal-centered");
  });

  $("#cancelPacageModal").on("hidden.bs.modal", function () {
    $("#cancelPacageModal").removeClass("modal-centered");
  });
});

document.querySelectorAll(".modalTap").forEach((modalTap) => {
  modalTap.addEventListener("click", function () {
    document
      .querySelectorAll(".modalTap")
      .forEach((t) => t.classList.remove("active"));
    document
      .querySelectorAll(".modalTap-content")
      .forEach((tc) => tc.classList.remove("active"));
    this.classList.add("active");
    document
      .getElementById(this.getAttribute("data-target"))
      .classList.add("active");
  });
});

document.querySelectorAll(".package").forEach((package) => {
  package.addEventListener("click", function () {
    document.querySelectorAll(".package").forEach((pkg) => {
      pkg.classList.remove("package-selected");
    });

    this.classList.add("package-selected");
  });
});

//profile page

function previewImage(event) {
  const input = event.target;
  const reader = new FileReader();
  reader.onload = function () {
    const img = document.getElementById("profileImagePreview");
    img.src = reader.result;
  };
  if (input.files && input.files[0]) {
    reader.readAsDataURL(input.files[0]);
  }
}

document.querySelectorAll(".nav-item").forEach((item) => {
  item.addEventListener("click", function () {
    document
      .querySelectorAll(".nav-item")
      .forEach((nav) => nav.classList.remove("item-active"));

    this.classList.add("item-active");
  });
});

function navigateTo(target) {
  const sections = document.querySelectorAll(".step-section");

  sections.forEach((section) => {
    section.classList.add("hidden");
    section.classList.remove("active");
  });

  const targetSection = document.getElementById(target);
  if (targetSection) {
    targetSection.classList.remove("hidden");
    targetSection.classList.add("active");
  } else {
    console.log("Target section not found: " + target);
  }
}

document.querySelectorAll(".btnTap").forEach((tab) => {
  tab.addEventListener("click", function () {
    document
      .querySelectorAll(".btnTap")
      .forEach((t) => t.classList.remove("active"));
    document
      .querySelectorAll(".tab-content")
      .forEach((tc) => tc.classList.remove("active"));
    this.classList.add("active");
    document
      .getElementById(this.getAttribute("data-target"))
      .classList.add("active");
  });
});

document.querySelectorAll(".tab2").forEach((tab2) => {
  tab2.addEventListener("click", function () {
    document
      .querySelectorAll(".tab2")
      .forEach((t) => t.classList.remove("active"));
    document
      .querySelectorAll(".tab-content2")
      .forEach((tc) => tc.classList.remove("active"));
    this.classList.add("active");
    document
      .getElementById(this.getAttribute("data-target"))
      .classList.add("active");
  });
});

const inviteDiv = document.querySelector(".invite");
inviteDiv.addEventListener("click", function () {
  this.classList.add("border-active");
  const hiddenElements = document.querySelectorAll(".hidden-tap");

  hiddenElements.forEach(function (element) {
    element.classList.remove("hidden-tap");
    element.classList.add("activated-tap");
  });
});

//PROFILE MODALS

//canccel modal

const cancelBtns = document.querySelectorAll(".cancel-btn");

cancelBtns.forEach((button, index) => {
  button.addEventListener("click", function () {
    $("#cancelPacageModal").modal("show");
    $("#cancelPacageModal").addClass("modal-centered");
  });

  $("#cancelPacageModal").on("hidden.bs.modal", function () {
    $("#cancelPacageModal").removeClass("modal-centered");
  });
});

//canhge package modal

const changeBtns = document.querySelectorAll(".change-btn");

changeBtns.forEach((button, index) => {
  button.addEventListener("click", function () {
    $("#changePacageModal").modal("show");
    $("#changePacageModal").addClass("modal-centered");
  });

  $("#changePacageModal").on("hidden.bs.modal", function () {
    $("#changePacageModal").removeClass("modal-centered");
  });
});

//logut modal

const logoutBtns = document.querySelectorAll(".logout-btn");

logoutBtns.forEach((button, index) => {
  button.addEventListener("click", function () {
    $("#logoutModal").modal("show");
    $("#logoutModal").addClass("modal-centered");
  });

  $("#logoutModal").on("hidden.bs.modal", function () {
    $("#logoutModal").removeClass("modal-centered");
  });
});

document.addEventListener("DOMContentLoaded", function () {
  let currentStep = 1;
  const totalSteps = 2;

  function updateStepIndicator() {
    for (let i = 1; i <= totalSteps; i++) {
      const stepCircle = document.querySelector(`#step-${i}-indicator .circle`);

      stepCircle.innerHTML = "";

      if (i < currentStep) {
        stepCircle.classList.add("completed");
        stepCircle.classList.remove("active");
        stepCircle.innerHTML = '<i class="fas fa-check"></i>';
      } else if (i === currentStep) {
        stepCircle.classList.add("active");
        stepCircle.classList.remove("completed");
      } else {
        stepCircle.classList.remove("active", "completed");
      }
    }
  }
  function updateButtons() {
    const prevButton = document.querySelector(".bre");
    const nextButton = document.querySelector(".next");
    const doneButton = document.querySelector(".done");

    if (currentStep === 1) {
      prevButton.classList.add("bre-unactive");
    } else {
      prevButton.classList.remove("bre-unactive");
    }

    nextButton.style.display = currentStep === totalSteps ? "none" : "block";
    doneButton.style.display = currentStep === totalSteps ? "block" : "none";
  }

  function showStep(step) {
    document
      .querySelectorAll(".packages-section, .summary-section")
      .forEach(function (section) {
        section.classList.add("hidden");
        section.classList.remove("visible");
      });

    const currentSection = document.querySelector(`#step-${step}`);
    if (currentSection) {
      currentSection.classList.remove("hidden");
      currentSection.classList.add("visible");
    }

    updateButtons();
    updateStepIndicator();
  }

  document.querySelector(".bre").addEventListener("click", function () {
    if (currentStep > 1) {
      currentStep--;
      showStep(currentStep);
    }
  });

  document.querySelector(".next").addEventListener("click", function () {
    if (currentStep < totalSteps) {
      currentStep++;
      showStep(currentStep);
    }
  });

  document.querySelector(".done").addEventListener("click", function () {
    alert("Form submitted!");
  });

  showStep(currentStep);
});

/// ارسال الدعوات
const icreaseInvitationNumberButton = document.querySelectorAll(".add-btn");

icreaseInvitationNumberButton.forEach((button, index) => {
  button.addEventListener("click", function () {
    $("#incInvetationModal").modal("show");
    $("#incInvetationModal").addClass("modal-centered");
  });

  $("#incInvetationModal").on("hidden.bs.modal", function () {
    $("#incInvetationModal").removeClass("modal-centered");
  });
});

document.querySelectorAll(".one-package").forEach((package) => {
  package.addEventListener("click", function () {
    document.querySelectorAll(".one-package").forEach((pkg) => {
      pkg.classList.remove("package-selected");
    });

    this.classList.add("package-selected");
  });
});
