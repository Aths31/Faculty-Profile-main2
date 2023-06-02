<html>
 <head>
  <?php 
    @session_start();
  ?>
  <title>Faculty Publication Management </title>
  <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/util.css">
  <link rel="stylesheet" href="../../css/details_collection.css">
  </head>
  <body>
    <div class="tab">
      <button class="tablinks tanvitab" style="margin-right: 95px;" onclick="clickHandle(event, 'book_chapter')" id="defaultOpen">Book Chapter</button>
      <button class="tablinks tanvitab" style="margin-right: 95px;" onclick="clickHandle(event, 'patent1')">Patent</button>
      <button class="tablinks tanvitab" style="margin-right: 95px;" onclick="clickHandle(event, 'copyright1')">Copyright</button>
      <button class="tablinks tanvitab" style="margin-right: 95px;" onclick="clickHandle(event, 'book_publication')">Book Publication</button>
      <button class="tablinks tanvitab" style="margin-right: 95px;" onclick="clickHandle(event, 'journal1')">Journal</button>
      <button class="tablinks tanvitab" style="margin-right: 95px;" onclick="clickHandle(event, 'conference1')">Conference</button>
    </div>

  
    <div id="book_chapter" class="tabcontent tanvihead">
      <?php include ("show_book_chapter.php");?>
    </div>

    <div id="patent1" class="tabcontent tanvihead">
      <?php include ("show_patent.php");?>
    </div>

    <div id="copyright1" class="tabcontent tanvihead">
      <?php include ("show_copyright.php");?>
    </div>

    <div id="book_publication" class="tabcontent tanvihead" >
      <?php include ("show_book_publication.php");?>
    </div>

    <div id="journal1" class="tabcontent tanvihead">
      <?php include ("show_journal.php");?>
    </div>

    <div id="conference1" class="tabcontent tanvihead">
      <?php include ("show_conference.php");?>
    </div>

    <script>
      function clickHandle(evt, animalName) {
        let i, tabcontent, tablinks;

        // This is to clear the previous clicked content.
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }

        // Set the tab to be "active".
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Display the clicked tab and set it to active.
        document.getElementById(animalName).style.display = "block";
        evt.currentTarget.className += " active";
      }
      document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>