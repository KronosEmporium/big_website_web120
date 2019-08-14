<?php include "includes/header.php";?>
        
<h2>Flexbox</h2>

<p>&emsp;The CSS Flexbox property is a relatively new functionality in CSS that simplifies designing flexible layouts for webpages. The Flexible Box Layout Module “makes it easier to design flexible responsive layout structure without using float or positioning.”1 By setting a container elements display property to flex, a bevy of properties, such as flex-direction, flex-flow, and flex-wrap, are made available. Using these rules one can easily implement a well-structured, rule-based layout in HTML and CSS. Using the flexbox order property, the elements in the flexible container can be arranged in the progression desired.2 This, coupled with the rules established for the box and the elements and container element can be used to create an easily adjusted layout.</p>

<p>&emsp;Flexbox is rapidly becoming a standard in web development layout design. It has been a candidate recommendation by the W3C since 2012, despite still being in “draft form”, meaning there are still changes and updates in the future before flexbox is considered complete. According to caniuse.com, all modern browsers have total support for the flexbox properties and tools, except for IE which only has partial support.3 This incomplete support can cause sites’ layouts to break if they rely heavily on flexbox or any unsupported features, frustrating both users and the developer. However, using a “shim” or “polyfill” library these non-supporting browsers can be made to support the necessary code. Technically, a shim is generally JavaScript code with its own API that creates functionality in a browser, usually to bring it up to HTML5 standards. A polyfill doesn’t need to be just JavaScript and can be any number of separate pieces to bring that functionality. Projects like Modernizr and specifically the flexibility library by Jonathantneal on Github4 bring outdated and unsupportive browsers into the modern age of HTML5 standardization using these shims and polyfills to do so.</p>
</section>

<aside><h2>Works Cited</h2>


<p>1“CSS Flexbox.” CSS Flexbox (Flexible Box), www.w3schools.com/css/css3_flexbox.asp.</p>

<p>2“A Complete Guide to Flexbox: CSS-Tricks.” CSS, css-tricks.com/snippets/css/a-guide-to-flexbox/.</p>

<p>3“Can I Use... Support Tables for HTML5, CSS3, Etc.” Can I Use... Support Tables for HTML5, CSS3, Etc, caniuse.com/#feat=flexbox.</p>

<p>4Jonathantneal. “Jonathantneal/Flexibility.” GitHub, 10 Aug. 2018, github.com/jonathantneal/flexibility.</p></aside>

<?php include "includes/footer.php";?>
