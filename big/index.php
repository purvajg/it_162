
<?php include 'includes/header.php';?>  
<!-- START LEFT COL -->
<section>
<main role="main">
<body>   
    <main role ="main">
    <h2 class="pageID">Client Questionnaire</h3>
    
    <?php 
    include '../includes/contact_include.php'; #site keys & code here
    $toAddress = "purvajg@gmail.com";  #place your/your client's email address here
    $toName = "Purva Dalvi"; #place your client's name here
    $website = "http://purdal1.dreamhosters.com/";  #place NAME of your client's website

    echo loadContact('multiple.php');#a simple contact form
    ?> 

</section>
<!-- END LEFT COL -->


<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>

 <ol>
     <li><a href ="https://www.youtube.com/watch?v=dXQ7IHkTiMM&ab_channel=Figma">Figma</a></li>
     <li><a href ="https://delighted.com/blog/10-customer-experience-survey-design-tips">Client survey</a></li>
     <li><a href ="https://webflow.com/blog/the-web-design-process-in-7-simple-steps">Web design process</a></li>
 </ol>
 
</aside>
<!-- END RIGHT COL -->

</main>
</body>
<?php include 'includes/footer.php';?>