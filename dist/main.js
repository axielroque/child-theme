function c(e){let t=0;const o=n=>{t=n,e.innerHTML=`count is ${t}`};e.addEventListener("click",()=>o(t+1)),o(0)}document.querySelector("#content").innerHTML=`
  <div>
    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">
      <img src="/wp-content/themes/child-theme/assets/img/javascript.svg" class="logo vanilla" alt="JavaScript logo" />
    </a>
    <h1 class="text-xl">Hello Vite!</h1>
    <div class="card">
      <button id="counter" type="button"></button>
    </div>
    <p class="read-the-docs">
      Click on the Vite logo to learn more
    </p>
  </div>
`;c(document.querySelector("#counter"));
