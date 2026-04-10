const f = document.getElementById('php-form');
const s = document.getElementById("form-status");
f.addEventListener("submit", async _0x104805 => {
  _0x104805.preventDefault();
  s.textContent = 'Sending…';
  try {
    const _0x17e88f = await fetch(f.action, {
      'method': "POST",
      'body': new FormData(f)
    });
    if (_0x17e88f.ok) {
      f.reset();
      s.innerHTML = "<span class=\"ok\">Thanks — message sent.</span>";
    } else {
      s.innerHTML = "<span class=\"err\">Send failed. Email me instead.</span>";
    }
  } catch {
    s.innerHTML = "<span class=\"err\">Network error.</span>";
  }
});