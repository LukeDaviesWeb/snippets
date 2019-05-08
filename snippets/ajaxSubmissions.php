<div class="content" snippet="ajax">
  <div class="title-container">
    <h1>AJAX Submissions</h1>
  </div>

  <div class="copy-container">
    <p>Here is the basic example, </p>
    <p>the most common mistake is not matching up the input field name attribute with the corresponsding variable posted to php.</p>
  </div>

  <div class="form-container">
    <form action="/" class="demo-form">
      <div class="input-row">
        <input id="firstName" type="text" name = "firstName" placeholder="First Name">
      </div>
      <div class="input-row">
          <input id="lastName" type="text" name = "lastName" placeholder="Last Name">
      </div>
      <div class="input-row">
          <input id="email" type="text" name = "email" placeholder="Email">
      </div>
      <div class="input-row">
          <input id="phone" type="text" name = "phone" placeholder="Phone Number">
      </div>

      <div class="input-row">
          <textarea id="message" name="message" cols="30" rows="10" placeholder="Message"></textarea>
      </div>


      <div class="input-row">
          <div class="submitbtn">Send it</div>
      </div>

      <div class="loading-row hidden">
          <img src="/wp-content/uploads/loading.gif" alt="form-loading-gif">
      </div>

      <div class="error-row">
          <div class="error-msg"></div>
          <div class="success-msg"></div>
      </div>
    </form>
  </div>

  <div class="info-container">
    <h4>Click below to view the source code</h4>
  </div>

  <div class="code-container">
    <div class="title-container">
      <h5 class="show-code" data="html">HTML</h5>
      <h5 class="show-code" data="css">CSS</h5>
      <h5 class="show-code" data="js">jQuery</h5>
      <h5 class="show-code" data="php">PHP</h5>
    </div>

    <div class="code" data="css">
      <pre class="prettyprint">
      .demo-form{
        max-width:40%;
        margin:auto;
      }
      .input-row{
        margin-bottom: 10px;
      }
      input{
        height: 35px;
      }
      input:focus {
        outline: none !important;
        border:1px solid #fff;
        box-shadow: 0 0 10px #424242;
      }

      input, textarea{
        padding: 5px 10px;
        width: 100%;
        border-radius:3px;
        border: 2px solid #70798C;
        background-color: #424242;
        letter-spacing: 1px;
        font-weight: lighter;
        font-size: 14px;
      }

      textarea:focus {
        outline: none !important;
        border:1px solid #fff;
        box-shadow: 0 0 10px #424242;
      }
      /* Change Autocomplete styles in Chrome*/
      input:-webkit-autofill,
      input:-webkit-autofill:hover, 
      input:-webkit-autofill:focus,
      textarea:-webkit-autofill,
      textarea:-webkit-autofill:hover,
      textarea:-webkit-autofill:focus {
        border: 1px solid #fff;
        -webkit-text-fill-color: #fff;
        -webkit-box-shadow: 0 0 0px 1000px #424242 inset;
        transition: background-color 5000s ease-in-out 0s;
      }

      .hidden{
        display:none;
      }

      .success-msg{
        color: #81dc81;
      }

      .error-msg{
        color: #d66060;
      }

      .submitbtn{
        padding: 5px 10px;
        height:25px;
        width: 100px;
        background-color: #70798C;
        color: #fff;
        border-radius:3px;
        text-align:center;
        line-height:24px;
        cursor:pointer;
        transition:all .4s ease;
        border:2px solid transparent;
      }
      .submitbtn:hover{
        color:#70798C;
        background-color:#424242;
        border: 2px solid #fff;
      }
      </pre>
    </div>

    <div class="code" data="php">
      <pre class="prettyprint">

      $firstName = trim($_POST['firstName']);
      $lastName = trim($_POST['lastName']);
      $email = trim($_POST['email']);
      $phone = trim($_POST['phone']);
      $message = trim($_POST['message']);

      $response = array();

      if($firstName == ""){
          $response['msg'] = "You did not enter your first name.";
          $response['success'] = false;
      }
      elseif($lastName == ""){
          $response['msg'] = "You did not enter your last name.";
          $response['success'] = false;
      }
      elseif($email == ""){
          $response['msg'] = "You did not enter your email address.";
          $response['success'] = false;
      }
      elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){
          $response['error'] = 'You did not enter a valid email address.';
          $response['success'] = false;
        }
      elseif($phone == "" || is_numeric($phone) == false || strlen($phone) < 10){
          $response['msg'] = "You did not enter a valid phone number.";
          $response['success'] = false;
      }
      else{
        //here is where you would email a response, or save data to a database.
        $response['success'] = true;
        $response['msg'] = 'form submitted successfully';
        
      }
      echo json_encode($response);
      
      </pre>
    </div>

    <div class="code" data="html">
      <pre class="prettyprint">

        &lt;form action="/" class="demo-form"&gt;
          &lt;div class="form-row"&gt;
            &lt;input type="text" name="firstName" placeholder="First Name"&gt;
          &lt;/div&gt;

          &lt;div class="form-row"&gt;
            &lt;input type="text" name="lastName" placeholder="Last Name"&gt;
          &lt;/div&gt;

          &lt;div class="form-row"&gt;
            &lt;input type="email" name="email" placeholder="Email Address"&gt;
          &lt;/div&gt;

          &lt;div class="form-row"&gt;
            &lt;input type="number" name="phone" placeholder="Phone Number"&gt;
          &lt;/div&gt;

          &lt;div class="form-row"&gt;
            &lt;textarea name="message" cols="30" rows="10"&gt;&lt;/textarea&gt;
          &lt;/div&gt;

          &lt;div class="form-row"&gt;
            &lt;div class="submitbtn"&gt;&lt;/div&gt;
          &lt;/div&gt;
        &lt;/form&gt;

        &lt;div class="form-row"&gt;
          &lt;div class="success-msg"&gt;&lt;/div&gt;
          &lt;div class="error-msg"&gt;&lt;/div&gt;
        &lt;/div&gt;

      </pre>
    </div>

    <div class="code" data="js">
      <pre class="prettyprint">
        $(document).ready(function(){
          $('.submitbtn').click(function(e){
            e.preventDefault();
            SubmitForm();
          })
        })


        //Form submission
        function SubmitForm() {
          let url = "../php/formSubmission.php"
          let form = $(".demo-form")
          let yourData = $(form).serialize()

          $.ajax({
            url: url,
            type: "POST",
            data: yourData,
            datatype: "json"
          })
            .done(function(data) {
              let parsed_data = JSON.parse(data)

              if (parsed_data["success"] != true) {
                $(".error-msg").append("&lt;p&gt" + parsed_data.msg + "&lt;/p&gt")
              } else {
                $(".success-msg").append("&lt;p&gt" + parsed_data.msg + "&lt;/p&gt")
              }
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
              console.log(errorThrown)
            })
        }

      </pre>
    </div>
  </div>
  
 
</div>