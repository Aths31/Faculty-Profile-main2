<?php
	@session_start();
	if (isset($_SESSION['sdrn'])){
		$sdrn = $_SESSION['sdrn'];
	}
	$sdrn='811';
	// Database Connection 
	$conn = mysqli_connect("localhost", "root", "root","test");
	if ($conn->connect_error)  {
		die("Connection failed: " . $conn->connect_error);
	}

	// Fetching Faculty Name From SDRN 
	$sql = "SELECT CONCAT(First_name,' ',Last_name) FROM faculty WHERE Sdrn = '$sdrn' ";
	$query = mysqli_query($conn, $sql) or die("Query Unsuccessful");
	while ($row = mysqli_fetch_array($query)) {
		$faculty_name = $row[0];
	}


	$book_chapter=array();
	$book_publications=array();
	$patent=array();
	$conference=array();
	$copyright=array();
	$journal=array();
	$query = "SELECT COUNT(*) FROM book_chapter";	
    $result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = @mysqli_fetch_array($result)) {
				array_push($book_chapter,$row[0]);
			}
		}
    $query = "SELECT COUNT(*) FROM book_publication ";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = @mysqli_fetch_array($result)) {
				array_push($book_publications,$row[0]);
			}
		} 
    $query = "SELECT COUNT(*) FROM patent";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = @mysqli_fetch_array($result)) {
				array_push($patent,$row[0]);
			}
		} 	
    $query = "SELECT COUNT(*) FROM conference";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = @mysqli_fetch_array($result)) {
				array_push($conference,$row[0]);
			}
		} 
    $query = "SELECT COUNT(*) FROM copyright";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = @mysqli_fetch_array($result)) {
				array_push($copyright,$row[0]);
			}
		} 
    $query = "SELECT COUNT(*) FROM journal";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) > 0) {
			while ($row = @mysqli_fetch_array($result)) {
				array_push($journal,$row[0]);
			}
		} 
?>
<script>
	var ctx = document.getElementById('chart_faculty_details').getContext('2d');

	var book_chapter = [<?php echo join(',',$book_chapter); ?>];
	var book_publications = [<?php echo join(',',$book_publications); ?>];
	var patent = [<?php echo join(',',$patent); ?>];
	var conference = [<?php echo join(',',$conference); ?>];
	var copyright = [<?php echo join(',',$copyright); ?>];
	var journal = [<?php echo join(',',$journal); ?>];

	var myChart = new Chart(ctx, {
        type: 'doughnut',
    data: {
        labels: ["book_chapter", "book_publications","patent","conference","copyright","journal"],
        datasets: [
        {
            data: [book_chapter,book_publications,patent,conference,copyright,journal],
            backgroundColor: [
                "#003f5c",
                "#444e86",
               "#955196",
               "#dd5182",
               "#ff6e54",
               "#ffa600"
            ]
        }]
    },
    options: {
        title: {
            display: true,
            text: 'Publications'
        },
		responsive: true,
		maintainAspectRatio: true,
		legend: { position: 'right' },
		
	},
	});
 
</script>
<?php
$book_chapter=array();
$book_publications=array();
$patent=array();
$conference=array();
$copyright=array();
$journal=array();
$xaxis=array();
for($i=4; $i>=0; $i--){
$query = "SELECT COUNT(*),YEAR(now())-$i FROM book_chapter WHERE YEAR(publication_year)=YEAR(now())-$i";	
$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = @mysqli_fetch_array($result)) {
			array_push($book_chapter,$row[0]);
			array_push($xaxis,$row[1]);
		}
	}
}
for($i=4; $i>=0; $i--){
$query = "SELECT COUNT(*) FROM book_publication WHERE YEAR(year)=YEAR(now())-$i";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = @mysqli_fetch_array($result)) {
			array_push($book_publications,$row[0]);
		}
	} 
}
for($i=4; $i>=0; $i--){
$query = "SELECT COUNT(*) FROM patent WHERE YEAR(patent)=YEAR(now())-$i";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = @mysqli_fetch_array($result)) {
			array_push($patent,$row[0]);
		}
	} 
}
for($i=4; $i>=0; $i--){	
$query = "SELECT COUNT(*) FROM conference WHERE YEAR(con_date)=YEAR(now())-$i";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = @mysqli_fetch_array($result)) {
			array_push($conference,$row[0]);
		}
	} 
}
for($i=4; $i>=0; $i--){
$query = "SELECT COUNT(*) FROM copyright WHERE YEAR(reg_date)=YEAR(now())-$i";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = @mysqli_fetch_array($result)) {
			array_push($copyright,$row[0]);
		}
	} 
}
for($i=4; $i>=0; $i--){
$query = "SELECT COUNT(*) FROM journal WHERE YEAR(publication_date)=YEAR(now())-$i";
	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) > 0) {
		while ($row = @mysqli_fetch_array($result)) {
			array_push($journal,$row[0]);
		}
	} 
}
?>
<script>


var ctx = document.getElementById("chart_faculty_details_2").getContext('2d');
var book_chapter = [<?php echo join(',',$book_chapter); ?>];
	var book_publications = [<?php echo join(',',$book_publications); ?>];
	var patent = [<?php echo join(',',$patent); ?>];
	var conference = [<?php echo join(',',$conference); ?>];
	var copyright = [<?php echo join(',',$copyright); ?>];
	var journal = [<?php echo join(',',$journal); ?>];
	var xaxis = [<?php echo join(',',$xaxis); ?>];
	for(var i=0;i<xaxis.length;i++){
		xaxis[i]="YEAR: "+xaxis[i];
	}
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels:xaxis,
    datasets: [{
      label: 'Chapter',
      backgroundColor: "#caf270",
      data: book_chapter,
    }, {
      label: 'Publications',
      backgroundColor: "#45c490",
      data: book_publications,
    }, {
      label: 'Patent',
      backgroundColor: "#2aba95",
      data: patent,
    }, {
      label: 'Conference',
      backgroundColor: "#009897",
      data:conference,
    },{
      label: 'Copyright',
      backgroundColor: "#077687",
      data:copyright,
    },{
      label: 'Journal',
      backgroundColor: "#2e5468",
      data:journal,
    }],
  },
options: {
	title:{
		display:true,
		text:"Publication Past 5 years",
	},
    tooltips: {
      displayColors: true,
      callbacks:{
        mode: 'x',
      },
    },
    scales: {
      xAxes: [{
        stacked: true,
        gridLines: {
          display: false,
        }
      }],
      yAxes: [{
        stacked: true,
        ticks: {
          beginAtZero: true,
        },
        type: 'linear',
      }]
    },
    responsive: true,
    maintainAspectRatio: true,
    legend: { position: 'bottom' },
  }
});



</script>