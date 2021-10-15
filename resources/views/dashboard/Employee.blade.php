<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>rpm-pm </title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="/css/index.css">
  <title>rpm-pm </title>
</head>
<body>
  <input type="checkbox" id="nav-toggle">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h1><span class="lab la-rpm-pm" ></span><span>rpm-pm</span></h1>
    </div>
    <div class="sidebar-menu">
       <Ul>
         <li><a href="dashboard" class="active"><span class="las la-clock"></span>
          <span>Realtime insights</span></a>
          </li>


            <li><a href="employee"><span class="las la-user-circle"></span>
              <span>Employee</span></a>
            </li>

            <li><a href="Attendance.html"><span class="las la-calendar-check"></span>
              <span>Attendace</span></a>
            </li>

            <li><a href="Team.html"><span class="las la-users"></span>
              <span>Team</span></a>
            </li>

            <li><a href="Screenshots.html"><span class="las la-image"></span>
              <span>Screenshots</span></a>
            </li>
            <li><a href="Apps.html"><span class="las la-desktop"></span>
              <span>Apps and Website</span></a>
            </li>
            <li><a href="Activities.html"><span class="las la-server"></span>
              <span>Activities</span></a>
            </li>
            <li><a href="Projects.html"><span class="las la-clipboard-list"></span>
              <span>Projects</span></a>
            </li>
            <li><a href="Settings.html"><span class="las la-tools"></span>
              <span>Settings</span></a>
            </li>
        </Ul>
    </div>
  </div>
     <div class="main-content">
          <header>
              <h1>
                <label for="nav-toggle">
                   <span class="las la-bars"></span>
                </label>
                EMPLOYEES
              </h1>
              <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here"/>
              </div>
              <div class="user-wrapper">
               <img src="Nairobi_Skyline.jpg" width="40px" height="40px" alt="">
              </div>
              <div>
                <h4>John Mururi</h4>
                <small>super Admin</small>
              </div>
          </header>
          <main>
            <div class="cards">
              <div class="card-single">
                <div>
                  <h1>54</h1>
                  <span>Number of Employee</span>
                </div>
                <div>
                  <span class="las la-users"></span>
                </div>
              </div>
              <div class="card-single">
                <div>
                  <h1>54</h1>
                  <span>Current Active</span>
                </div>
                <div>
                  <span class="las la-stopwatch"></span>
                </div>
              </div>
              <div class="card-single">
                <div>
                  <h1>74</h1>
                  <span>Current Unproductive</span>
                </div>
                <div>
                  <span class="las la-chart-line"></span>
                </div>
              </div>
              <div class="card-single">
                <div>
                  <h1>64</h1>
                  <span>productivity</span>
                </div>
                <div>
                  <span class="las la-users"></span>
                </div>
              </div>
            </div>


               <div>
                

                
               </div>





            <div class="recent-grid">
              <div class=projects>
                 <div class="card">
                   <div class="card-header">
                    
                    <a href="addEmployee"><span class="las la-save">add employee</span></a>
                    <button>See all <span class="las la-arrow-right"></span></button>
                   </div>
                     <div class="card-body">
                     <div class="table-responsive">
                        <table width="100%">
                          <thead>
                            <tr>
                              <td>Name</td>
                              <td>Department</td>
                              <td>Status</td>
                          
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($activities as $activity)
                            <td>{{$activity->name}}</td>
                            
                            @endforeach
                            <td> <span class="status purple"></span> Review
                            </td>
                           
                     </div>
                     </div>
                     <div class="card-body">
                         <div class="table-responsive">

                         </div>
                     </div>
                 </div>
              </div>
              
                <div class="Employee">
                  <div class="card">
                    <div class="card-header">
                       <h3>New Employee</h3>
                       <button>Sell all<span class="las la-arrow-right"></span></button>
                    </div>
                     <div class="card-body">
                         <div class="info">
                           <img src="Nairobi_Skyline.jpg" width="40px" height="40px" alt="">
                           <div>
                             <h4>james mwangi</h4>
                             <small>web design</small>
                           </div>
                         </div>
                         <div class="contact">
                           <span class="las la-user-circle"></span>
                           <span class="las la-comment"></span>
                           <span class="las la-phone"></span>
                         </div>
                     </div>
                     <div class="card-body">
                      <div class="info">
                        <img src="Nairobi_Skyline.jpg" width="40px" height="40px" alt="">
                        <div>
                          <h4>omondi mwangi</h4>
                          <small>UX design</small>
                        </div>
                      </div>
                      <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="info">
                      <img src="Nairobi_Skyline.jpg" width="40px" height="40px" alt="">
                      <div>
                        <h4>Mary  ngala</h4>
                        <small>Mobile app</small>
                      </div>
                    </div>
                    <div class="contact">
                      <span class="las la-user-circle"></span>
                      <span class="las la-comment"></span>
                      <span class="las la-phone"></span>
                    </div>
                </div>

                  </div>

                  </div>
                </div>
            </div> 
          </main>
     </div>
    </div>
  </div>
</header>
  </div>
  <script src="/js/app.js"></script>
</body>
</html>