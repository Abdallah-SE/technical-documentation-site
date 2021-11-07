    <div>
        <hr style="margin: 28px;">
        <div style="text-align: center;"><p> © 2021  All Rights Reserved, Abdallah Mahmoud (SW Engineer)</p></div>
    </div>
    <script   src="js/mainapp.js"></script>
    <script   src="js/jquery-3.2.1.min.js"></script>   
    <script>
        $(".nav-item").click(
                function(event) {
                    $(".nav-item").removeClass('active');
                    $(event.target.parentNode).addClass('active');
                }
                        );
    </script>     
    </body>  
</html>