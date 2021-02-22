<?php include("includes/config.php"); ?>
<?php include("includes/header.php"); ?>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-8">
      <h2>Flexbox Explained </h2>
      <img src="https://i1.wp.com/www.silocreativo.com/en/wp-content/uploads/2017/04/flexbox-cssgrid-practical-example.png?fit=666%2C370&quality=100&strip=all&ssl=1">
      <p>As pages needed to get more responsive in order to better serve the multitude of screen sizes in current use around the globe, it was realized that the current top down design scheme would need some flexibility. Two different standards have been put forward, Grid and Flexbox. We will be examining Flexbox in this paper.
         “The Flexbox Layout (Flexible Box) module (a W3C Candidate Recommendation as of October 2017) aims at providing a more efficient way to lay out, align and distribute space among items in a container, even when their size is unknown and/or dynamic (thus the word “flex”).”</p>
         <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Exemplos_de_Flexbox.png"><br>
         <p>“The main idea behind the flex layout is to give the container the ability to alter its items’ width/height (and order) to best fill the available space (mostly to accommodate to all kind of display devices and screen sizes). A flex container expands items to fill available free space or shrinks them to prevent overflow.”</p>
         <p>
             <oL>
                 <li>There should always be a flex container which will act as a parent element for all of the child flex items. </li>
                 <li>here should be a main axis of direction which boxes will flow into. This will be set with the flex-direction property. There are 4 values which lay out which way things will be laid out, row, column, row-reverse and column reverse.</li>
                 <li>Relating to B) there will also be a cross axis which depends upon the main axis. This determines which direction things will flex into after the current width or height has been exhausted.</li>
                 <li>Justify content is the next cool and important feature of flexbox. The idea is to change the alignment and direction of the flexed items. The properties are: flex-start, flex-end, center, space between, and space-around.</li><br><br>
            </ol>
         </p>
      <br>
      </div>
        <div class="col-sm-4">
    
      <h3>Resources & Citations:</h3>
        <cite>
        <ul>
            <li>        “A Complete Guide to Flexbox: CSS-Tricks.” CSS, 21 Dec. 2020,<br> <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">css-tricks.com/snippets/css/a-guide-to-flexbox/ </a></li>
            <li>Pillar, Miroslav. “A Comprehensive Guide to Flexbox.” Medium, Better Programming, 8 Apr. 2020, <br><a href="https://medium.com/better-programming/a-comprehensive-guide-to-flexbox-ca0ffdf770c6">medium.com/better-programming/a-comprehensive-guide-to-flexbox-ca0ffdf770c6</a> </li>
            <li>“Web Technology for Developers.” CSS: Cascading Style Sheets | MDN,<br> <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a></li>
    </ul>
    </cite>
    </div>
  </div>
</div>



<!-- Footer -->
<?php include("includes/footer.php"); ?>