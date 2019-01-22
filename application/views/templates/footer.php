 </div>
        <!-- /#page-wrapper -->

    </div>

        <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><img style="width: 120px;" src="<?php echo base_url(); ?>assets/images/bulsu.png"></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="http://twitter.com" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="http://facebook.com" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
                        <a href="http://gmail.com" target="_blank" class="google"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2016 Copyright Text </p>
        </div>
    </footer>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>/dist/js/sb-admin-2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- Table -->
    <script src="<?php echo base_url(); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script src="<?php echo base_url(); ?>/dist/js/sb-admin-2.js"></script>

    <script src="<?php echo base_url(); ?>assets/scripts/script.js"></script>


    <script type="text/javascript"
      src="https://slideshow.triptracker.net/slide.js"></script>
    <script type="text/javascript">
    <!--
      var viewer = new PhotoViewer();
      viewer.setBackgroundColor('#ffffff');
      viewer.setBorderWidth(2);
      viewer.setFontSize(11);
      <?php foreach($images as $image) : ?>
        viewer.add('<?php echo base_url(); ?>assets/images/docu/<?php echo $image['name']; ?>');
      <?php endforeach; ?>
    //--></script>

    <!-- Add Author Angular -->
    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
     var counter=0;
        $scope.elements = [ {id:counter, value : ''} ];

        $scope.newItem = function(){
            counter++;
            $scope.elements.push(  { id:counter,value:''} );
            
        }
        
        $scope.show=function(elements)
        {
            alert(JSON.stringify(elements));
            
        }
      
    });
    </script>
    <!-- Add Author Angular End -->

    <!-- Donut Chart Result -->
    <script type="text/javascript">
        new Chart(document.getElementById("doughnut-chart-result"), {
            type: 'doughnut',
            data: {
              labels: [
                "Plagiarized",
                "Original"
              ],
              datasets: [
                {
                  label: "Results",
                  backgroundColor: [
                    "#D22835",
                    "#CDCDCD"
                  ],
                  data: [
                   "93",
                   "754"
                  ]
                }
              ]
            },
            options: {
              title: {
                /*display: true,
                text: 'Result'*/
              }
            }
        });
    </script>
    <!-- Donut Chart Result End -->

    <!-- autoload page view -->
    <script type="text/javascript">
      $(document).ready(function(){
        $('#notif').load('pages/activities');
        refresh();
      });

      function refresh(){
        setTimeout(function(){
          $('#notif').load('pages/activities');
          //$('#totalPageViews').load('pages/totalViews');
          refresh();
        }, 200);
      }
    </script>
    <!-- autoload page view end -->





    <!-- Double Click Research -->
    <script type="text/javascript">
         <?php foreach($researches as $research): ?>
            $("#<?php echo $research['id']; ?>").click(function(){
               window.location = "<?php echo site_url('/researches/'.$research['titleNoSpace']); ?>";
            });
        <?php endforeach; ?>
    </script>
    <!-- Double Click Research End -->

    <!-- Double Click College -->
    <script type="text/javascript">
        <?php foreach($colleges as $college): ?>
            $("#activeColleges<?php echo $college['college_id']; ?>").click(function(){
               window.location = "<?php echo site_url('/colleges/'.$college['college_initials']); ?>";
            });
        <?php endforeach; ?>
    </script>
    <!-- Double Click College End -->

    <!-- Check valid username -->
    <script type="text/javascript">
        $("#checkusername").keyup(function(){
           var mark = "0";
          <?php foreach($users as $user): ?>
            if ($("#checkusername").val() == "<?php echo $user['username']; ?>" ) {
              console.log("true "+$("#checkusername").val() +" "+  "<?php echo $user['username']; ?>");
              $("#usernamediv").attr('class', 'form-group has-error');
              $('#usernamelabel').attr('style','color:#E62600;');
              $("#saveBtn").attr('disabled', 'true');
              mark = "1";
            } 
            if ($("#checkusername").val() != "<?php echo $user['username']; ?>" && mark == "0") {
              console.log("false "+$("#checkusername").val() +" "+  "<?php echo $user['username']; ?>");
              $("#usernamediv").attr('class', 'form-group has-success');
              $("#usernamelabel").removeAttr('style');
              $("#saveBtn").removeAttr('disabled');
            }
            if($("#checkusername").val()==""){
              $("#usernamediv").attr('class', 'form-group');
              $("#usernamelabel").removeAttr('style');
              $("#saveBtn").removeAttr('disabled');
            }
         <?php endforeach; ?>
        });
    </script>
    <!-- Check valid username End -->

    <!-- Check valid college name-->
    <script type="text/javascript">
        $("#checkname").keyup(function(){
           var mark = "0";
          <?php foreach($colleges as $college): ?>
            if ($("#checkname").val() == "<?php echo $college['college_name']; ?>" ) {
              console.log("true "+$("#checkname").val() +" "+  "<?php echo $college['college_name']; ?>");
              $("#namediv").attr('class', 'form-group has-error');
              $('#namelabel').attr('style','color:#E62600;');
              $("#saveBtn").attr('disabled', 'true');
              mark = "1";
            } 
            if ($("#checkname").val() != "<?php echo $college['college_name']; ?>" && mark == "0") {
              console.log("false "+$("#checkname").val() +" "+  "<?php echo $college['college_name']; ?>");
              $("#namediv").attr('class', 'form-group has-success');
              $("#namelabel").removeAttr('style');
              $("#saveBtn").removeAttr('disabled');
            }
            if($("#checkname").val()==""){
              $("#namediv").attr('class', 'form-group');
              $("#namelabel").removeAttr('style');
              $("#saveBtn").removeAttr('disabled');
            }
         <?php endforeach; ?>
        });

        /*for college update*/
        $("#checkname2").keyup(function(){
           var mark = "0";
          <?php foreach($colleges as $college): ?>
            if ($("#checkname2").val() == "<?php echo $college['college_name']; ?>" ) {
              if($("#checkname2").val() != $("#colnameforupdate").html()){
                console.log("true "+$("#checkname2").val() +" "+  "<?php echo $college['college_name']; ?>");
                $("#namediv2").attr('class', 'form-group has-error');
                $('#namelabel2').attr('style','color:#E62600;');
                $("#saveBtn").attr('disabled', 'true');
                mark = "1";
              }
            } 
            if ($("#checkname2").val() != "<?php echo $college['college_name']; ?>" && mark == "0") {
              console.log("false "+$("#checkname2").val() +" "+  "<?php echo $college['college_name']; ?>");
              $("#namediv2").attr('class', 'form-group has-success');
              $("#namelabel2").removeAttr('style');
              $("#saveBtn").removeAttr('disabled');
            }
            if($("#checkname2").val()==""){
              $("#namediv2").attr('class', 'form-group');
              $("#namelabel2").removeAttr('style');
              $("#saveBtn").removeAttr('disabled');
            }
         <?php endforeach; ?>
        });
    </script>
    <!-- Check valid college name End -->

    <!-- add research college change -->
    <script type="text/javascript">
      $("#collegeSelect").change(function(){
        var college = trim($("#collegeSelect").val());
        var id = "";

        <?php foreach($colleges as $college): ?>
          if(trim("<?php echo $college['college_name']; ?>") == college){
            id = "<?php echo $college['college_id']; ?>";
          }
        <?php endforeach; ?>

        $('#courseSelect').empty();
        <?php foreach ($courses as $course): ?>
          if("<?php echo $course['college_id']; ?>" == id){
            $('#courseSelect').append('<option selected value="<?php echo $course['course_name']; ?>"><?php echo $course['course_name']; ?></option>');
          }
        <?php endforeach; ?>
      });

      $("#courseSelect").change(function(){
        var course = trim($("#courseSelect").val());
        var id = "";

        <?php foreach($courses as $course): ?>
          if(trim("<?php echo $course['course_name']; ?>") == course){
            id = "<?php echo $course['college_id']; ?>";
          }
        <?php endforeach; ?>

        $('#collegeSelect').empty();
        <?php foreach ($colleges as $college): ?>
          if("<?php echo $college['college_id']; ?>" == id){
            $('#collegeSelect').append('<option selected value="<?php echo $college['college_name']; ?>"><?php echo $college['college_name']; ?></option>');
          } else{
            $('#collegeSelect').append('<option value="<?php echo $college['college_name']; ?>"><?php echo $college['college_name']; ?></option>');
          }
        <?php endforeach; ?>
      });
    </script>
    <!-- add research college change end -->

    <!-- Image Choose -->
    <script type="text/javascript">
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('#blah').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
          }
      }

      $("#imgInp").change(function(){
          readURL(this);
      });
    </script>
    <!-- Image Choose End-->

    <!-- Line chart - visitors -->
    <script type="text/javascript">
      var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
                labels: [
                  <?php foreach($months as $month): ?>
                      "<?php echo $month; ?>",
                  <?php endforeach; ?>
                ],
                datasets: [{
                    label: "Monthly Visits",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [
                    <?php foreach($monthViews as $views): ?>
                      <?php echo $views; ?>,
                    <?php endforeach; ?>
                    ],
                }]
            },

            // Configuration options go here
            options: {}
        });
    </script>
    <!-- Line chart - visitors end -->

    <script type="text/javascript">
         /*Donut Chart - Dashboard*/
         new Chart(document.getElementById("doughnut-chart-research"), {
            type: 'doughnut',
            data: {
              labels: [
                <?php foreach($colleges as $college): ?>
                    "<?php echo $college['college_initials']; ?>",
                <?php endforeach; ?>
              ],
              datasets: [
                {
                  label: "College Total Researches",
                  backgroundColor: [
                    <?php foreach($colleges as $college): ?>
                        "<?php echo $college['color']; ?>",
                    <?php endforeach; ?>
                  ],
                  data: [
                    <?php foreach($colleges as $college): ?>
                        <?php echo $college['research_total']; ?>,
                    <?php endforeach; ?>
                  ]
                }
              ]
            },
            options: {
              title: {
                display: true,
                text: 'Researches'
              }
            }
        });

        new Chart(document.getElementById("doughnut-chart-journals"), {
            type: 'doughnut',
            data: {
              labels: [
                <?php foreach($colleges as $college): ?>
                    "<?php echo $college['college_initials']; ?>",
                <?php endforeach; ?>
              ],
              datasets: [
                {
                  label: "College Total Journals",
                  backgroundColor: [
                    <?php foreach($colleges as $college): ?>
                        "<?php echo $college['color']; ?>",
                    <?php endforeach; ?>
                  ],
                  data: [
                    <?php foreach($colleges as $college): ?>
                        <?php echo $college['journal_total']; ?>,
                    <?php endforeach; ?>
                  ]
                }
              ]
            },
            options: {
              title: {
                display: true,
                text: 'Journals'
              }
            }
        });
        /*Donut Chart - Dashboard*/
    </script>
</body>

</html>
