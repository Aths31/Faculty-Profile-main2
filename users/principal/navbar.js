navbar = () => {
  document.querySelector(".dashboard").innerHTML = `<nav class="nav_dashboard">  
    <span style="font-size:40px;cursor:pointer;margin: 10px;" onclick="closeNav()">&times;</span><!--cross icon-->
          <div class="nav_img" style="text-align:center;margin: 20px 0px;">
            <img src="../../include/images/logo.png" style="width:60px"/>
          </div>
          <div>
              <ul>
                <li><a href="home.php" id="home">Home</a></li>
                <!-- <li><a href="#" onclick=profile(); id="profile">Profile</a></li> -->
                <li class="sub_menu"><h3><i class="fa fa-book"></i>&nbsp;Publications&nbsp;<div class='fa fa-caret-down right'></div></h3>
                  <ul>
                    <li><a href="chapter.php">Book Chapter</a></li>
                    <li><a href="publication.php" >Book Publications</a></li> 
                    <li><a href="patent.php">Patent</a></li> 
                    <li><a href="copyright.php">Copyright</a></li>
                    <li><a href="journal.php">Journal</a></li> 
                    <li><a href="conference.php">Conference</a></li>
                  </ul>  
                </li>  
           </ul>
          </div>
  </nav>`;
};
header = () => {
  document.querySelector(".dashboard_container").innerHTML = `<div class="dashboard_header">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span><!--hamburger icon-->
  <h2>Dashboard</h2>
</div>`
}
function openNav() {
  const mediaQuery = window.matchMedia("(max-width:100vw)");
  if (mediaQuery.matches) {
    document.querySelector('.nav_dashboard').style.width = "250px";
  }
}

function closeNav() {
  const mediaQuery = window.matchMedia("(max-width:100vw)");
  if (mediaQuery.matches) {
    document.querySelector(".nav_dashboard").style.width = "0";
    document.querySelector(".dashboard_container").style.marginLeft = "0";
    document.querySelector(".dashboard_container").style.width = "100vw";
  }
}
