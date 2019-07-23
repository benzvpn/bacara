<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>เว็บสูตร บาคาร่า</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id"
content="948989893595-bcbuipg8k26s5djlrt7nkikqs40ov87o.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>



<!-- Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>


<link href="css/my-baccarat-demo.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
<!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<link type="text/css" rel="stylesheet" href="css/slick.css" />
<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">




</head>
<body>


<div class="background-warpper">


</div> <!-- background-warpper -->

<div class="my-menu blockstyle">
  <div class="brand-primary">
    <img src="src/images/logo-de6d8af1.png" alt="">
  </div>
  <ul>
    <li class="nav-item active">
      <a class="nav-link" href="#"><i class="fas fa-money-bill-wave"></i> สูตรบาคาร่า<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"> <i class="fas fa-money-bill-wave"></i> สูตรเสือมังกร</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-money-bill-wave"></i> ติดต่อเรา</a>
    </li>
  </ul>
</div>
<div class="container">
  <div class="banner-area">
    <div class="area-img">
      <img src="src/images/ufa356.gif">
    </div>
    <div class="area-img">
      <img src="src/images/ufa007.gif">
    </div>
    <div class="area-img">
      <img src="src/images/ufabet123.gif">
    </div>
  </div>
</div>


<div class="container">
  <div class="main-content">
    <div class="row">
      <div class="col-12 col-lg-3">
        <div class="row" >
          <div class="col-12 col-sm-12">

                <?php
                 if(!empty($_SESSION["username"]))
                 {
                   ?>
                   <form action="logout2.php" onsubmit="return signOut()" class="login-form after-login blockstyle">
                    <div class="user-image">
                      <img src="src/images/Blank-Profile.png" alt="">
                    </div>
                    <label for="uname"><b>ผู้ใช้งาน :</b></label>
                    <label for="uname"><b><?php echo $_SESSION["username"];?></b></label><br/>
                    <label for="uname"><b>เครดิตคงเหลือ : </b></label>
                    <label for="uname"><b><div id="content"></div></b></label><br/>
                    <label for="uname"><b>อายุการใช้งาน : </b></label>
                    <label for="uname"><b>
                    <?php

                    date_default_timezone_set('Asia/Bangkok');
                    $current_date = date("Y-m-d");
                    $set_end = $_SESSION['end_date'];

                    $new_set_start = $_SESSION['end_date'];

                    $nset_end = str_replace('/', '-', $set_end );
                    $nset_end = date("Y-m-d", strtotime($nset_end));

                    $ts1 = strtotime($current_date);
                    $ts2 = strtotime($nset_end);

                    $set_datediff = $ts2 - $ts1;
                    $set_datediff =   floor($set_datediff/3600/24);
                    if ($set_datediff <=0) {
                      $set_datediff = 0;
                    }
                    echo $set_datediff;
                    ?> วัน </b></label><br/>
                      <button type="button" class="btn-submit btn-gold" data-toggle="modal" data-target="#editprofile">
                        <span>แก้ไขโปรไฟล์</span>
                      </button>
                      <button type="submit" class="btn-submit btn-gold" onclick="return signOut();"><span>ออกจากระบบ</span></button>
                        <a href="javascript:void(0);" onclick="signOut();">Sign out</a>   
                   <!--        <button type="button" onclick="signOut();" class="btn-submit btn-gold"><span>ออกจากระบบ</span></button> -->
                  </form>
                  <?php
                 }
                 else
                 {
                   ?>
                   <form action="login_user.php" method ="post" id="fm_login" class="login-form blockstyle">
                    <div class="container">
                      <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Username" name="username" id="login_username" required>
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Password" name="password" id="login_password" required>
                       <input type="hidden" placeholder="login_facebook" name="login_facebook" id="login_facebook" required>
                      <!--<button type="submit">Register</button> -->
                      <button type="submit" class="btn-submit btn-gold"><span>เข้าสู่ระบบ</span></button>
                      <button type="button" class="btn-submit btn-gold" data-toggle="modal" data-target="#modalRegister">
                        <span>สมัครสมาชิก</span>
                  
       
                      </button>
                        <a href="javascript:void(0);" onclick="signOut();">Sign out</a>   
<!-- 
                     <div style="margin-top:5px" class="fb-login-button" data-width="200" data-size="medium" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="false"></div>
                          -->
                          <div style="margin:7px;background-color : #4365ac;width: '98%';height: 30px" >
                           <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">เข้าสู่ระบบด้วย Facebook
                          </fb:login-button>
                           </div> 
<!-- 
                           <input style="margin-top:5px;background-color : #4e71ba;color: #FFFFFF;" value="เข้าสู่ระบบด้วย Facebook" type="button" value="clickme" onclick="checkLoginState();" />


<!--  --> 
<!--  -->
                      <div class="g-signin2" data-onsuccess="onSignIn" data-theme="light"></div>

                        <div style="margin:7px;background-color : #ffffff;width: '98%';height: 30px" >
                        <button style="margin-top:3px;background-color : #ffffff;color: #000000;font-size: 12px" 
                         type="button"  onclick="logInGoogle();"> 
                        เข้าสู่ระบบด้วย <font color="#4285F4">G</font><font color="#DB4437">o</font><font color="#F4B400">o</font><font color="#4285F4">g</font><font color="#0F9D58">l</font><font color="#DB4437">e</font>
                        </button>
                        </div> 
                                     
                                      <div style="display:none">
                          <div class="g-signin2" data-onsuccess="onSignIn" data-theme="light"></div>
                        </div>
                 
                    </div>

                  </form>
                  <?php
                 }
                ?>

          </div>
          <div class="col-12">
            <div class="block-poster">
              <img src="src/images/ufabet168300x300.gif">
            </div>
            <div class="block-poster">
              <img src="src/images/ufabet369v2300x300.gif">
            </div>
          </div>


        </div>

      </div>
      <div class="col-12 col-lg-6">
        <div class="show-table blockstyle">
          <div class="title">
            สูตรบาคาร่า
          </div>
          <div class="show-table-content">
            <ul class="promotion-items">
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc1"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc2"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc3"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc4"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc5"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc6"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc7"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc8"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc9"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc10"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc11"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc12"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc13"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc14"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc15"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc16"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc17"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc18"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc19"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc20"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc21"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc22"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc23"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc24"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc25"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc26"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc27"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc28"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc29"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc30"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc31"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc32"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc33"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc34"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc35"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc36"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc37"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc38"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc39"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc40"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc41"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc42"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc43"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc44"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc45"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc46"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc47"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc48"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc49"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc50"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc51"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc52"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc53"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc54"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc55"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc56"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc57"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc58"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc59"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc60"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc61"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc62"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc63"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc64"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc65"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc66"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc67"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc68"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc69"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc70"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc71"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc72"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc73"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc74"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc75"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc76"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc77"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc78"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc79"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc80"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc81"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc82"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc83"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc84"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>
              <li class="items">
                <table>
                  <tbody>
                    <tr>
                      <td><span id="bc85"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc86"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc87"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc88"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc89"></span></td>
                    </tr>
                    <tr>
                      <td><span id="bc90"></span></td>
                    </tr>
                  </tbody>
                </table>
              </li>

            </ul>
            <!-- <table>
              <tbody>
                <tr>
                  <td><span id="bc1"></span></td>
                  <td><span id="bc7"></span></td>
                  <td><span id="bc13"></span></td>
                  <td><span id="bc19"></span></td>
                  <td><span id="bc25"></span></td>
                  <td><span id="bc31"></span></td>
                  <td><span id="bc37"></span></td>
                  <td><span id="bc43"></span></td>
                  <td><span id="bc49"></span></td>
                  <td><span id="bc55"></span></td>
                  <td><span id="bc61"></span></td>
                  <td><span id="bc67"></span></td>

                </tr>
                <tr>
                  <td><span id="bc2"></span></td>
                  <td><span id="bc8"></span></td>
                  <td><span id="bc14"></span></td>
                  <td><span id="bc20"></span></td>
                  <td><span id="bc26"></span></td>
                  <td><span id="bc32"></span></td>
                  <td><span id="bc38"></span></td>
                  <td><span id="bc44"></span></td>
                  <td><span id="bc50"></span></td>
                  <td><span id="bc56"></span></td>
                  <td><span id="bc62"></span></td>
                  <td><span id="bc68"></span></td>


                </tr>
                <tr>
                  <td><span id="bc3"></span></td>
                  <td><span id="bc9"></span></td>
                  <td><span id="bc15"></span></td>
                  <td><span id="bc21"></span></td>
                  <td><span id="bc27"></span></td>
                  <td><span id="bc33"></span></td>
                  <td><span id="bc39"></span></td>
                  <td><span id="bc45"></span></td>
                  <td><span id="bc51"></span></td>
                  <td><span id="bc57"></span></td>
                  <td><span id="bc63"></span></td>
                  <td><span id="bc69"></span></td>

                </tr>
                <tr>
                  <td><span id="bc4"></span></td>
                  <td><span id="bc10"></span></td>
                  <td><span id="bc16"></span></td>
                  <td><span id="bc22"></span></td>
                  <td><span id="bc28"></span></td>
                  <td><span id="bc34"></span></td>
                  <td><span id="bc40"></span></td>
                  <td><span id="bc46"></span></td>
                  <td><span id="bc52"></span></td>
                  <td><span id="bc58"></span></td>
                  <td><span id="bc64"></span></td>
                  <td><span id="bc70"></span></td>

                </tr>
                <tr>
                  <td><span id="bc5"></span></td>
                  <td><span id="bc11"></span></td>
                  <td><span id="bc17"></span></td>
                  <td><span id="bc23"></span></td>
                  <td><span id="bc29"></span></td>
                  <td><span id="bc35"></span></td>
                  <td><span id="bc41"></span></td>
                  <td><span id="bc47"></span></td>
                  <td><span id="bc53"></span></td>
                  <td><span id="bc59"></span></td>
                  <td><span id="bc65"></span></td>
                  <td><span id="bc71"></span></td>

                </tr>
                <tr>
                  <td><span id="bc6"></span></td>
                  <td><span id="bc12"></span></td>
                  <td><span id="bc18"></span></td>
                  <td><span id="bc24"></span></td>
                  <td><span id="bc30"></span></td>
                  <td><span id="bc36"></span></td>
                  <td><span id="bc42"></span></td>
                  <td><span id="bc48"></span></td>
                  <td><span id="bc54"></span></td>
                  <td><span id="bc60"></span></td>
                  <td><span id="bc66"></span></td>
                  <td><span id="bc72"></span></td>


                </tr>

              </tbody>
            </table> -->
          </div>
        </div> <!-- show-table -->
        <div class="action-warpper">
          <div class="row">
            <div class="col-12 col-sm-12">

              <div class="program-block blockstyle">
                <div class="show-round">
                  <input type="text" class="form-control" readonly="readonly" id="round-play" value="ตาที่ 1" autocomplete='off'>
                </div>
                <div class="show-result">
                  <input type="text" class="form-control" readonly="readonly" id="predict" value="รอสูตรคำนวนผล..." autocomplete='off'>


                </div>
