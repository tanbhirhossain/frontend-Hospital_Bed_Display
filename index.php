<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hospital Bed Display</title>
      <!-- Include Bootstrap CSS -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/styles.css" />
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="#"> <img style="background-color: white; border-radius: 20px;" height="45" width="200" class="center-block image image-responsive" src="assets/image/logo.png"/></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#">Dashboard</a>
         </li>
        
      </ul>
   </div>
</nav>

      <div class="container">
         <h1 class="text-center mt-4"></h1>
         <p class="text-center">Bed display</p>
        
         <div id="accordion">
            <div class="card">
               <div class="card-header row floor" id="floor12">
               <div style="margin-left: -15px" class="col-12 col-sm-4">
                <h5 class="mb-0">
                    <button class="glow-on-hover" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                        12th Floor
                    </button>
                </h5>
            </div>
            <div class="col-1 col-md-1 col-xs-1 col-xs-1"></div>

                  <div class="col-12 col-md-7 col-xs-7 col-xs-7">
                     <div class="row">
                        <div class="col-6 col-md-3 seat-count-booked">
                           <div class="count-title">Booked: <span>10</span></div>
                        </div>
                        <div class="col-6 col-md-3 seat-count-occupied">
                           Occupied:  <span>10</span>
                        </div>
                        <div class="col-6 col-md-3 seat-count-willberelease">
                           Waiting :  <span>10</span>
                        </div>
                        <div class="col-6 col-md-3 seat-count-Available">
                           Available:  <span>10</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="collapse12" class="collapse" aria-labelledby="floor12" data-parent="#accordion">
                  <div class="card-body">
                     <h4 class="seat-type">Cabins:</h4>
                     <div class="row justify-content-center">
                        <!-- Example beds -->
                        <!-- Example beds -->
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin booked">
                              <p>1202</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin occupied">
                              <p>1205</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin will_be_release">
                              <p>1206</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin available">
                              <p>1207</p>
                           </div>
                        </a>
                     </div>
                     <h4 class="seat-type">Shared Cabins:</h4>
                     <div class="row justify-content-center">
                        <!-- Shared Cabin with two beds -->
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed booked shared">
                                 <p>1201-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed occupied shared">
                                 <p>1201-2</p>
                              </div>
                           </a>
                        </div>
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed will_be_release shared">
                                 <p>1203-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1203-2</p>
                              </div>
                           </a>
                        </div>
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1204-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1204-2</p>
                              </div>
                           </a>
                        </div>
                        <!-- Shared Cabin with one bed -->
                     </div>
                     <h4 class="seat-type">Wards:</h4>
                     <div class="row justify-content-center">
                        <!-- Example wards -->
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Add more floors and sections here as needed -->
         </div>
         <div id="accordion">
            <div class="card">
               <div class="card-header row floor" id="floor11">
                  <div style="margin-left: -15px" class="col-md-4 col-xs-4 col-lg-4">
                     <h5 class="mb-0">
                        <button class="glow-on-hover"  data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse12">
                        11th Floor
                        </button>
                     </h5>
                  </div>
                  <div class="col-1 col-md-1 col-xs-1 col-xs-1"></div>

                  <div class="col-12 col-md-7 col-xs-7 col-xs-7">
                     <div class="row">
                        <div class="col-6 col-md-3 seat-count-booked">
                           <div class="count-title">Booked: <span>10</span></div>
                        </div>
                        <div class="col-6 col-md-3 seat-count-occupied">
                           Occupied
                        </div>
                        <div class="col-6 col-md-3 seat-count-willberelease">
                           Waiting
                        </div>
                        <div class="col-6 col-md-3 seat-count-Available">
                           Available
                        </div>
                     </div>
                  </div>
               </div>
               <div id="collapse10" class="collapse" aria-labelledby="floor11" data-parent="#accordion">
                  <div class="card-body">
                     <h4 class="seat-type">Cabins:</h4>
                     <div class="row justify-content-center">
                        <!-- Example beds -->
                        <!-- Example beds -->
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin booked">
                              <p>1202</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin occupied">
                              <p>1205</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin will_be_release">
                              <p>1206</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin available">
                              <p>1207</p>
                           </div>
                        </a>
                     </div>
                     <h4 class="seat-type">Shared Cabins:</h4>
                     <div class="row justify-content-center">
                        <!-- Shared Cabin with two beds -->
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed booked shared">
                                 <p>1201-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed occupied shared">
                                 <p>1201-2</p>
                              </div>
                           </a>
                        </div>
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed will_be_release shared">
                                 <p>1203-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1203-2</p>
                              </div>
                           </a>
                        </div>
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1204-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1204-2</p>
                              </div>
                           </a>
                        </div>
                        <!-- Shared Cabin with one bed -->
                     </div>
                     <h4 class="seat-type">Wards:</h4>
                     <div class="row justify-content-center">
                        <!-- Example wards -->
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Add more floors and sections here as needed -->
         </div>
         <div id="accordion">
            <div class="card">
               <div class="card-header row floor" id="floor9">
                  <div style="margin-left: -15px" class="col-md-4 col-xs-4 col-lg-4">
                     <h5 class="mb-0">
                        <button class="glow-on-hover"  data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse12">
                        9th Floor
                        </button>
                     </h5>
                  </div>
                  <div class="col-1 col-md-1 col-xs-1 col-xs-1"></div>
                  <div class="col-12 col-md-7 col-xs-7 col-xs-7">
                     <div class="row">
                        <div class="col-6 col-md-3 seat-count-booked">
                           <div class="count-title">Booked: <span>10</span></div>
                        </div>
                        <div class="col-6 col-md-3 seat-count-occupied">
                           Occupied
                        </div>
                        <div class="col-6 col-md-3 seat-count-willberelease">
                            Waiting
                        </div>
                        <div class="col-6 col-md-3 seat-count-Available">
                           Available
                        </div>
                     </div>
                  </div>
               </div>
               <div id="collapse9" class="collapse" aria-labelledby="floor12" data-parent="#accordion">
                  <div class="card-body">
                     <h4 class="seat-type">Cabins:</h4>
                     <div class="row justify-content-center">
                        <!-- Example beds -->
                        <!-- Example beds -->
                        <a  href="#">
                           <div class="bed cabin booked">
                              <p>1202</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin occupied">
                              <p>1205</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin will_be_release">
                              <p>1206</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="bed cabin available">
                              <p>1207</p>
                           </div>
                        </a>
                     </div>
                     <h4 class="seat-type">Shared Cabins:</h4>
                     <div class="row justify-content-center">
                        <!-- Shared Cabin with two beds -->
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed booked shared">
                                 <p>1201-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed occupied shared">
                                 <p>1201-2</p>
                              </div>
                           </a>
                        </div>
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed will_be_release shared">
                                 <p>1203-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1203-2</p>
                              </div>
                           </a>
                        </div>
                        <div class="shared-cabin">
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1204-1</p>
                              </div>
                           </a>
                           <a href="#exampleModal" data-toggle="modal">
                              <div class="shared-bed available shared">
                                 <p>1204-2</p>
                              </div>
                           </a>
                        </div>
                        <!-- Shared Cabin with one bed -->
                     </div>
                     <h4 class="seat-type">Wards:</h4>
                     <div class="row justify-content-center">
                        <!-- Example wards -->
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed available shared">
                              <p>W-1</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed booked shared">
                              <p>W-2</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed will_be_release shared">
                              <p>W-3</p>
                           </div>
                        </a>
                        <a href="#exampleModal" data-toggle="modal">
                           <div class="shared-bed occupied shared">
                              <p>W-4</p>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Add more floors and sections here as needed -->
         </div>
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Patient Information</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <table class="table">
                        <tbody>
                           <tr>
                              <th>Under Doctor</th>
                              <td>Doctor Name</td>
                           </tr>
                           <tr>
                              <th>Status</th>
                              <td>Status Information</td>
                           </tr>
                           <tr>
                              <th>Patient Name</th>
                              <td>Patient's Name</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Include Bootstrap JavaScript and jQuery -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

      <script>
   // JavaScript to change navbar color on scroll
   window.addEventListener("scroll", function () {
      if (window.scrollY > 50) {
         document.querySelector(".navbar").classList.add("navbar-scrolled");
      } else {
         document.querySelector(".navbar").classList.remove("navbar-scrolled");
      }
   });
</script>

   </body>
</html>