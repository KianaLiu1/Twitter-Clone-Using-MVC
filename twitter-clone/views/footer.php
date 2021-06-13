<footer class="footer">
    
    <div class="container">
    
    <p>&copy; Kiana Liu 2021</p>
        
    </div>

</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="alert alert-danger" id="loginAlert"></div>
        <form>
            <input type="hidden" name="loginActive" id="loginActive" value="1">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" id="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
</form>
      </div>
      <div class="modal-footer">
          <a href="#" id="togglelogin">Sign up</a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="loginButton">Login</button>
      </div>
    </div>
  </div>
</div>

<script>

    $("#togglelogin").click(function(){
        if ($("#loginActive").val()=="1"){
            $("#loginActive").val("0");
            $("#loginModalTitle").html("Sign Up");
            $("#loginButton").html("Sign Up");
            $("#togglelogin").html("Login");
        } else {
            $("#loginActive").val("1");
            $("#loginModalTitle").html("Login");
            $("#loginButton").html("Login");
            $("#togglelogin").html("Sign Up");
        }
    })
    
    $("#loginButton").click(function(){
        $.ajax({
            type:"POST",
            url:"actions.php?action=loginSignup",           data:"email="+$("#email").val()+"&password="+$("#password").val()+"&loginActive="+$("#loginActive").val(),
            success:function(result) {
                if (result=="1"){
                    window.location.assign("http://kianaliuwebdeveloper.com/cwd/twitter-clone/");
                    
                } else {
                    $("#loginAlert").html(result).show();
                }
            }
        })
    })
    
    $(".toggleFollow").click(function(){
        
        var id = $(this).attr("data-userId")
        
        $.ajax({
            type:"POST",
            url:"actions.php?action=toggleFollow",          
            data:"userId="+id,
            success:function(result) {
                if (result == "1") {
                    $("a[data-userId='" + id + "']").html("Follow");
                } else {
                     $("a[data-userId='" + id + "']").html("Unfollow");
                }
            }
        })
    })
    
    $("#postTweetButton").click(function(){
        $.ajax({
            type:"POST",
            url:"actions.php?action=postTweet",          
            data:"tweetContent="+$("#tweetContent").val(),
            success:function(result) {
                if (result =="1"){
                    $("#tweetSuccess").show();
                    $("#tweetFail").hide();
                } else if (result != "") {
                    $("#tweetFail").html(result).show();
                    $("#tweetSuccess").hide();
                }
            }
        })
    })
    
</script>

  </body>
</html>