<!-- include('./manually_update_credit.php'); -->
                <div class="row" style="text-align: center;">
                  <div class="col-4">
                    <?php

                    if(!empty($_SESSION["username"])) {
                        if ($set_datediff <= 0) {
                        ?>
                          <button class="pickrefill" onclick="pleaseRefill()">
                            <img src="src/images/Blue.png">
                            <span class="show-text">
                              Player
                            </span>
                          </button>
                      <?php  
                        } else {
                        ?>
                        <button id="pickplayer" onclick="clickPlayer()">
                          <img src="src/images/Blue.png">
                          <span class="show-text">
                          Player
                        </span>
                        </button>
                      <?php  
                        }
                      ?> 
                   
                    <?php
                    } else {
                    ?>
                       <button class="picklogin" onclick="pleaseLogin()">
                        <img src="src/images/Blue.png">
                        <span class="show-text">
                          Player
                        </span>
                      </button>
                    <?php
                    }
                    ?>

                  </div>
                  <div class="col-4" style="text-align: center;">
                    <?php

                    if(!empty($_SESSION["username"])) {
                      if ($set_datediff <= 0) {
                        ?>
                        <button class="pickrefill" onclick="pleaseRefill()">
                          <img src="src/images/Green.png">
                          <span class="show-text-tie">
                          Tie
                        </span>
                        </button>
                    <?php
                      } else {
                        ?>
                        <button id="picktie" onclick="clickTie()">
                        <img src="src/images/Green.png">
                        <span class="show-text-tie">
                          Tie
                        </span>
                      </button>
                    <?php
                      }
                    ?>
                      
                    <?php
                    } else {
                    ?>
                      <button class="picklogin" onclick="pleaseLogin()">
                        <img src="src/images/Green.png">
                        <span class="show-text-tie">
                          Tie
                        </span>
                      </button>
                      
                    <?php
                    }
                    ?>

                  </div>
                  <div class="col-4" style="text-align: center;">
                    <?php

                    if(!empty($_SESSION["username"])) {

                      if ($set_datediff <= 0) {
                        ?>
                        <button class="pickrefill" onclick="pleaseRefill()">
                          <img src="src/images/Red.png">
                          <span class="show-text">
                          Banker
                        </span>
                        </button>
                      <?php  
                      }else {
                        ?>
                        <button id="pickbanker" onclick="clickBanker()">
                          <img src="src/images/Red.png">
                          <span class="show-text">
                          Banker
                        </span>
                        </button>
                      <?php
                      }
                      ?>
                      
                    <?php
                    } else {
                    ?>
                      <button class="picklogin" onclick="pleaseLogin()">
                        <img src="src/images/Red.png">
                        <span class="show-text">
                          Banker
                        </span>
                      </button>
                    <?php
                    }
                    ?>

                  </div>
                  <div class="col-12">
                    <button id="pickrefresh" onclick="clickRefresh()">Refresh</button>
                  </div>
                </div>
              </div>
            </div>
            

          </div> <!-- row -->
        </div> <!-- action-warpper -->
      </div>
      <div class="col-12 col-lg-3">
       <div class="row" >

          <div class="col-12 col-sm-12">
            <div class="stat blockstyle">
                <div class="title">
                  สถิติการออกผล
                </div>
                <ul>
                  <li class="item-title player">
                    <img src="src/images/Blue.png" alt="">
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="player" value="0" autocomplete='off'>
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="sum-player" value="0%" autocomplete='off'>
                  </li>
                </ul>
                <ul>
                  <li class="item-title banker">
                    <img src="src/images/Red.png" alt="">
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="banker" value="0" autocomplete='off'>
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="sum-banker" value="0%" autocomplete='off'>
                  </li>
                </ul>
                <ul>
                  <li class="item-title tie">
                    <img src="src/images/Green.png" alt="">
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="tie" value="0" autocomplete='off'>
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="sum-tie" value="0%" autocomplete='off'>
                  </li>
                </ul>
                <ul>
                  <li class="item-title total">
                    <img src="src/images/Blackcoin.png" alt="">
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="total" value="0" autocomplete='off'>
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="sum-total" value="0%" autocomplete='off'>
                  </li>
                </ul>



              </div> <!-- stat -->
          </div>
          <div class="col-12 col-sm-12">
             <div class="show-predict blockstyle">
                <ul>
                  <li class="item-title">
                    ถูก
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="predict-num-true-total" value="0" autocomplete='off'>
                  </li>
                  <li class="item-value">
                     <input type="text" class="form-control" readonly="readonly" id="predict-percent-true" value="0%" autocomplete='off'>
                  </li>
                </ul>
                <ul>
                  <li class="item-title">
                    ผิด
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="predict-num-false-total" value="0" autocomplete='off'>
                  </li>
                  <li class="item-value">
                    <input type="text" class="form-control" readonly="readonly" id="predict-percent-false" value="0%" autocomplete='off'>
                  </li>
                </ul>

              </div> <!-- show-predict -->
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

 
<footer>
  <div class="container">
    <div class="row">


      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer-block">
          <div class="block-title">
            เกี่ยวกับเรา
          </div>
          <div class="block-content">
            <ul>
              <li><a href="">เกี่ยวกับ</a></li>
              <li><a href="">ความเป็นมา</a></li>
              <li><a href="">ประวัติ</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer-block">
          <div class="block-title">
            บริการอื่นของเรา
          </div>
          <div class="block-content">
            <ul>
              <li><a href="">เสือมังกร</a></li>
              <li><a href="">ไฮโล</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer-block">
          <div class="block-title">
            ทำไมต้องเป็นเรา
          </div>
          <div class="block-content">

            <ul>
              <li><a href="">เว็บสูตร ที่ดีที่สุด</a></li>
              <li><a href="">รวดเร็ว แม่นยำ</a></li>
              <li><a href="">คุ้มค่าต่อการลงทุน</a></li>
              <li><a href="">ทีมงานดูแล 24 ชั่วโมง</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="footer-block">
          <div class="block-title">
            <img src="src/images/line-ad.png" alt="">
          </div>
          <div class="block-content">

          </div>
        </div>
      </div>


    </div>
  </div>
