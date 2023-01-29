<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
<link rel="manifest" href="assets/img/site.webmanifest">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
  <div class="container">
    <aside>
      <div class="top">
        <div class="logo">
          <img src="assets/img/favicon.png" alt="logo">
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">close</span>
        </div>
      </div>

      <div class="sidebar">
        <a href="" class="active">
          <span class="material-icons-sharp">home</span>
          <h3>Home</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">
            person
          </span>
          <h3>Profile</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">
            splitscreen
          </span>
          <h3>Task</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">
            task
          </span>
          <h3>Completed</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">
            mark_email_unread
          </span>
          <h3>Message</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">
            account_balance_wallet
          </span>
           <h3> Wallet</h3>
        </a>
        <a href="">
          <span class="material-icons-sharp">
            logout
          </span>
          <h3>Logout</h3>
        </a>
      </div>
    </aside>
    <!---End of aside-->
    <main>
      @if(Auth::check())
      <h1 id="greeting">Hello, {{ Auth::user()->tiktok_username }}! 😊</h1>
     @endif
      <div class="insights">
        <div class="sales">
          <span class="material-icons-sharp">splitscreen</span>
          <div class="middle">
            <div class="left">
              <h3>7 Tasks</h3>
              <h1>Pending</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="28" cy="28" r="26"></circle>
              </svg>
              <div class="number">
                <p>93%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Pending Tasks</small>
        </div>
        <!--End Of Pending Tasks-->
        <div class="expenses">
          <span class="material-icons-sharp">splitscreen</span>
          <div class="middle">
            <div class="left">
              <h3>12 Tasks</h3>
              <h1>Available</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="28" cy="28" r="26"></circle>
              </svg>
              <div class="number">
                <p>88%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Available Tasks</small>
        </div>
        <!--End Of Available Tasks-->
        <div class="income">
          <span class="material-icons-sharp">task</span>
          <div class="middle">
            <div class="left">
              <h3>10 Tasks</h3>
              <h1>Completed</h1>
            </div>
            <div class="progress">
              <svg>
                <circle cx="28" cy="28" r="26"></circle>
              </svg>
              <div class="number">
                <p>90%</p>
              </div>
            </div>
          </div>
          <small class="text-muted">Completed Tasks</small>
        </div>
        <!--End Of Completed Tasks-->
      </div>
      <!--End Of Insights -->
      <div class="recent-orders">
        <h2 class="h2">Content Link</h2>
        <table>
          <thead>
            <tr>
              <th>Social Media</th>
              <th>Links</th>
              <th>Task Code</th>
              <th>Action</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="assets/img/3d-fluency-tiktok-logo.png" class="table-image"></td>
              <td><input type="text" id="input-field" class="move-right" placeholder="TikTok" required></td>
              <td><input type="text" id="input-field" class="move-rights" placeholder="Enter Code" required></td>
              <form>
                <td><input type="submit" value="Submit" class="btn"></td>
              </form>
              <td class="success">Status</td>
              <td><a href="#">More</a></td>
            </tr>
            <!--End of tiktok link-->
            <tr>
              <td><img src="assets/img/3d-plastilina-three-quarter-view-of-a-square-pink-instagram-logo.png"
                  class="table-image"></td>
              <td><input type="text" id="input-field" class="move-right" placeholder="Instagram" required></td>
              <td><input type="text" id="input-field" class="move-rights" placeholder="Enter Code" required></td>
              <form>
                <td><input type="submit" value="Submit" class="btn"></td>
              </form>
              <td class="success">Status</td>
              <td><a href="#">More</a></td>
            </tr>
            <!--End of instagram link-->
            <tr>
              <br>
              <td><img src="assets/img/3d-fluency-youtube-logo.png" class="table-image"></td>
              <td><input type="text" id="input-field" class="move-right" placeholder="Youtube" required></td>
              <td><input type="text" id="input-field" class="move-rights" placeholder="Enter Code" required></td>
              <form>
                <td><input type="submit" value="Submit" class="btn"></td>
              </form>
              <td class="success">Status</td>
              <td><a href="#">More</a></td>
            </tr>
            <!--End of youtube link-->
            <tr>
              <td><img src="assets/img/3d-plastilina-purple-square-facebook-logo.png" class="table-image"></td>
              <td><input type="text" id="input-field" class="move-right" placeholder="Facebook" required></td>
              <td><input type="text" id="input-field" class="move-rights" placeholder="Enter Code" required></td>
              <form>
                <td><input type="submit" value="Submit" class="btn"></td>
              </form>
              <td class="success">Status</td>
              <td><a href="#">More</a></td>
            </tr>
            <!--End of facebook link-->
            <tr>
              <td><img src="assets/img/3d-fluency-link.png" class="table-image"></td>
              <td><input type="text" id="input-field" class="move-right" placeholder="Web Link" required></td>
              <td><input type="text" id="input-field" class="move-rights" placeholder="Enter Code" required></td>
              <form>
                <td><input type="submit" value="Submit" class="btn"></td>
              </form>
              <td class="success">Status</td>
              <td><a href="#">More</a></td>
            </tr>
            <!--End of other link-->
          </tbody>
        </table>
        <!--End of table-->
        <a href="#">Show All</a>
      </div>
    </main>
    <!--End of Main-->
      
  <div class="right">
    <div class="top">
      <button id="menu-btn">
        <span class="material-icons-sharp">menu</span>
      </button>
      <div class="theme-toggler">
        <span class="material-icons-sharp active">light_mode</span>
        <span class="material-icons-sharp">dark_mode</span>
      </div>
      <div class="profile">
        <div class="info">
          <p>@if(Auth::check())
      <b id="greeting">{{ Auth::user()->tiktok_username }}
         @endif</b></p>
        </div>
        <div class="profile-photo">
          <img src="assets/img/Ellipse 1.png">
        </div>
        <br>
      </div>
    </div>
    <!--End of Top-->
    <div class="recent-updates">
          <h1>Recent Updates</h1>
          <div class="updates">
            <div class="update">
              <div class="profile-photo">
                <img src="assets/img/images (1).jpg" alt="">
              </div>
              <div class="message">
                <p><b>Admin:</b> Task 0271 has been Approved</p>
                <small class="text-muted">2 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="assets/img/profile2.jpg" alt="">
              </div>
              <div class="message">
                <p><b>Admin:</b> Task 0201 is Pending</p>
                <small class="text-muted">2 Minutes Ago</small>
              </div>
            </div>
            <div class="update">
              <div class="profile-photo">
                <img src="assets/img/Darmy DC.jpg" alt="">
              </div>
              <div class="message">
                <p><b>Admin:</b> Task 8271 has been approved</p>
                <small class="text-muted">2 Minutes Ago</small>
              </div>
            </div>
          </div>
       </div>
       <!--End Of Recent Updates---->
 
       <div class="sales-analytics">
        <h2>Posts Analytics</h2>
        <div class="item online">
          <div class="icon">
          <span class="material-icons-sharp">verified</span>
        </div>
        <div class="right">
          <div class="info">
            <h3>APPROVED UPLOADS</h3>
            <small class="text-muted">Last 24 Hours</small>
          </div>
          <h5 class="success">+80%</h5>
          <h3>309</h3>
        </div>
       </div>
       <div class="item offline">
        <div class="icon">
        <span class="material-icons-sharp">pending_actions</span>
      </div>
      <div class="right">
        <div class="info">
          <h3>PENDING UPLOADS</h3>
          <small class="text-muted">Last 24 Hours</small>
        </div>
        <h5 class="warning">+19%</h5>
        <h3>309</h3>
      </div>
     </div>
     <div class="item customers">
      <div class="icon">
      <span class="material-icons-sharp">block</span>
    </div>
    <div class="right">
      <div class="info">
        <h3>CANCLED UPLOADS</h3>
        <small class="text-muted">Last 24 Hours</small>
      </div>
      <h5 class="danger">+1%</h5>
      <h3>309</h3>
           </div>
         </div>
       </div>
    </div>
  </div>

  <script src="{{ asset('assets/js/index.js') }}"></script>
</body>
</html>