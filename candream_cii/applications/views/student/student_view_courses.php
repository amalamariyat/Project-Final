    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>STUDENT VIEW COURSES</h1>

	</center>

    <!-- card view starts here -->

<?php 
  $n=1; 
     foreach($course as $row)
         {?>
        <figure class="snip1559">
          <div class="profile-image"><img src="https://staticg.sportskeeda.com/editor/2021/06/dcc9c-16242127464594-800.jpg" alt="profile-sample2" /></div>
          <figcaption>
            <h3><?php echo $row['course_name']; ?></h3>
            <h5><?php echo $row['fees']; ?></h5>
            <p><?php echo $row['duration']; ?></p>
            <div class="icons"></a>
              <a href="checkEligibility?eligibility=<?php echo $row['eligiblity_id']; ?>">Check Eligibility</a>
            </div>
          </figcaption>
        </figure>

<?php  $n++;}
?>



    <!-- card view ends heree -->

                </div>
            </div>
        </div>
    </section>


<style type="text/css">
    
        @import url(https://fonts.googleapis.com/css?family=Lato);
@import url(https://fonts.googleapis.com/css?family=Oswald);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.snip1559 {
  font-family: 'Lato', Arial, sans-serif;
  position: relative;
  display: inline-block;
  overflow: hidden;
  margin: 10px;
  min-width: 250px;
  max-width: 310px;
  width: 100%;
  background-color: #ffffff;
  color: #2B2B2B;
  text-align: center;
  font-size: 16px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}

.snip1559 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.snip1559 .profile-image {
  padding: 15% 10% 0;
}

.snip1559 .profile-image img {
  max-width: 100%;
  vertical-align: top;
  position: relative;
  border-radius: 50%;
  max-width: 40%;
}

.snip1559 figcaption {
  padding: 5% 10% 15%;
}

.snip1559 h3 {
  font-family: 'Oswald';
  text-transform: uppercase;
  font-size: 20px;
  font-weight: 400;
  line-height: 24px;
  margin: 3px 0;
}

.snip1559 h5 {
  font-weight: 400;
  margin: 0;
  text-transform: uppercase;
  color: #888;
  letter-spacing: 1px;
}

.snip1559 .icons i {
  color: #999;
  display: inline-block;
  margin-right: 5px;
  font-size: 1.5em;
}

.snip1559 .icons i:hover {
  color: #555;
}

.snip1559 .icons i a {
  text-decoration: none;
}

</style>
<script type="text/javascript">
    
    /* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

</script>