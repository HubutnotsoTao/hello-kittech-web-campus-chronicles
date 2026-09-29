(function(){
  const saved = localStorage.getItem('cc-theme');
  if(saved) document.documentElement.dataset.theme = saved;

  window.toggleTheme = function(){
    const html=document.documentElement;
    const next=html.dataset.theme==='light'?'dark':'light';
    html.dataset.theme=next;
    localStorage.setItem('cc-theme',next);
  };
  window.updateSwitch = function(){
    const el=document.getElementById('themeSwitch');
    if(el) el.classList.toggle('on', document.documentElement.dataset.theme==='light');
  };
  window.toggleSidebar = function(){
    const el=document.getElementById('sidebar');
    if(el) el.classList.toggle('open');
  };
  window.togglePassword = function(id){
    const el=document.getElementById(id);
    if(el) el.type=el.type==='password'?'text':'password';
  };
  window.demoNotice = function(){
    alert('UI-only demo: this action is not connected to a database or backend.');
  };
  window.demoLogin = function(e){
    e.preventDefault();
    alert('UI-only demo: login is not connected to a database.');
    window.location.href='/dashboard';
  };
  window.demoSignup = function(e){
    e.preventDefault();
    const p=document.getElementById('signupPassword').value;
    const c=document.getElementById('confirmPassword').value;
    if(p!==c){ alert('Passwords do not match.'); return; }
    alert('UI-only demo: account creation is not connected to a database.');
    window.location.href='/dashboard';
  };
  window.demoForgot = function(e){
    e.preventDefault();
    alert('UI-only demo: reset code is not sent because there is no backend/database.');
  };
})();