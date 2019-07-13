 <?php
        // put your code here
        session_start();
        $_SESSION['mail']= $_SESSION['mail'];
        $_SESSION['nameseller']=$_SESSION['nameseller'];
        ?>
<html>
    
    <body>
        <link rel="stylesheet" href="stylingsheet.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <center><p>please rate the customer !!!</p></center>
        
<div class="rating">
    
    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5">☆</label></span>
    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4">☆</label></span>
    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3">☆</label></span>
    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2">☆</label></span>
    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1">☆</label></span>
</div>
         <script>
            $(document).ready(function(){
    // Check Radio-box
    $(".rating input:radio").attr("checked", false);

    $('.rating input').click(function () {
        $(".rating span").removeClass('checked');
        $(this).parent().addClass('checked');
    });

    $('input:radio').change(
      function(){
        var userRating = this.value;
        alert(userRating);
        window.location="myphp1.php?msg="+userRating;
    }); 
});
        </script>
    </body>
</html>