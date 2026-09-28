(function () {
  function formatDate(dateObject) {
    var day = String(dateObject.getDate()).padStart(2, "0");
    var month = String(dateObject.getMonth() + 1).padStart(2, "0");
    var year = dateObject.getFullYear();
    return year + "-" + month + "-" + day;
  }

  var days = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];

  function createButtonForDay(daysOffset, buttonId, hiddenId) {
    var date = new Date();
    date.setDate(date.getDate() + daysOffset);

    if (date.getDay() === 0) {
      date.setDate(date.getDate() + 1);
    }

    var formattedDate = formatDate(date);
    var button = document.getElementById(buttonId);
    var hidden = document.getElementById(hiddenId);
    var dayName = days[date.getDay()];

    if (button && hidden) {
      button.textContent = dayName + " (" + formattedDate + ")";
      hidden.value = formattedDate;
    }
  }

  var dateToday = new Date();

  if (dateToday.getDay() === 0) {
    dateToday.setDate(dateToday.getDate() + 1);
  }
  var formattedDateToday = formatDate(dateToday);

  var buttonToday = document.getElementById("buttonToday");
  var hiddenDateToday = document.getElementById("hiddenDateToday");
  var dayName = days[dateToday.getDay()];
  if (buttonToday && hiddenDateToday) {
    buttonToday.textContent = dayName + " (" + formattedDateToday + ")";
    hiddenDateToday.value = formattedDateToday;
  }

  var dateTomorrow = new Date();
  dateTomorrow.setDate(dateTomorrow.getDate() + 1);

  if (dateTomorrow.getDay() === 0) {
    dateTomorrow.setDate(dateTomorrow.getDate() + 1);
  }
  if (dateToday.getDay() === 1) {
    dateTomorrow.setDate(dateToday.getDate() + 1);
  }
  var formattedDateTomorrow = formatDate(dateTomorrow);

  var buttonTomorrow = document.getElementById("buttonTomorrow");
  var hiddenDateTomorrow = document.getElementById("hiddenDateTomorrow");
  var dayNameT = days[dateTomorrow.getDay()];
  if (buttonTomorrow && hiddenDateTomorrow) {
    buttonTomorrow.textContent = dayNameT + " (" + formattedDateTomorrow + ")";
    hiddenDateTomorrow.value = formattedDateTomorrow;
  }

  var dateDayAfterTomorrow = new Date();
  dateDayAfterTomorrow.setDate(dateDayAfterTomorrow.getDate() + 2);

  if (dateDayAfterTomorrow.getDay() === 0) {
    dateDayAfterTomorrow.setDate(dateDayAfterTomorrow.getDate() + 1);
  }
  if (dateTomorrow.getDay() === 2) {
    dateDayAfterTomorrow.setDate(dateTomorrow.getDate() + 1);
  }
  var formattedDateDayAfterTomorrow = formatDate(dateDayAfterTomorrow);

  var buttonDayAfterTomorrow = document.getElementById("buttonDayAfterTomorrow");
  var hiddenDateDayAfterTomorrow = document.getElementById("hiddenDateDayAfterTomorrow");
  var dayNameAT = days[dateDayAfterTomorrow.getDay()];
  if (buttonDayAfterTomorrow && hiddenDateDayAfterTomorrow) {
    buttonDayAfterTomorrow.textContent = dayNameAT + " (" + formattedDateDayAfterTomorrow + ")";
    hiddenDateDayAfterTomorrow.value = formattedDateDayAfterTomorrow;
  }

  createButtonForDay(3, "buttonDay4", "hiddenDateDay4");
  createButtonForDay(4, "buttonDay5", "hiddenDateDay5");
  createButtonForDay(5, "buttonDay6", "hiddenDateDay6");
})();
