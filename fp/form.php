

<!-- <div class="box">
            <h3>Contact us</h3>
            <p>Get in touch with us</p>
            <form action="#" method="post" class="form">
                <div class="form">
                    <label for="name"></label>
                    <input type="text" name="name" id="name" required placeholder="enter your name">       
                </div>

                <div class="form">
                    <label for="email"></label>
                    <input type="email" name="email" id="email" required placeholder="enter your email">
                </div>

                <div class="form">
                        <label for="comments"></label>
                        <input type="text" name="comments" id="comments" required placeholder="Comments.." style="height:200px">
                    </div>

                <div class="form">
                    <button class="fas fa-paper-plane"></button>
                </div>
            </form>
        </div> -->







     
	<?php
        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "purvajg@gmail.com";  //place your/your client's email address here
        $toName = "Purva Dalvi"; //place your client's name here
        $website = "http://purdal1.dreamhosters.com/";  //place NAME of your client's website

        echo loadContact('includes/simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>