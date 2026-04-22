document.addEventListener("DOMContentLoaded", function () {
  // ===== CONFIG =====
  const TOTAL_QUESTIONS = 10;
  const TOTAL_TIME = 20 * 60; // 20 minutes in seconds
  const PASS_SCORE = 6;
  // เฉลย: index ของตัวเลือกที่ถูก (0=a, 1=b, 2=c, 3=d)
  const CORRECT_ANSWERS = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

  // ===== STATE =====
  let currentQuestion = 0;
  let timeRemaining = TOTAL_TIME;
  let timerInterval = null;
  let userAnswers = new Array(TOTAL_QUESTIONS).fill(null);

  // ===== DOM ELEMENTS =====
  const quizInfo = document.getElementById("quiz-info");
  const quizTest = document.getElementById("quiz-test");
  const quizResult = document.getElementById("quiz-result");
  const btnStartQuiz = document.getElementById("btn-start-quiz");
  const btnPrev = document.getElementById("btn-prev");
  const btnSend = document.getElementById("btn-send");
  const btnModalOk = document.getElementById("btn-modal-ok");
  const timerDisplay = document.getElementById("quiz-timer");
  const counterDisplay = document.getElementById("quiz-counter");
  const progressItems = document.querySelectorAll(".quiz-progress-item");
  const questionBlocks = document.querySelectorAll(".quiz-question-block");

  // ===== 1. START QUIZ =====
  btnStartQuiz.addEventListener("click", function () {
    quizInfo.classList.add("d-none");
    quizTest.classList.remove("d-none");
    startTimer();
    showQuestion(0);
  });

  // ===== 2. TIMER =====
  function startTimer() {
    updateTimerDisplay();
    timerInterval = setInterval(function () {
      timeRemaining--;
      updateTimerDisplay();
      if (timeRemaining <= 0) {
        clearInterval(timerInterval);
        submitQuiz();
      }
    }, 1000);
  }

  function updateTimerDisplay() {
    const hours = Math.floor(timeRemaining / 3600);
    const minutes = Math.floor((timeRemaining % 3600) / 60);
    const seconds = timeRemaining % 60;
    timerDisplay.textContent =
      String(hours).padStart(2, "0") +
      ":" +
      String(minutes).padStart(2, "0") +
      ":" +
      String(seconds).padStart(2, "0");
  }

  // ===== 3. NAVIGATION =====
  function showQuestion(index) {
    currentQuestion = index;

    // Show/hide question blocks
    questionBlocks.forEach(function (block, i) {
      block.classList.toggle("d-none", i !== index);
    });

    // Update progress bar
    progressItems.forEach(function (item, i) {
      item.classList.remove("current");
      if (i === index) {
        item.classList.add("current");
      }
    });

    // Update counter
    var answeredCount = userAnswers.filter(function (a) {
      return a !== null;
    }).length;
    counterDisplay.textContent = answeredCount + "/" + TOTAL_QUESTIONS;

    // Previous button state
    btnPrev.disabled = index === 0;
  }

  btnPrev.addEventListener("click", function () {
    if (currentQuestion > 0) {
      saveCurrentAnswer();
      showQuestion(currentQuestion - 1);
    }
  });

  btnSend.addEventListener("click", function () {
    saveCurrentAnswer();

    if (currentQuestion < TOTAL_QUESTIONS - 1) {
      showQuestion(currentQuestion + 1);
    } else {
      submitQuiz();
    }
  });

  // ===== 4. TRACK ANSWERS =====
  function saveCurrentAnswer() {
    var selected = document.querySelector(
      'input[name="q' + currentQuestion + '"]:checked',
    );
    if (selected) {
      userAnswers[currentQuestion] = parseInt(selected.value);
      progressItems[currentQuestion].classList.add("answered");
    }

    var answeredCount = userAnswers.filter(function (a) {
      return a !== null;
    }).length;
    counterDisplay.textContent = answeredCount + "/" + TOTAL_QUESTIONS;
  }

  // ===== 5. SUBMIT QUIZ =====
  function submitQuiz() {
    saveCurrentAnswer();
    clearInterval(timerInterval);

    var completedModal = new bootstrap.Modal(
      document.getElementById("completedModal"),
    );
    completedModal.show();
  }

  // ===== 6. SHOW RESULT =====
  btnModalOk.addEventListener("click", function () {
    quizTest.classList.add("d-none");
    quizResult.classList.remove("d-none");

    // Calculate score
    var score = 0;
    var results = [];
    for (var i = 0; i < TOTAL_QUESTIONS; i++) {
      var isCorrect = userAnswers[i] === CORRECT_ANSWERS[i];
      if (isCorrect) score++;
      results.push(isCorrect);
    }

    // Time spent
    var timeSpent = TOTAL_TIME - timeRemaining;
    var minutesSpent = Math.ceil(timeSpent / 60);

    // Percent
    var percent = ((score / TOTAL_QUESTIONS) * 100).toFixed(2);

    // Pass or Fail
    var passed = score >= PASS_SCORE;

    // Fill result status
    var resultStatus = document.getElementById("result-status");
    if (passed) {
      resultStatus.innerHTML =
        '<i class="fa-solid fa-circle-check quiz-result-icon-pass"></i>' +
        '<p class="mt-2 fw-bold" style="color: #28a745; font-size: 22px;">Pass</p>';
    } else {
      resultStatus.innerHTML =
        '<i class="fa-solid fa-circle-xmark quiz-result-icon-fail"></i>' +
        '<p class="mt-2 fw-bold" style="color: #dc3545; font-size: 22px;">Failed</p>';
    }

    // Fill summary
    document.getElementById("result-time-spent").textContent =
      minutesSpent + " Minutes";
    document.getElementById("result-score-earned").textContent =
      score + " Points";
    document.getElementById("result-percent").textContent = percent + "%";

    // Fill score title
    document.getElementById("result-score-title").textContent = passed
      ? "คะแนนทั้งหมด"
      : "Score";

    // Fill total score
    document.getElementById("result-total-score").textContent = score;

    // Fill score per question
    var scoreList = document.getElementById("result-score-list");
    scoreList.innerHTML = "";
    for (var j = 0; j < TOTAL_QUESTIONS; j++) {
      var dotClass = results[j] ? "correct" : "wrong";
      var pointText = results[j] ? "1" : "0";
      scoreList.innerHTML +=
        '<div class="quiz-score-item">' +
        '<div><span class="quiz-score-dot ' +
        dotClass +
        '"></span>Question ' +
        (j + 1) +
        "</div>" +
        "<span>" +
        pointText +
        "</span>" +
        "</div>";
    }
  });
});
