      <div class="content" snippet="mobile-menu">
        <div class="title-container">
          <h1>Mobile Menu with dropdown</h1>
        </div>
        <nav>
          <ul class="menu">
              <li class="menu-item">
                <a href="/home">
                  <p>Home</p>
                  <div class="underline">
                    <span class="left"></span>
                    <span class="right"></span>
                  </div>
                </a>
              </li>

              <li class="menu-item has-children">
                <a>
                  <p>Gallery</p>
                  
                  <div class="underline">
                    <span class="left"></span>
                    <span class="right"></span>
                  </div>
                  <i class="fas fa-chevron-down"></i>
                </a>
                <!-- Sub Menu -->
                <ul class="sub-menu">
                  <li class="sub-menu-item">
                    <a href="/gallery/one">
                      <p>sub 1</p>
                      <div class="underline">
                        <span class="left"></span>
                        <span class="right"></span>
                      </div>
                    </a>
                  </li>
                  <li class="sub-menu-item">
                    <a href="/gallery/two">
                      <p>sub 2</p>
                      <div class="underline">
                        <span class="left"></span>
                        <span class="right"></span>
                      </div>
                    </a>
                  </li>
                  <li class="sub-menu-item">
                    <a href="/gallery/three">
                      <p>sub 3</p>
                      <div class="underline">
                        <span class="left"></span>
                        <span class="right"></span>
                      </div>
                    </a>
                  </li>
                </ul>

              </li>
              <li class="menu-item">
                <a href="/contact">
                  <p>Contact</p>
                  <div class="underline">
                    <span class="left"></span>
                    <span class="right"></span>
                  </div>
                </a>
              </li>
            </ul>
        </nav>

        <div class="info-container">
          <h4>Click below to view the source code</h4>
        </div>

        <div class="code-container">
          <div class="title-container">
            <h5 class="show-code" data="html">HTML</h5>
            <h5 class="show-code"data="css">CSS</h5>
            <h5 class="show-code" data="js">JS</h5>
          </div> 
            <div class="code" data="html">
              <pre class="prettyprint lang-html">
                &lt;nav&gt;
                  &lt;ul class="menu"&gt;
                      &lt;li class="menu-item"&gt;
                        &lt;a href="/home"&gt;
                          &lt;p&gt;Home&lt;/p&gt;
                          &lt;div class="underline"&gt;
                            &lt;span class="left"&gt;&lt;/span&gt;
                            &lt;span class="right"&gt;&lt;/span&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;
        
                      &lt;li class="menu-item has-children"&gt;
                        &lt;a&gt;
                          &lt;p&gt;Gallery&lt;/p&gt;
                          
                          &lt;div class="underline"&gt;
                            &lt;span class="left"&gt;&lt;/span&gt;
                            &lt;span class="right"&gt;&lt;/span&gt;
                          &lt;/div&gt;
                          &lt;i class="fas fa-chevron-down"&gt;&lt;/i&gt;
                        &lt;/a&gt;
                        &lt;!-- Sub Menu --&gt;
                        &lt;ul class="sub-menu"&gt;
                          &lt;li class="sub-menu-item"&gt;
                            &lt;a href="/gallery/one"&gt;
                              &lt;p&gt;sub 1&lt;/p&gt;
                              &lt;div class="underline"&gt;
                                &lt;span class="left"&gt;&lt;/span&gt;
                                &lt;span class="right"&gt;&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/li&gt;
                          &lt;li class="sub-menu-item"&gt;
                            &lt;a href="/gallery/two"&gt;
                              &lt;p&gt;sub 2&lt;/p&gt;
                              &lt;div class="underline"&gt;
                                &lt;span class="left"&gt;&lt;/span&gt;
                                &lt;span class="right"&gt;&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/li&gt;
                          &lt;li class="sub-menu-item"&gt;
                            &lt;a href="/gallery/three"&gt;
                              &lt;p&gt;sub 3&lt;/p&gt;
                              &lt;div class="underline"&gt;
                                &lt;span class="left"&gt;&lt;/span&gt;
                                &lt;span class="right"&gt;&lt;/span&gt;
                              &lt;/div&gt;
                            &lt;/a&gt;
                          &lt;/li&gt;
                        &lt;/ul&gt;
        
                      &lt;/li&gt;
                      &lt;li class="menu-item"&gt;
                        &lt;a href="/contact"&gt;
                          &lt;p&gt;Contact&lt;/p&gt;
                          &lt;div class="underline"&gt;
                            &lt;span class="left"&gt;&lt;/span&gt;
                            &lt;span class="right"&gt;&lt;/span&gt;
                          &lt;/div&gt;
                        &lt;/a&gt;
                      &lt;/li&gt;
                    &lt;/ul&gt;
              &lt;/nav&gt;
              </pre>
          </div>
          <div class="code" data="css">
              <pre class="prettyprint lang-css">
                  body{
                    background-color: #4C4C4C;
                    font-family: 'Lato', sans-serif;
                  }
              
                  a{
                    text-decoration: none;
                    color: currentColor;
                  }
              
                  .title-container h1{
                    color:#fff;
                    text-align: center;
                  }
                  nav{
                    border: 1px solid #7F7F7F;
                    max-width: 400px;
                    margin: auto;
                    text-align: center;
                  }
                  ul.menu{
                    margin: 0;
                  }
              
                  ul{
                    padding: 0;
                  }
                  ul li{
                    list-style-type: none;
              
                  }
                  .menu-item{
                    padding: 10px 5px;
                    cursor: pointer;
                    overflow: hidden;
                    background-color: #636363;
                    color: #fff;
                  }
              
                  .menu-item:hover > a > .underline > span, .sub-menu-item:hover > a > .underline > span{
                    width: 20px;
                  }
              
                  .fa-chevron-down{
                    color: #fff;
                    position: absolute;
                    bottom: 10px;
                    transform: rotate(0deg);
                    transition: transform .4s ease;
                    margin-top: 5px;
                    right: 5px;
                    top: calc(50% - 8px);
                  }
              
                  .fa-chevron-down.active{
                    bottom: 0px;
                    transform: rotate(180deg);
                  }
              
                  .underline{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 2px;
                    width: 40px;
                    margin: auto;
                  }
              
                  .underline span{
                    height: 2px;
                    width: 0px;
                    background-color: #fff;
                    transition: all .4s ease;
                  }
              
                  .has-children{
                    position: relative;
                  }
              
                  .has-children.active > .underline > span{
                    width: 20px;
                  }
              
              
                  .sub-menu{
                    height: 0px;
                    overflow: hidden;
                    margin-top: 0;
                    transition: all .4s ease;
                    padding: 5px 5px;
                    color: #444;
                    padding:0px;
                  }
              
                  .sub-menu.active{
                    height: initial;
                    margin-top:10px;
                  }
              
                  .sub-menu-item{
                    padding: 10px 5px;
                    opacity: 0;
                    position: relative;
                    font-weight: lighter;
                    transition: all .4s ease;
                  }
              
                  .sub-menu-item p{
                    border-bottom: 0px solid;
                    transition: all .4s ease;
                  }
              
                  .sub-menu-item:nth-child(1){
                    z-index: 3;
                  }
              
                  .sub-menu-item:nth-child(2){
                    bottom: 50px;
                    z-index: 2;
                  }
              
                  .sub-menu-item:nth-child(3){
                    bottom: 100px;
                    z-index: 1;
                  }
                  .sub-menu-item.active{
                    opacity: 1;
                    bottom: 0;
                    background-color: rgba(127, 127, 127, 0.2);
                    color: #fff;
                  }
              </pre>
          </div>


          <div class="code" data="js">
              <pre class="prettyprint">
                  //Global variables
                  var items = document.querySelectorAll('.sub-menu-item');
                  var menuWithChildren = document.querySelector('.has-children');
                  var submenuSwitch = document.querySelector('.fa-chevron-down');
                  var submenu = document.querySelector('.sub-menu');
                  var isMoved = false;
              
              
                  //click menu item with sub menu
                  menuWithChildren.onclick = function() {
                    //toggle flag
                    isMoved = !isMoved;
              
                    for ( var i=0; i < items.length; i++ ) {
                      //active sub menu
                      submenu.classList.toggle('active');
                      menuWithChildren.classList.toggle('active');
                      submenuSwitch.classList.toggle('active');
              
              
                      var toggleItemMove = getToggleItemMove( i );
                      // stagger transition with setTimeout
                      setTimeout( toggleItemMove, i * 50 );
                    }
                  };
              
              
                  function getToggleItemMove( i ) {
                    var item = items[i];
              
                    return function() {
                      item.classList.toggle('active');
                    }
                  }
              
                  //stop propogation of sub items on click
                  $(items).click(function(e) {
                    e.stopPropagation();
                  });
              </pre>
          </div>
        </div>
      </div>