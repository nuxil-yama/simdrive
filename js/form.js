$(function () {
  let birthdayYear = document.querySelector('.js-birthday-year');
  let birthdayMonth = document.querySelector('.js-birthday-month');
  let birthdayDay = document.querySelector('.js-birthday-day');

  function createOptionForElements(elem, val) {
    let option = document.createElement('option');
    option.text = val;
    option.value = val;
    elem.appendChild(option);
  }

  for (let i = 1920; i <= 2020; i++) {
    createOptionForElements(birthdayYear, i);
  }
  for (let i = 1; i <= 12; i++) {
    createOptionForElements(birthdayMonth, i);
  }
  for (let i = 1; i <= 31; i++) {
    createOptionForElements(birthdayDay, i);
  }

  function changeTheDay() {
    birthdayDay.innerHTML = '';

    let lastDayOfTheMonth = new Date(birthdayYear.value, birthdayMonth.value, 0).getDate();

    for (let i = 1; i <= lastDayOfTheMonth; i++) {
      createOptionForElements(birthdayDay, i);
    }
  }

  birthdayYear.addEventListener('change', function () {
    changeTheDay();
  });

  birthdayMonth.addEventListener('change', function () {
    changeTheDay();
  });
});