</footer>

<!-- modal area start -->
<div class="modal fade" id="modalRegister">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><img src="src/images/logo-de6d8af1.png" alt=""></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="register-verify.php" onsubmit="return checkReqFields()">

         <input class="form-control" name="facebook" id="facebook" type="hidden" placeholder="ไอดีเข้าสู่ระบบ">

       <input class="form-control" name="facebook_picture" id="facebook_picture" type="text" placeholder="ไอดีเข้าสู่ระบบ">

          <input  class="form-control" name="username" id="username" placeholder="ไอดีเข้าสู่ระบบ">
          <span id="alert-username-register"></span>

          <input  class="form-control" name="email" id="email" type="email" placeholder="อีเมล์">
          <span id="alert-email-register"></span>

          <input id="password-register" class="form-control" name="password" type="password" placeholder="รหัสผ่าน">
          <span id="alert-password-register"></span>

          <input id="cPassword-register" class="form-control" name="cPassword" type="password" placeholder="ยืนยันรหัสผ่าน">
          <span id="alert-cPass-register"></span>

          <input id = "phone-register" class="form-control" name="phonenumber" placeholder="โทรศัพท์ 08x-xxx-xxxx" >

          <input class="form-control" name="lineid" placeholder="ไอดีไลน์">

          <input class="form-control" name="nickname" id="nickname" placeholder="ชื่อที่ใช้ในระบบ">

          <input id="register-submit" class="btn btn-primary" type="submit" name="submit" value="Register">
        </form>
      </div>
      
      
    </div>
  </div>
