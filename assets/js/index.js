import { setupCounter } from './counter.js'

document.querySelector('#content').innerHTML = `
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
`

setupCounter(document.querySelector('#counter'))
