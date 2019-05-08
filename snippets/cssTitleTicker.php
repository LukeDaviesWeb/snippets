<div class="content" snippet="ticker">
  <div class="title-container">   
    <h1>Title Typewriter</h1>
  </div>
  <div class="typewriter">
    <h1>What is this going to say .. who knows</h1>
  </div>

  <div class="info-container">
    <h4>Click below to view the source code</h4>
  </div>

  <div class="code-container">
    <div class="title-container">
      <h5 class="show-code" data="html">HTML</h5>
      <h5 class="show-code"data="css">CSS</h5>
    </div> 

    <div class="code" data="html">
      <pre class="prettyprint lang-html">

      &lt;div class="typewriter"&gt;
        &lt;h1&gt;What is this going to say .. who knows&lt;/h1&gt;
      &lt;/div&gt;
      </pre>
    </div> 
    
    <div class="code" data="css">
      <pre class="prettyprint lang-css">
      .body{
        display: flex;
        justify-content: center;
      }
   
      .typewriter h1 {
        color: #fff;
        font-family: monospace;
        overflow: hidden; /* Ensures the content is not revealed until the animation */
        border-right: .15em solid #70798C; /* The typwriter cursor */
        white-space: nowrap; /* Keeps the content on a single line */
        margin: 0 auto; /* Gives that scrolling effect as the typing happens */
        letter-spacing: .15em; /* Adjust as needed */
        animation: 
          typing 3.5s steps(30, end),
          blink-caret .5s step-end infinite;
      }

      /* The typing effect */
      @keyframes typing {
        from { width: 0 }
        to { width: 100% }
      }

      /* The typewriter cursor effect */
      @keyframes blink-caret {
        from, to { border-color: transparent }
        50% { border-color: #70798C; }
      }
      </pre>
    </div> 



  </div>
</div>


<style>
/* GLOBAL STYLES */

</style>