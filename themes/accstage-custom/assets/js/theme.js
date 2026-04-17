/* global window */
window.addEventListener('DOMContentLoaded', () => {
  document.documentElement.classList.add('accstage-ready');

  const phoneInput = document.querySelector('#acc-telefone');
  if (!phoneInput) {
    return;
  }

  const sanitizePhone = () => {
    phoneInput.value = phoneInput.value.replace(/\D+/g, '').slice(0, 9);
  };

  phoneInput.addEventListener('input', sanitizePhone);
  phoneInput.addEventListener('paste', () => {
    window.setTimeout(sanitizePhone, 0);
  });
});
