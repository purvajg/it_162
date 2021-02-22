<?php include 'includes/header.php';?>  

<section>
<h2>Flexbox cheatsheet:</h2>
<img src="images/flex_1.png" class="tablet" alt="" media="all" />
<img src="images/flex_2.png" class="tablet" alt="" media="all" />
<img src="images/flex_3.png" class="tablet" alt="" media="all" />
<img src="images/flex_4.png" class="tablet" alt="" media="all" />
<img src="images/flex_5.png" class="tablet" alt="" media="all" />

<h2 class="pageID">Flexbox : </h3>
 <p>
 <ul>Properties of Parent :
    <li>display</li>
    <li>flex-direction</li>
    <li>flex-wrap</li>
    <li>flex-flow</li>
    <li>justify-content</li>
    <li>align-itemsp</li>
    <li>align-content</li>
    </ul>
</p>

<p>
<ul>Properties of Children :
    <li>order</li>
    <li>flex-grow</li>
    <li>flex-shrink</li>
    <li>flex-basis</li>
    <li>flex</li>
    <li>align-self</li>
</ul>
</p>

<p>
<ul>The two axis :
    <li>Main axis</li>
    <li>Cross axis</li>
</ul>
</p> 


<h2>Browser support chart for flexbox:</h2>
<img src="images/browser_support.png" class="tablet" alt="" media="all" />

<p></p>
<p></p>
<p></p>
<h3><u>You should consider using Flexbox when:</u></h3>
<p>
    <ul>
        <li>You have a small design to implement  : Flexbox is ideal when you have a small layout design to implement, with a few rows or a few columns</li>
        <li>You need to align elements : Flexbox is perfect for that, the only thing we should do is create a flex container using display: flex and then define the flex-direction that we want</li>
        <li>You need a content-first design  : Flexbox is the ideal layout system to create web pages if you don’t know exactly how your content is going to look, so if you want everything just to fit in, Flexbox is perfect for that.</li>
</ul>
</p>

<h3><u>CSS grid is better when:</u></h3>
<ul>
    <li>You have a complex design to implement</li>
    <li>You need to have a gap between block elements</li>
    <li>You need to overlap elements</li>
    <li>You need a layout-first design</li>
</ul>


<h3><u>Common values for flex:</u></h3>
<ul>
    <li><u>flex: 0 auto;</u>
    <p>This is the same as flex: initial; 
        and the shorthand for the default value: flex: 0 1 auto.
        It sizes the item based on its width/height properties (or its content if not set). 
        It makes the flex item inflexible when there is some free space left, but allows it to shrink to its minimum when there is not enough space. The alignment abilities or auto margins can be used to align flex items along the main axis.
    </p>
    </li>

    <li><u>flex: 0 auto;</u>
    <p>This is the same as flex: initial; 
        and the shorthand for the default value: flex: 0 1 auto.
        It sizes the item based on its width/height properties (or its content if not set). 
        It makes the flex item inflexible when there is some free space left, but allows it to shrink to its minimum when there is not enough space. The alignment abilities or auto margins can be used to align flex items along the main axis.
    </p>
    </li>

    <li><u>flex: auto; </u>
    <p>This is equivalent to flex: 1 1 auto. 
        This is not the default value. 
        It sizes the item based on its width/height properties, but makes it fully flexible so that they absorb any extra space along the main axis. 
        If all items are either flex: auto, flex: initial, or flex: none, any remaining space after the items have been sized will be distributed evenly to the items with flex: auto.
    </p>
    </li>

    <li><u>flex: none; </u>
    <p>This is equivalent to flex: 0 0 auto. 
        It sizes the item according to its width/height properties, but makes it fully inflexible. 
        This is similar to flex: initial except it is not allowed to shrink, even in an overflow situation.
    </p>
    </li>

    <li><u>flex:positive-number </u>
    <p>Equivalent to flex: 1 0px. 
        It makes the flex item flexible and sets the flex basis to zero, resulting in an item that receives the specified proportion of the remaining space. 
        If all items in the flex container use this pattern, their sizes will be proportional to the specified flex factor.
    </p>
    </li>
</ul>

 

<section>
 <h3>Research:</h3>
 <ul>
     <li>how do I use css flexbox <a href="https://www.google.com/search?q=how+do+I+use+css+flexbox&rlz=1C5CHFA_enUS872US872&oq=how+do+I+use+css+flexbox&aqs=chrome..69i57j0i22i30l2.21258j0j7&sourceid=chrome&ie=UTF-8