</div> <!-- modal modalRegister-->

<!-- modal show login start-->
<div class="modal fade" id="modalLogin">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><img src="src/images/logo-de6d8af1.png" alt=""></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        กรุณา เข้าสู่ระบบ
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>  <!-- modal show login end-->

<!-- modal show credit start-->
<div class="modal fade" id="modalCredit">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><img src="src/images/logo-de6d8af1.png" alt=""></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        เครดิตของคุณเหลือ 0 เครดิตกรุณาเติมเงินเข้าสู่ระบบ
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div> <!-- modal show credit end-->

<!-- modal show credit date-->
<div class="modal fade" id="modalDate">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><img src="src/images/logo-de6d8af1.png" alt=""></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        วันใช้งานของคุณเหลือ 0 วันกรุณาเติมเงินเข้าสู่ระบบ
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div> <!-- modal show credit date-->

<div class="modal fade" id="editprofile">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      
      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>
<!-- modal area end -->
  
<script src="js/slick.js"></script>
<script src="js/my-custom-demo.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#username-register').change(function(){
    var username = $(this).val();
    $.ajax ({
      url : "check_username_register.php",
      method : "POST",
      data :  {username :username},
      success:function(response) {   

        if (response == "pass") {
          $('#alert-username-register').html('<span class="text-success">สามารถใช้ไอดีนี้ได้</span>');
          $('#register-submit').prop('disabled', false);
        } else {
          $('#alert-username-register').html('<span class="text-danger">ไอดีซ้ำ ไม่สามารถใช้งานได้</span>');
          $('#register-submit').prop('disabled', true);
          
        }
        
      }
    });
  });
  $('#email-register').change(function(){
    var email = $(this).val();
    $.ajax ({
      url : "check_email_register.php",
      method : "POST",
      data :  {email :email},
      success:function(response) {   
        var validatemail = validate();
        if (response == "pass") {
          if (validatemail == true) {
            $('#alert-email-register').html('<span class="text-success">สามารถใช้อีเมล์นี้ได้</span>');
            $('#register-submit').prop('disabled', false); 
          }
          
        } else {
          $('#alert-email-register').html('<span class="text-danger">อีเมล์ซ้ำ ไม่สามารถใช้งานได้</span>');
          $('#register-submit').prop('disabled', true);
          
        }
        
      }
    });
  });

  $('#password-register').change(function(){
    var pass = $(this).val();
    var cPass = $('#cPassword-register').val();
    if (pass != cPass) {
      $('#alert-cPass-register').html('<span class="text-danger">พาสเวิร์ดไม่ตรงกัน</span>');
      $('#register-submit').prop('disabled', true);
    } else {
      $('#alert-cPass-register').html('<span class="text-success">พาสเวิร์ดตรงกัน</span>');
      $('#register-submit').prop('disabled', false);
    }

  });
  $('#cPassword-register').change(function(){
    var cPass = $(this).val();
    var pass = $('#password-register').val();
    if (pass != cPass) {
      $('#alert-cPass-register').html('<span class="text-danger">พาสเวิร์ดไม่ตรงกัน</span>');
      $('#register-submit').prop('disabled', true);
    } else {
      $('#alert-cPass-register').html('<span class="text-success">พาสเวิร์ดตรงกัน</span>');
      $('#register-submit').prop('disabled', false);
    }

  });
  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
  }

  function validate() {
    var $result = $("#alert-email-register");
    var email = $("#email-register").val();
    $result.text("");

    if (validateEmail(email)) {
      $result.text(email + " รูปแบบอีเมล์ถูกต้อง");
      $result.css("color", "#28a745");
    } else {
      $result.text(email + " รูปแบบอีเมล์ไม่ถูกต้อง");
      $result.css("color", "#dc3545");
    }
    return false;
  }
  
  var phones = [{ "mask": "###-###-####"}];
  $('#phone-register').inputmask({ 
    mask: phones, 
    greedy: false, 
    definitions: { '#': { validator: "[0-9]", cardinality: 1}} });

}); 
function checkReqFields() {
  var returnValue;
  var checkuname = document.getElementById('username-register').value;
  var checkemail = document.getElementById('email-register').value;
  var checkpass = document.getElementById('password-register').value;
  var checkcPass = document.getElementById('cPassword-register').value;
  
  // returnValue=true;
  if(checkuname.trim()==""){
    $('#alert-username-register').html('<span class="text-danger">กรุณากรอกไอดีเพื่อสมัคร</span>');
    returnValue=false;
  }
  if(checkemail.trim()==""){
    $('#alert-email-register').html('<span class="text-danger">กรุณากรอกอีเมล์</span>');
    returnValue=false;
  }
  if(checkemail.trim()==""){
    $('#alert-password-register').html('<span class="text-danger">กรุณากรอกพาสเวิร์ด</span>');
    returnValue=false;
  } 
  if(checkemail.trim()==""){
    $('#alert-cPassword-register').html('<span class="text-danger">กรุณากรอกยืนยันพาสเวิร์ด</span>');
    returnValue=false;
  }         
  return returnValue;
}

