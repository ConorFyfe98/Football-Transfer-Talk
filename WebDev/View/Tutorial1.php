<!doctype html>
<html lang="en">
<head>
  <?php include_once 'Template/head.php'; ?>
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>


</head>
<body>
 <!-- Header-->
 <?php include_once 'Template/header.php'; ?>

 <?php include_once 'Template/tutorialDropdown.php'; ?>

 <!--Columns-->
 <div class="container">
  <div class="row">
    
   <div class="col">
   </div>

   <div class="col-12">
    <h2>Week 1</h2>
    <hr>
    <p>Bootstrap is a mobile-first framework with a grid system featuring flexbox to create responsive layouts across all platforms. Layouts are created through a series of containers, rows and columns. The grid system features a twelve column system. Flexbox creates a layout with column widths automatically be sized equally. However columns with a wider width can be created using class .col-* and providing the columns width size between 1 and 12.The columns surrounding the wider column will automatically resize equally. PureCSS.io is another mobile-first framework that features a responsive grid system. PureCSS uses a two class system featuring grid classes and unit classes. Unit classes are a child element of the grid classes. The layout of the page is created by specifying fraction sizes for the unit grids. The use of fractions allow more accurate sizes, however Bootstraps column system provides enough accuracy and is simpler to use.</p>
    <p>Bootstrap menu system is an attractive option for creating a responsive navigation menu system within the site. Menus are very simple to implement by including the Bootstrap CDN links in the head of the file and using the classes and functions within the library to create the menu. Step by step documentation is available on the Bootstrap website. The layout of the burger menu is easy for users to understand and learn how to use. A hover function is available to display a list of links under an item in the menu, this is a useful feature for large websites with lots of information under the same category. </p>
    <p>Bootstrap has many features that make it an attractive framework for a web developer to use. One of those features are glyph icons, as these are not always free to be use. However, the creator of glyph icons has allowed the icons to be used for free in Bootstrap.</p>
    <p>Forms are a useful Bootstrap feature as they can be used to receive user input.  There is a large variety of form choice available. All of the forms have a layout that is easy for users to understand. Basic form features are available, however, additional features such as dropdowns, checkboxes, and file uploads are also available.</p>
    <p>Alerts are a Bootstrap feature that can be used to notify or provide feedback to users. If a user enters invalid data into a form, an alert is an effective feature that can be used to provide feedback. The alert feature will display a pop up message that can be used to advise the user of the correct data format.</p>
    <p>Badges are a useful feature of Bootstrap that can be used to attract the user’s attention towards a certain part of the website. Badges are a feature that can be used to highlight and encourage a user to visit a specific page of the website. Badges can be used to highlight that an event has happened such as new notifications or emails, without this feature the user may not realise.</p>
    <p>Breadcrumbs are one of bootstraps features that makes it possible to indicate the current page location within a navigational hierarchy on the website. This is a useful feature to display the page location the user is viewing. </p>
  </div>
  <div class="col">
  </div>
  
</div>
</div>

<!--Footer-->
<?php include_once 'Template/footer.php'; ?>

</body>
</html>