">https://www.google.com/search?q=how+do+I+use+css+flexbox&rlz=1C5CHFA_enUS872US872&oq=how+do+I+use+css+flexbox&aqs=chrome..69i57j0i22i30l2.21258j0j7&sourceid=chrome&ie=UTF-8
</a></li>
     <li>browser flexbox shim
<a href="https://www.google.com/search?q=browser+flexbox+shim&rlz=1C5CHFA_enUS872US872&oq=browser+flexbox+shim&aqs=chrome..69i57.1409j0j4&sourceid=chrome&ie=UTF-8
">https://www.google.com/search?q=browser+flexbox+shim&rlz=1C5CHFA_enUS872US872&oq=browser+flexbox+shim&aqs=chrome..69i57.1409j0j4&sourceid=chrome&ie=UTF-8
</a></li>
     <li>what is jquery sliders
     <a href="https://www.google.com/search?safe=active&rlz=1C5CHFA_enUS872US872&sxsrf=ALeKk01YaZ0DsKe9GBMxC3LmCqkRTzSIyw%3A1612917117747&ei=fSkjYKmdLc-X-gS5_KGgAQ&q=what+is+jquery+sliders&oq=what+is+jquery+sliders&gs_lcp=CgZwc3ktYWIQAzoFCAAQzQJQuTBYhjdgxkVoAHACeACAAWeIAbwEkgEDNy4xmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab&ved=0ahUKEwjpz-u-iN7uAhXPi54KHTl-CBQQ4dUDCA0&uact=5">https://www.google.com/search?safe=active&rlz=1C5CHFA_enUS872US872&sxsrf=ALeKk01YaZ0DsKe9GBMxC3LmCqkRTzSIyw%3A1612917117747&ei=fSkjYKmdLc-X-gS5_KGgAQ&q=what+is+jquery+sliders&oq=what+is+jquery+sliders&gs_lcp=CgZwc3ktYWIQAzoFCAAQzQJQuTBYhjdgxkVoAHACeACAAWeIAbwEkgEDNy4xmAEAoAEBqgEHZ3dzLXdpesABAQ&sclient=psy-ab&ved=0ahUKEwjpz-u-iN7uAhXPi54KHTl-CBQQ4dUDCA0&uact=5</a>       
</li>
     <li>flexbox css tricks
    <a href="https://www.google.com/search?q=flexbox+css+tricks&rlz=1C5CHFA_enUS872US872&oq=flexbox+&aqs=chrome.3.69i57j0i433l2j0l2j69i60l3.4646j0j7&sourceid=chrome&ie=UTF-8
">
</a>
</li>

</ul>
</section>

<section>
<h3>Gather:</h3>
<ol>

<li><a href="https://wpdatatables.com/css-image-gallery/
    ">https://wpdatatables.com/css-image-gallery/
    </a>
    <ul>
        <li>It also includes history, demos, patterns, and a browser support chart.</li>
        <li>Focuses on all the different possible properties for the parent element (the flex container) and the child elements (the flex items). Gives images of all the properties for a visual learning.</li>
    </ul>
</li>

<li><a href="https://blog.logrocket.com/flexbox-vs-css-grid/
    ">https://blog.logrocket.com/flexbox-vs-css-grid/
    </a>
    <ul>
        <li>When to use Flexbox and when to use CSS grid</li>
    </ul>
</li>

<li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox
    ">https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox
    </a>
    <ul>
        <li>Mozilla docs giving details about the flexBox properties</li>
    </ul>
</li>

<li><a href="https://torquemag.io/2020/02/flexbox-tutorial/
    ">https://torquemag.io/2020/02/flexbox-tutorial/
    </a>
    <ul>
        <li>Detailing of properties with visual examples</li>
    </ul>
</li>

<li><a href="https://css-tricks.com/using-flexbox/
    ">https://css-tricks.com/using-flexbox/
    </a>
    <ul>
        <li>Using Flexbox: Mixing Old and New for the Best Browser Support</li>
    </ul>
</li>

<li><a href="https://css-tricks.com/almanac/properties/f/flex/
    ">https://css-tricks.com/almanac/properties/f/flex/
    </a>
    <ul>
        <li>Gives tricks about common values used with flex</li>
    </ul>
</li>

<ol>
</section>
</section>

<!-- DIVIDER -->

<aside>
<h3>Citations:</h3>
<ul>
<li>Coyier, Chris. "A Complete Guide to Flexbox" for CSS tricks | Content on CSS. Dec 21, 2010.
</li>

<li>Maldonado, Leonardo. "When to use Flexbox and when to use CSS grid" for Log Rocket | Content on CSS. April 6, 2020.</li>
</ul>
</aside>
<?php include 'includes/footer.php';?>