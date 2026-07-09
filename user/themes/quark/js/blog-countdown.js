document.addEventListener('DOMContentLoaded', function () {
  const countdown = document.querySelector('[data-countdown-target]');

  if (!countdown) {
    return;
  }

  const targetDate = new Date(countdown.dataset.countdownTarget);
  const units = {
    days: countdown.querySelector('[data-countdown-unit="days"]'),
    hours: countdown.querySelector('[data-countdown-unit="hours"]'),
    minutes: countdown.querySelector('[data-countdown-unit="minutes"]'),
    seconds: countdown.querySelector('[data-countdown-unit="seconds"]')
  };

  function updateCountdown() {
    const now = new Date();
    const difference = targetDate - now;

    if (difference <= 0) {
      Object.values(units).forEach((element) => {
        if (element) {
          element.textContent = '0';
        }
      });
      return;
    }

    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor((difference / (1000 * 60 * 60)) % 24);
    const minutes = Math.floor((difference / (1000 * 60)) % 60);
    const seconds = Math.floor((difference / 1000) % 60);

    if (units.days) units.days.textContent = String(days);
    if (units.hours) units.hours.textContent = String(hours).padStart(2, '0');
    if (units.minutes) units.minutes.textContent = String(minutes).padStart(2, '0');
    if (units.seconds) units.seconds.textContent = String(seconds).padStart(2, '0');
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);
});