</script>

<!-- <script type="text/javascript">
 
</script>
 -->

<?php
      $id_member = $_SESSION['id_member'];
?>
<script type="text/javascript">

        var gID;
        var gName;
        var gEmail;
        var gImage;


        function onSignIn(googleUser) {
           
        // ขอมูลของผู้ใช้งานที่ล็อกอิน ที่เราสามารถนำไปใช้งานได้ 
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // google แนะนำว่าไม่ควรส่งคานี้ไปเก็บไว้บน server 
        // ค่า ID นี้เราสามรรถประยุกต์เพิ่มเติมตามต้องการ เช่นอาจจะเข้ารหัสก่อนบันทึกหรืออะไรก็ได้
        // แต่ในที่นี้จะใช้วิธีอยางง่่ายเพื่อเป็นแนวทาง
        // console.log('Full Name: ' + profile.getName());
        // console.log('Given Name: ' + profile.getGivenName());
        // console.log('Family Name: ' + profile.getFamilyName());
        // console.log("Image URL: " + profile.getImageUrl());
        // console.log("Email: " + profile.getEmail());

        window.gID = profile.getId();
        window.gName = profile.getName();
        window.gEmail = profile.getEmail();
        window.gImage = profile.getImageUrl();
 
        // google แนะนำให้ใช้ ID token สำหรับใช้ในการตรวจสอบการล็อกอิน
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
        logInGoogle();
      };



         function logInGoogle() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me?fields=id,name,email,picture.width(500).height(500)', function(response) {

              // alert(gID);
              // alert(response.picture.data.url);
              // // alert(JSON.stringify(response));


                            fbPicture = gImage;
                            fbName = gName;
                            fbEmail = gEmail;
                            fbID = gID;

                            $.ajax({
                            url: 'https://underfox.xyz/ufabet/webservice/facebook_login.php?id='+fbID,
                            type: 'POST',
                            data: { id:fbID },
                            success: function(response){

                              if(response == 1){

                                 alert("เข้าสู่ระบบ");
                                
                                        $.ajax({
                                          async: false,
                                          dataType: "json",
                                          type:'GET',
                                          url: 'https://underfox.xyz/ufabet/webservice/user_data.php?id='+fbID,
                                          success: function(data) {
                                              var username = data[0].Username_member;
                                              $('#login_username').val(username);
                                              $('#login_facebook').val("true");
                                              var password = data[0].Password_member;
                                              $('#login_password').val(password);
                                              $("#fm_login").submit();
                                              
                                          }
                                     });
             
                             }else{
                                alert("ยังไม่เป็นสมาชิก");
                                $('#facebook_picture').val(gImage).prop('readonly', true);
                                $('#username').val(gID).prop('readonly', true);
                                $('#email').val(gEmail).prop('readonly', true);
                                $('#facebook').val("true").prop('readonly', true);
                                $('#modalRegister').modal('show'); 
                  
                             }

                           }


                          });

            });
          }



          function checkLoginState() {

            logInFacebook();
          }

          window.fbAsyncInit = function() {
            FB.init({
                            appId      : '484950755591840',
                            cookie     : true,
                            xfbml      : true,
                            version    : 'v3.3'
            });

            FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
            });

          };

          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));




          function logInFacebook() {
            console.log('Welcome!  Fetching your information.... ');
            FB.api('/me?fields=id,name,email,picture.width(500).height(500)', function(response) {


              // alert(response.picture.data.url);
              // // alert(JSON.stringify(response));


                            fbPicture = response.picture.data.url;
                            fbName = response.name;
                            fbEmail = response.email;
                            fbID = response.id;

                            $.ajax({
                            url: 'https://underfox.xyz/ufabet/webservice/facebook_login.php?id='+fbID,
                            type: 'POST',
                            data: { id:fbID },
                            success: function(response){

                              if(response == 1){

                                 alert("เข้าสู่ระบบ");
                                
                                        $.ajax({
                                          async: false,
                                          dataType: "json",
                                          type:'GET',
                                          url: 'https://underfox.xyz/ufabet/webservice/user_data.php?id='+fbID,
                                          success: function(data) {
                                              var username = data[0].Username_member;
                                              $('#login_username').val(username);
                                              $('#login_facebook').val("true");
                                              var password = data[0].Password_member;
                                              $('#login_password').val(password);
                                              $("#fm_login").submit();
                                              
                                          }
                                     });
             
                             }else{
                                alert("ยังไม่เป็นสมาชิก");
                                $('#facebook_picture').val(fbPicture).prop('readonly', true);
                                $('#username').val(fbID).prop('readonly', true);
                                $('#email').val(fbEmail).prop('readonly', true);
                                $('#facebook').val("true").prop('readonly', true);
                                $('#modalRegister').modal('show'); 
                  
                             }

                           }


                          });

            });
          }




      var id_member = "<?= $id_member ?>";
      setInterval(function() {
        $.ajax({
          url: 'update_credit.php',
          type: 'POST',
          data: { id:id_member},
          success: function(response){
          document.getElementById("content").innerHTML = response;

         }
        });
      }, 1000);


</script>

<script type="text/javascript">
  $('.promotion-items').slick({
  dots: true,
  infinite: false,
  speed: 1000,
  slidesToShow: 10,
  slidesToScroll: 9,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 9,
        slidesToScroll: 8
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 10,
        slidesToScroll: 9
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 8,
        slidesToScroll: 7
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 6
      }
    },
    {
      breakpoint: 401,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 5
      }
    }

  ]
});


</script>


    <script>


    </script>
     
     
    <script>

      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
           return true;
          // window.location=window.location.href;
        });
      }
    </script>    
    

</div>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        setting-name: setting-value
      });
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
<audio id="audio-coin" src="soundcoin/coin-drop-5.mp3" ></audio>

</body>
</html>
