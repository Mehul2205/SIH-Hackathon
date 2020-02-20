<?php

  session_start();
  if(!isset($_SESSION['id']))
    header("Location:index1.php")

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Timetable</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
  <style type="text/css">
    .draggable-fac{
      z-index: 1000;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-2 shadow">
    <ul class="navbar-nav px-5">
      <li class="nav-item text-nowrap">
        <div id="class1" class="btn btn-outline-info draggable-class">208</div>
        <div id="class2" class="btn btn-outline-info draggable-class">209</div>
        <div id="class3" class="btn btn-outline-info draggable-class">210</div>
        <div id="class4" class="btn btn-outline-info draggable-class">211</div>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <ul class="nav flex-column" id="all_faculties">
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
      </ul>

      <main role="main" class="col-md-12 ml-sm-auto col-lg-11 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">&nbsp;&nbsp;</th>
                <th scope="col">8:00-9:00 A.M.</th>
                <th scope="col">9:00-10:00 A.M.</th>
                <th scope="col">10:00-11:00 A.M.</th>
                <th scope="col">11:00-12:00 A.M.</th>
                <th scope="col">12:00-1:00 P.M.</th>
                <th scope="col">1:00-2:00 P.M.</th>
                <th scope="col">2:00-3:00 P.M.</th>
                <th scope="col">3:00-4:00 P.M.</th>
                <th scope="col">4:00-5:00 P.M.</th>
                <th scope="col">5:00-6:00 P.M.</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Mon</th>
                <td>
                  <div id="slot-1-1" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-2" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-3" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-4" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-5" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-6" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-7" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-8" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-9" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-1-10" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">Mon</th>
                <td>
                  <div id="slot-2-1" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-2" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-3" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-4" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-5" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-6" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-7" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-8" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-9" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-2-10" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">Mon</th>
                <td>
                  <div id="slot-3-1" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-2" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-3" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-4" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-5" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-6" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-7" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-8" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-9" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-3-10" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">Mon</th>
                <td>
                  <div id="slot-4-1" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-2" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-3" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-4" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-5" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-6" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-7" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-8" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-9" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-4-10" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">Mon</th>
                <td>
                  <div id="slot-5-1" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-2" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-3" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-4" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-5" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-6" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-7" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-8" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-9" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
                <td>
                  <div id="slot-5-10" class="card">
                    <h5 class="card-header primary-color white-text droppable-fac">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                    <div class="card-body">
                      <p class="card-text droppable-class">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"></script>      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

      <!-- Icons -->
      <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
      <script>
        feather.replace()
      </script>

      <!-- Graphs -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
      <script
      src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
      integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
      crossorigin="anonymous"></script>

      <script type="text/javascript" src="main.js"></script>
    </body>
    </html>
