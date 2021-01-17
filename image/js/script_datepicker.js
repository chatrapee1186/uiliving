const date = new Date();

console.log('start date ' + date);

const renderCalendar = () => {
  date.setDate(1);

  const monthDays = document.querySelector(".days");
  // query selector class .days

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDate();
  // get last day of month
  console.log('##last day of month ' + lastDay);

  const prevLastDay = new Date(
    date.getFullYear(),
    date.getMonth(),
    0
  ).getDate();
  // get previous day
  console.log('##Previous day ' + prevLastDay);

  const firstDayIndex = date.getDay();
  // get first day
  console.log('##first day index [0-6] ' + firstDayIndex);

  const lastDayIndex = new Date(
    date.getFullYear(),
    date.getMonth() + 1,
    0
  ).getDay();
  // get last day
  console.log('##last day index [0-6] ' + lastDayIndex);

  const nextDays = 7 - lastDayIndex - 1;
  // get next day
  console.log('next day ' + nextDays);

  const months = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

  document.querySelector(".date h1").innerHTML = months[date.getMonth()];

  let days = "";

  for (let x = firstDayIndex; x > 0; x--) {
    // Loop create day of prev month
    days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
  }

  for (let i = 1; i <= lastDay; i++) {
    // Loop create day of this month
    // if == this current day add class
    console.log('create day ' + i)

    if (
      i === new Date().getDate() &&
      date.getMonth() === new Date().getMonth()
    ) {
      days += `<div class="today">${i}</div>`;
    } else {
      days += `<div>${i}</div>`;
    }

  }



  for (let j = 1; j <= nextDays; j++) {
    days += `<div class="next-date">${j}</div>`;

  }
  monthDays.innerHTML = days;
  console.log(days);

  monthDays.addEventListener('click', function (e) {

    let dayslist = document.querySelectorAll('.days > div.active');

    dayslist.forEach(element => {
      element.classList.remove('active')
    });

    e.target.classList.add('active');
  })
};

document.querySelector(".prev").addEventListener("click", () => {
  date.setMonth(date.getMonth() - 1);
  renderCalendar();
});

document.querySelector(".next").addEventListener("click", () => {
  date.setMonth(date.getMonth() + 1);
  renderCalendar();
});

renderCalendar();

const timelist = document.querySelectorAll('.box-time > .time > div');

timelist.forEach(element => {
  element.addEventListener('click', function (e) {
    timelist.forEach(element => {
      element.classList.remove('active')
    });
    e.target.classList.add('active');
  })
});

