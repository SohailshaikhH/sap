window.addEventListener("scroll", function () {
  let navbar = document.getElementById("black");
  if (window.scrollY > 10) {
    navbar.classList.add("scroll");
  } else {
    navbar.classList.remove("scroll");
  }
});

$(document).ready(function () {
  // Scroll-to-Target
  $(".scroll-to-target").on("click", function () {
    var target = $(this).attr("data-target");
    $("html, body").animate(
      {
        scrollTop: $(target).offset().top,
      },
      10000
    );
  });

  // WOW Animation
  new WOW().init();

  // Fact Counter Animation
  $(window).on("scroll", function () {
    if ($(".counter-numbers:not(.counted)").length) {
      $(".counter-numbers:not(.counted)").each(function () {
        var counter = $(this);
        var targetCount = parseInt(counter.attr("data-count"), 10);
        var speed = 4000; // Adjust the speed as per your preference

        $({ countNum: 0 }).animate(
          { countNum: targetCount },
          {
            duration: speed,
            easing: "linear",
            step: function () {
              counter.text(Math.floor(this.countNum));
            },
            complete: function () {
              counter.text(this.countNum);
              counter.addClass("counted");
            },
          }
        );
      });
    }
  });
});
const headings = document.querySelectorAll(".underline-effect");

const onScrollHandler = (entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(onScrollHandler, {
  rootMargin: "0px",
  threshold: 0.3,
});

headings.forEach((heading) => {
  observer.observe(heading);
});

const headingss = document.querySelectorAll(".underline-effecttwo");

const onScrollHandlers = (entries, observers) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observers.unobserve(entry.target);
    }
  });
};

const observers = new IntersectionObserver(onScrollHandlers, {
  rootMargin: "0px",
  threshold: 0.3,
});
headingss.forEach((heading) => {
  observers.observe(heading);
});

const headingssthree = document.querySelectorAll(".underline-effectthree");

const onScrollHandlersthree = (entries, observersthree) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observersthree.unobserve(entry.target);
    }
  });
};

const observersthree = new IntersectionObserver(onScrollHandlersthree, {
  rootMargin: "0px",
  threshold: 0.3,
});
headingssthree.forEach((heading) => {
  observersthree.observe(heading);
});

const headingssfour = document.querySelectorAll(".underline-effectfour");

const onScrollHandlersfour = (entries, observersfour) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observersfour.unobserve(entry.target);
    }
  });
};

const observersfour = new IntersectionObserver(onScrollHandlersfour, {
  rootMargin: "0px",
  threshold: 0.3,
});
headingssfour.forEach((heading) => {
  observersfour.observe(heading);
});

const headinger = document.querySelectorAll(".underline-effectform");

const onScrollHandlering = (entries, observersform) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observersform.unobserve(entry.target);
    }
  });
};

const observerform = new IntersectionObserver(onScrollHandlering, {
  rootMargin: "0px",
  threshold: 0.3,
});

headinger.forEach((heading) => {
  observerform.observe(heading);
});

const heading = document.querySelectorAll(".underline-effectfooter");

const onScrollHandle = (entries, observersfooter) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      observersfooter.unobserve(entry.target);
    }
  });
};

const observerfooter = new IntersectionObserver(onScrollHandle, {
  rootMargin: "0px",
  threshold: 0.3,
});

heading.forEach((heading) => {
  observerfooter.observe(heading);
});

function validateForm() {
  var nameValid = validateName();
  var emailValid = validateEmail();
  var numberValid = validateNumber();
  var companyValid = validateCompany();

  return nameValid && emailValid && numberValid && companyValid;
}

function validateName() {
  var nameInput = document.getElementById("nameInput");
  var nameError = document.getElementById("nameError");
  var nameRegex = /^[A-Za-z\s]+$/;

  nameError.innerHTML = "";

  if (!nameRegex.test(nameInput.value)) {
    nameError.innerHTML = "Invalid Name. Only letters and spaces are allowed.";
    return false;
  }

  return true;
}

function validateEmail() {
  var emailInput = document.getElementById("emailInput");
  var emailError = document.getElementById("emailError");
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  emailError.innerHTML = "";

  if (!emailRegex.test(emailInput.value)) {
    emailError.innerHTML = "Invalid Email Address.";
    return false;
  }

  return true;
}

function validateNumber() {
  var numberInput = document.getElementById("numberInput");
  var numberError = document.getElementById("numberError");
  var numberRegex = /^\d{10}$/;

  numberError.innerHTML = "";

  if (numberInput.value && !numberRegex.test(numberInput.value)) {
    numberError.innerHTML =
      "Invalid Mobile Number. Please enter a 10-digit number.";
    return false;
  }

  return true;
}

function validateCompany() {
  var companyInput = document.getElementById("companyInput");
  var companyError = document.getElementById("companyError");

  companyError.innerHTML = "";

  if (!companyInput.value.trim()) {
    companyError.innerHTML = "Company Name cannot be empty.";
    return false;
  }

  return true;
}
// Function to handle the intersection of elements with the observer
const onScrollHandlever = (entries, obserververticle) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      obserververticle.unobserve(entry.target);
    }
  });
};

// Creating the IntersectionObserver with the appropriate callback function and options
const obserververticle = new IntersectionObserver(onScrollHandlever, {
  root: null,
  rootMargin: "0px",
  threshold: 0.3,
});

// Query all elements with the class "vertical-line" and observe them with the IntersectionObserver
const lines = document.querySelectorAll(".vertical-linetwo");
lines.forEach((line) => {
  obserververticle.observe(line);
});

const onScrollHandlevertwo = (entries, obserververticletwo) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      obserververticletwo.unobserve(entry.target);
    }
  });
};

// Creating the IntersectionObserver with the appropriate callback function and options
const obserververticletwo = new IntersectionObserver(onScrollHandlevertwo, {
  root: null,
  rootMargin: "0px",
  threshold: 0.3,
});

// Query all elements with the class "vertical-line" and observe them with the IntersectionObserver
const liness = document.querySelectorAll(".vertical-line");
liness.forEach((line) => {
  obserververticletwo.observe(line);
});
