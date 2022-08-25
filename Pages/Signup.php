<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <link rel="stylesheet" href="Style.css">
    <meta name="viewport" content="initial-scale=0.6 width=device-width">
    <script>
        function g() {
        valid = true;
      if( document.form.name.value == "" ) {
         alert( "Please provide your Name!" );
         document.form.name.focus() ;
         valid = false;
      }
      if( document.form.surname.value == "" ) {
         alert( "Please provide your Surname!" );
         document.form.surname.focus() ;
         valid = false;
      }
      if( document.form.email.value == "" ) {
         alert( "Please provide your email!" );
         document.form.email.focus() ;
         valid = false;
      }
      if( document.form.password.value == "" ) {
         alert( "Please provide your password!" );
         valid = false;
      }
      if( document.form.city.value == "0" ) {
         alert( "Please provide your city!" );
         valid = false;
      }
   }

    </script>

</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="https://imgbb.com/">
                    <img src="https://i.ibb.co/SRd5CYF/pngegg.png" alt="pngegg">
                </a>
                <a href="">Earthquake Precautions</a>
            </div>
            <ul>
                <li>
                    <a href="https://web.itu.edu.tr/adiguzel18/web.html">Home</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/About.html" >About Us</a>
                    <a href="https://web.itu.edu.tr/adiguzel18/Signin.html">Sign in</a>
                </li>
            </ul>
        </div>
       <div class="signup-form">
           <form action="save.php" name="form" id="form" method="POST" onsubmit="return g()">
                <h1>Sign Up</h1>
                <input type="text" placeholder="Name" class="finp" name="name" id="name">
                <input type="text" placeholder="Surname" class="finp" name="surname" id="surname">
                <input type="email" placeholder="e mail" class="finp" name="email" id="email">
                <input type="password" placeholder="password" class="finp" name="password" id="password">  
                <select name="city" class="finp" id="city">
                    <option value="0">Choose...</option>
                    <option value="1">Adana</option>
                    <option value="2">Adıyaman</option>
                    <option value="3">Afyonkarahisar</option>
                    <option value="4">Ağrı</option>
                    <option value="5">Amasya</option>
                    <option value="6">Ankara</option>
                    <option value="7">Antalya</option>
                    <option value="8">Artvin</option>
                    <option value="9">Aydın</option>
                    <option value="10">Balıkesir</option>
                    <option value="11">Bilecik</option>
                    <option value="12">Bingöl</option>
                    <option value="13">Bitlis</option>
                    <option value="14">Bolu</option>
                    <option value="15">Burdur</option>
                    <option value="16">Bursa</option>
                    <option value="17">Çanakkale</option>
                    <option value="18">Çankırı</option>
                    <option value="19">Çorum</option>
                    <option value="20">Denizli</option>
                    <option value="21">Diyarbakır</option>
                    <option value="22">Edirne</option>
                    <option value="23">Elazığ</option>
                    <option value="24">Erzincan</option>
                    <option value="25">Erzurum</option>
                    <option value="26">Eskişehir</option>
                    <option value="27">Gaziantep</option>
                    <option value="28">Giresun</option>
                    <option value="29">Gümüşhane</option>
                    <option value="30">Hakkâri</option>
                    <option value="31">Hatay</option>
                    <option value="32">Isparta</option>
                    <option value="33">Mersin</option>
                    <option value="34">İstanbul</option>
                    <option value="35">İzmir</option>
                    <option value="36">Kars</option>
                    <option value="37">Kastamonu</option>
                    <option value="38">Kayseri</option>
                    <option value="39">Kırklareli</option>
                    <option value="40">Kırşehir</option>
                    <option value="41">Kocaeli</option>
                    <option value="42">Konya</option>
                    <option value="43">Kütahya</option>
                    <option value="44">Malatya</option>
                    <option value="45">Manisa</option>
                    <option value="46">Kahramanmaraş</option>
                    <option value="47">Mardin</option>
                    <option value="48">Muğla</option>
                    <option value="49">Muş</option>
                    <option value="50">Nevşehir</option>
                    <option value="51">Niğde</option>
                    <option value="52">Ordu</option>
                    <option value="53">Rize</option>
                    <option value="54">Sakarya</option>
                    <option value="55">Samsun</option>
                    <option value="56">Siirt</option>
                    <option value="57">Sinop</option>
                    <option value="58">Sivas</option>
                    <option value="59">Tekirdağ</option>
                    <option value="60">Tokat</option>
                    <option value="61">Trabzon</option>
                    <option value="62">Tunceli</option>
                    <option value="63">Şanlıurfa</option>
                    <option value="64">Uşak</option>
                    <option value="65">Van</option>
                    <option value="66">Yozgat</option>
                    <option value="67">Zonguldak</option>
                    <option value="68">Aksaray</option>
                    <option value="69">Bayburt</option>
                    <option value="70">Karaman</option>
                    <option value="71">Kırıkkale</option>
                    <option value="72">Batman</option>
                    <option value="73">Şırnak</option>
                    <option value="74">Bartın</option>
                    <option value="75">Ardahan</option>
                    <option value="76">Iğdır</option>
                    <option value="77">Yalova</option>
                    <option value="78">Karabük</option>
                    <option value="79">Kilis</option>
                    <option value="80">Osmaniye</option>
                    <option value="81">Düzce</option>
                </select>
                <input type="submit" value="Sign Up" class="sgnbtn">
            </form>    
       </div>
    </div>
    
</body>
</html>