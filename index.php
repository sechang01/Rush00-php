<?PHP

include 'install.php';



?>


<!DOCTYPE>
<html>
	<head>
		<title>Crypto eXchange/</title>
    <link rel="stylesheet" href="style.css" media="all" />
    <style>
        td.t1{
            opacity:100;
        }  
        td.t2{
            opacity:100;
        }
        td.t3{
            opacity:100;
        }
        td.ep{
            opacity:100;
        }
    </style>
	</head>
<body>
<!--Main Container starts here-->
	<div class-"main_wrapper>

        <!--Header starts here--
		<div class="header_wrapper">
			<img id="logo" src="images/logo.gif" />
			<img id="banner" src="images/ad_banner.gif" />
        </div>
        !--Header ends here-->
        
		<!--Navagation bar starts here-->
		<div class="menubar">
            <ul id="menu">
                    <li><img src="basket.jpg"><a href="#"></a></li>
            </ul>
            <div id="form">
                    <form method="get" action"results.php" enctype="multipart/form-data">
                        <input type="text" name="login" placeholder="Login" / >
                        <input type="text" name="password" placeholder="Password" / >
                        <input type="submit" name="submit" value="Register / Login" />
                    </form>
            </div>
		</div>
        <!--Navagation bar ends here-->
        
        <!--Content wrapper starts here-->
        
		<div class="content_wrapper">
            <div class="container">
                    <img src="crypto.jpg" alt="Crypto Exchange" style="width:100%;">
                    <div class="centered">Crypto Exchange</div>
            </div>

            <div class="menubar"></div>

        <center><table contenteditable="true" width="80%">
            
                <h1>Select your coins</h1>
                <form method="get" action"results.php" enctype="multipart/form-data" contenteditable="true">
                        <input type="checkbox" checked="checked" value="Tier 1" name="t1"> Tier 1
                        <input type="checkbox" checked="checked" value="Tier 2" name="t2"> Tier 2
                        <input type="checkbox" checked="checked" value="Tier 3" name="t3"> Tier 3
                        <input type="checkbox" checked="checked" value="Editor" name="ep"> Editor's Pick
                </form>
            <tr>
                <td class="t1"><h2 id="1A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Bitcoin_coin.jpg" alt="Buy Bitcoin" /></form>
                    <p></p><h2 id="1Q">0</h2><h1>Bitcoin</h1><p></p><h1>$6,577.85</h1></td>
                <td class="t1"><h2 id="2A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Maidsafe_coin.jpg" alt="Buy Maidsafe" /></form>
                    <p></p><h2 id="2Q">0</h2><h1>Maidsafe</h1><p></p><h1>$0.23</h1></td>
                <td class="t2 ep"><h2 id="3A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Bytom_coin.jpg" alt="Buy Bytom" /></form>
                    <p></p><h2 id="3Q">0</h2><h1>Bytom</h1><p></p><h1>$0.18</h1></td>
                <td class="t2"><h2 id="4A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Funfair_coin.jpg" alt="Buy Funfair" /></form>
                    <p></p><h2 id="4Q">0</h2><h1>Funfair</h1><p></p><h1>$0.01</h1></td>
                <td class="t2"><h2 id="5A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Quantstamp_coin.jpg" alt="Buy Quantstamp" /></form>
                    <p></p><h2 id="5Q">0</h2><h1>Quantstamp</h1><p></p><h1>$0.03</h1></td>
                <td class="t2"><h2 id="6A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Eternal_coin.jpg" alt="Buy Eternal" /></form>
                    <p></p><h2 id="6Q">0</h2><h1>Eternal</h1><p></p><h1>$1.70</h1></td>
            </tr>
            <tr>
                <td class="t1"><h2 id="7A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Eth_coin.jpg" alt="Buy Ethereum" /></form>
                    <p></p><h2 id="7Q">0</h2><h1>Ethereum</h1><p></p><h1>$224.63</h1></td>
                <td class="t2"><h2 id="8A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Nexus_coin.jpg" alt="Buy Nexus" /></form>
                    <p></p><h2 id="8Q">0</h2><h1>Nexus</h1><p></p><h1>$0.80</h1></td>
                <td class="t1"><h2 id="9A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Monero_coin.jpg" alt="Buy Monero" /></form>
                    <p></p><h2 id="9Q">0</h2><h1>Monero</h1><p></p><h1>$114.00</h1></td>
                <td class="t3"><h2 id="10A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Ontology_coin.jpg" alt="Buy Ontology" /></form>
                    <p></p><h2 id="10Q">0</h2><h1>Ontology</h1><p></p><h1>$1.91</h1></td>
                <td class="t3"><h2 id="11A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Verge_coin.jpg" alt="Buy Verge" /></form>
                    <p></p><h2 id="11Q">0</h2><h1>Verge</h1><p></p><h1>$0.01</h1></td>
                <td class="t3 ep"><h2 id="12A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Tenx_coin.jpg" alt="Buy Tenx" /></form>
                    <p></p><h2 id="12Q">0</h2><h1>Tenx</h1><p></p><h1>$0.66</h1></td>
            </tr>
            <tr>
                <td class="t1 ep"><h2 id="13A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/0x_coin.jpg" alt="Buy 0x" /></form>
                    <p></p><h2 id="13Q">0</h2><h1>0x</h1><p></p><h1>$0.65</h1></td>
                <td class="t2"><h2 id="14A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Storm_coin.jpg" alt="Buy Storm" /></form>
                    <p></p><h2 id="14Q">0</h2><h1>Storm</h1><p></p><h1>$0.01</h1></td>
                <td class="t1"><h2 id="15A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Bitcoincash_coin.jpg" alt="Buy Bitcoin Cash" /></form>
                    <p></p><h2 id="15Q">0</h2><h1>Bitcoin Cash</h1><p></p><h1>$509.81</h1></td>
                <td class="t3"><h2 id="16A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Tezo_coin.jpg" alt="Buy Tezos" /></form>
                    <p></p><h2 id="16Q">0</h2><h1>Tezos</h1><p></p><h1>$1.32</h1></td>
                <td class="t3"><h2 id="17A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Zcash_coin.jpg" alt="Buy Zcash" /></form>
                    <p></p><h2 id="17Q">0</h2><h1>Zcash</h1><p></p><h1>$125.39</h1></td>
                <td class="t1"><h2 id="18A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Doge_coin.jpg" alt="Buy Doge" /></form>
                    <p></p><h2 id="18Q">0</h2><h1>Doge</h1><p></p><h1>$0.01</h1></td>
            </tr>
            <tr>
                <td class="t2"><h2 id="19A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Kyber_coin.jpg" alt="Buy Kyber" /></form>
                    <p></p><h2 id="19Q">0</h2><h1>Kyber</h1><p></p><h1>$0.39</h1></td>
                <td class="t3 ep"><h2 id="20A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Qtum_coin.jpg" alt="Buy Qtum" /></form>
                    <p></p><h2 id="20Q">0</h2><h1>Qtum</h1><p></p><h1>$3.74</h1></td>
                <td class="t3 ep"><h2 id="21A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Steem_coin.jpg" alt="Buy Steem" /></form>
                    <p></p><h2 id="21Q">0</h2><h1>Steem</h1><p></p><h1>$0.92</h1></td>
                <td class="t1"><h2 id="22A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Neo_coin.jpg" alt="Buy Neo" /></form>
                    <p></p><h2 id="22Q">0</h2><h1>Neo</h1><p></p><h1>$17.93</h1></td>
                <td class="t3"><h2 id="23A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Tether_coin.jpg" alt="Buy Tether" /></form>
                    <p></p><h2 id="23Q">0</h2><h1>Tether</h1><p></p><h1>$0.99</h1></td>
                <td class="t2"><h2 id="24A">100</h2>
                    <form method="get" action"results.php"><input class="coin" type="image" src="coins/Tron_coin.jpg" alt="Buy Tron" /></form>
                    <p></p><h2 id="24Q">0</h2><h1>Tron</h1><p></p><h1>$0.02</h1></td>
            </tr>
        </table>
        <br />
        <br />
        <h1>Your Order Total:</h1><br />
        <form method="get" action"results.php" enctype="multipart/form-data">
            <input type="submit" name="confirm" value="Confirm Payment" />
        </form>
        </center>

        </div>
        <div id="content_area"></div>
            <div id="footer">
                <br />
                <br />
                <br />
                <br />
                <p style="font-style:italic; text-align:right; font-family:andale mono;">©sechang && ssong 2018  </p>
            </div>

        <!--Content wrapper ends here-->
	</div>
<!--Main Container ends here-->
</body>
</html>