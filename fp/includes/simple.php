    <div class="box">
            <h3>Contact us</h3>
            <p>Get in touch with us </p>
            <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="POST" class="form" id="form">
                <div class="form">
                    <label for="name"></label>
                    <input type="text" name="Name" id="name" required placeholder="enter your name">       
                </div>

                <div class="form">
                    <label for="email"></label>
                    <input type="email" name="Email" id="email" required placeholder="enter your email">
                </div>

                <div class="form">
                        <label for="comments"></label>
                        <input type="text" name="Comments" id="comments" required placeholder="Comments.." style="height:200px">
                </div>
                <div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div> 
                <div class="form">
                    <button class="fas fa-paper-plane"></button>
                </div>
                
            </form>
            <script>
            $("#form").validate();
            </script>
    </div>