<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Wallet</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="assets/img/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('assets/css/wallet.css') }}">




</head>

<body>
  <div class="container">
    <div class="iphone">
      <div class="header">
        <div class="header-summary">
          <div class="summary-text">
            My Balance
          </div>
          <div class="summary-balance">
            &#8358; 293,00.00
          </div>
          <div class="summary-text-2">
            +&nbsp;280.00
          </div>
        </div>
        <div class="user-profile">
          <img src="{{ asset('storage/profile_pictures/' . Auth::user()->profile_picture) }}" class="user-photo">
        </div>
      </div>
      <div class="content">
        <div class="card">
          <div class="upper-row">
            <div class="card-item">
              <span>Active Balance</span>
              <span>1&nbsp;80,00.04 <span class="dollar">&#8358;</span>
            </div>
            <div class="card-item">
              <span>My Withdaw</span>
              <span>20,00.00 <span class="dollar">&#8358;</span>
            </div>
          </div>
          <div class="lower-row">
            <div class="icon-item">
              <div class="icon"><i class="fas fa-upload"></i></div>
              <div class="icon-text">Top-up</div>
            </div>
            <div class="icon-item">
              <div class="icon"><i class="fas fa-money-check-alt"></i></div>
              <div class="icon-text">Withdraw</div>
            </div>
            <div class="icon-item">
              <div class="icon"><i class="fal fa-paper-plane"></i></div>
              <div class="icon-text">Send</div>
            </div>
            <div class="icon-item">
              <div class="icon"><i class="fal fa-wallet"></i></div>
              <div class="icon-text">Pay</div>
            </div>
          </div>
        </div>
        <div class="transactions"><span class="t-desc">Recent Transactions</span>
          <div class="transaction">
            <div class="t-icon-container"><img src="https://99designs.ca/og-image.png?utm_source=google&utm_medium=cpc&utm_network=g&utm_creative=323294316363&utm_term=99designs&utm_placement=&utm_device=c&utm_campaign=CA%20-%2099designs%20Branded&utm_content=99designs%20-%20exact&gclid=Cj0KCQjw4qvlBRDiARIsAHme6ouhXyscC85e3wUS5loKQ1rgpHSs2IyrD4Z_DwuWQLNXgClEeEebi48aAujREALw_wcB" class="t-icon"></div>
            <div class="t-details">
              <div class="t-title">99 designs</div>
              <div class="t-time">03.45PM
              </div>
            </div>
            <div class="t-amount">+&nbsp;3,800&#8358;
            </div>
          </div>

          <div class="transaction">
            <div class="t-icon-container"><img src="https://www.paypalobjects.com/webstatic/icon/pp144.png" class="t-icon"></div>
            <div class="t-details">
              <div class="t-title">Paypal </div>
              <div class="t-time">03.45 AM
              </div>
            </div>
            <div class="t-amount">+&nbsp;2,000&#8358;
            </div>
          </div>

          <div class="transaction">
            <div class="t-icon-container"><img src="https://cdn.dribbble.com/assets/dribbble-ball-192-ec064e49e6f63d9a5fa911518781bee0c90688d052a038f8876ef0824f65eaf2.png" class="t-icon"></div>
            <div class="t-details">
              <div class="t-title">99 designs</div>
              <div class="t-time">08.00PM
              </div>
            </div>
            <div class="t-amount red">-&nbsp;120,00.00&#8358;
            </div>
          </div>
        </div>
      </div>
      <div class="drawer">
        <a href="{{ url('/homepage') }}" <div class="menu-btn"> <i class="fal fa-plus"></i>
      </div></a>
    </div>

  </div>
  </div>
</body>