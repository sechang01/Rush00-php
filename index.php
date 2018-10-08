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
            opacity:<?php echo $$_SESSION["opa1"];?>;
        }
        td.t2{
            opacity:<?php echo $$_SESSION["opa2"];?>;
        }
        td.t3{
            opacity:<?php echo $$_SESSION["opa3"];?>;
        }
        td.ep{
            opacity:<?php echo $$_SESSION["opaep"];?>;
        }
    </style>
	</head>
<body>
	<!--Main Container starts here-->
		<div class="main_wrapper">

			<!--Navagation bar starts here-->
			<div class="menubar">
	            <ul id="menu">
	                    <li><img src="imgs/basket.jpg"><a href="#"></a></li>
	            </ul>
	            <div id="form">
	                    <form name="login" method="post" action="../functions/loginregister.php">
	                        <input type="text" name="login" placeholder="Username" / >
	                        <input type="password" name="password" placeholder="Password" / >
	                        <input type="submit" name="submit" value="Login / Register" />
	                    </form>
											<form align="right" name="login" method="post" action="functions/logout.php">
	                        <input type="submit" name="submit" value="Logout" />
	                    </form>
	            </div>
			</div>
        <!--Navagation bar ends here-->

        <!--Content wrapper starts here-->

		<div class="content_wrapper">
            <div class="container">
                    <img src="imgs/crypto.jpg" alt="Crypto Exchange" style="width:100%;">
                    <div class="centered">Crypto Exchange</div>
            </div>

            <div class="menubar"></div>

        <center><table contenteditable="true" width="80%">

                <h1>Select your coins</h1>
                <form method="post" action="category.php" enctype="multipart/form-data" contenteditable="true">
                        <input type="checkbox" checked="checked" value="Tier 1" name="tier"> Tier 1
                        <input type="checkbox" checked="checked" value="Tier 2" name="tier"> Tier 2
                        <input type="checkbox" checked="checked" value="Tier 3" name="tier"> Tier 3
                        <input type="checkbox" checked="checked" value="Editor" name="tier"> Editor's Pick
                </form>
            <tr>
                <td class="t1"><h2 id="1A"><?php echo $_SESSION["coin_instock"][0];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Bitcoin_coin.jpg" alt="Buy Bitcoin"/><input type="hidden" name="coinvalue" value="0"></form>
                    <p></p><h2 id="1Q"><?php echo $_SESSION["coin_incart"][0];?></h2><h1>Bitcoin</h1><p></p><h1>$6,577.85</h1></td>
                <td class="t1"><h2 id="2A"><?php echo $_SESSION["coin_instock"][1];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Maidsafe_coin.jpg" alt="Buy Maidsafe"/><input type="hidden" name="coinvalue" value="1"></form>
                    <p></p><h2 id="2Q"><?php echo $_SESSION["coin_incart"][1];?></h2><h1>Maidsafe</h1><p></p><h1>$0.23</h1></td>
                <td class="t2 ep"><h2 id="3A"><?php echo $_SESSION["coin_instock"][2];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Bytom_coin.jpg" alt="Buy Bytom"/><input type="hidden" name="coinvalue" value="2"></form>
                    <p></p><h2 id="3Q"><?php echo $_SESSION["coin_incart"][2];?></h2><h1>Bytom</h1><p></p><h1>$0.18</h1></td>
                <td class="t2"><h2 id="4A"><?php echo $_SESSION["coin_instock"][3];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Funfair_coin.jpg" alt="Buy Funfair"/><input type="hidden" name="coinvalue" value="3"></form>
                    <p></p><h2 id="4Q"><?php echo $_SESSION["coin_incart"][3];?></h2><h1>Funfair</h1><p></p><h1>$0.01</h1></td>
                <td class="t2"><h2 id="5A"><?php echo $_SESSION["coin_instock"][4];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Quantstamp_coin.jpg" alt="Buy Quantstamp"/><input type="hidden" name="coinvalue" value="4"></form>
                    <p></p><h2 id="5Q"><?php echo $_SESSION["coin_incart"][4];?></h2><h1>Quantstamp</h1><p></p><h1>$0.03</h1></td>
                <td class="t2"><h2 id="6A"><?php echo $_SESSION["coin_instock"][5];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Eternal_coin.jpg" alt="Buy Eternal"/><input type="hidden" name="coinvalue" value="5"></form>
                    <p></p><h2 id="6Q"><?php echo $_SESSION["coin_incart"][5];?></h2><h1>Eternal</h1><p></p><h1>$1.70</h1></td>
            </tr>
            <tr>
                <td class="t1"><h2 id="7A"><?php echo $_SESSION["coin_instock"][6];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Eth_coin.jpg" alt="Buy Ethereum"/><input type="hidden" name="coinvalue" value="6"></form>
                    <p></p><h2 id="7Q"><?php echo $_SESSION["coin_incart"][6];?></h2><h1>Ethereum</h1><p></p><h1>$224.63</h1></td>
                <td class="t2"><h2 id="8A"><?php echo $_SESSION["coin_instock"][7];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Nexus_coin.jpg" alt="Buy Nexus"/><input type="hidden" name="coinvalue" value="7"></form>
                    <p></p><h2 id="8Q"><?php echo $_SESSION["coin_incart"][7];?></h2><h1>Nexus</h1><p></p><h1>$0.80</h1></td>
                <td class="t1"><h2 id="9A"><?php echo $_SESSION["coin_instock"][8];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Monero_coin.jpg" alt="Buy Monero"/><input type="hidden" name="coinvalue" value="8"></form>
                    <p></p><h2 id="9Q"><?php echo $_SESSION["coin_incart"][8];?></h2><h1>Monero</h1><p></p><h1>$114.00</h1></td>
                <td class="t3"><h2 id="10A"><?php echo $_SESSION["coin_instock"][9];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Ontology_coin.jpg" alt="Buy Ontology"/><input type="hidden" name="coinvalue" value="9"></form>
                    <p></p><h2 id="10Q"><?php echo $_SESSION["coin_incart"][9];?></h2><h1>Ontology</h1><p></p><h1>$1.91</h1></td>
                <td class="t3"><h2 id="11A"><?php echo $_SESSION["coin_instock"][10];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Verge_coin.jpg" alt="Buy Verge"/><input type="hidden" name="coinvalue" value="10"></form>
                    <p></p><h2 id="11Q"><?php echo $_SESSION["coin_incart"][10];?></h2><h1>Verge</h1><p></p><h1>$0.01</h1></td>
                <td class="t3 ep"><h2 id="12A"><?php echo $_SESSION["coin_instock"][11];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Tenx_coin.jpg" alt="Buy Tenx"/><input type="hidden" name="coinvalue" value="11"></form>
                    <p></p><h2 id="12Q"><?php echo $_SESSION["coin_incart"][11];?></h2><h1>Tenx</h1><p></p><h1>$0.66</h1></td>
            </tr>
            <tr>
                <td class="t1 ep"><h2 id="13A"><?php echo $_SESSION["coin_instock"][12];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/0x_coin.jpg" alt="Buy 0x"/><input type="hidden" name="coinvalue" value="12"></form>
                    <p></p><h2 id="13Q"><?php echo $_SESSION["coin_incart"][12];?></h2><h1>0x</h1><p></p><h1>$0.65</h1></td>
                <td class="t2"><h2 id="14A"><?php echo $_SESSION["coin_instock"][13];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Storm_coin.jpg" alt="Buy Storm"/><input type="hidden" name="coinvalue" value="13"></form>
                    <p></p><h2 id="14Q"><?php echo $_SESSION["coin_incart"][13];?></h2><h1>Storm</h1><p></p><h1>$0.01</h1></td>
                <td class="t1"><h2 id="15A"><?php echo $_SESSION["coin_instock"][14];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Bitcoincash_coin.jpg" alt="Buy Bitcoin Cash"/><input type="hidden" name="coinvalue" value="14"></form>
                    <p></p><h2 id="15Q"><?php echo $_SESSION["coin_incart"][14];?></h2><h1>Bitcoin Cash</h1><p></p><h1>$509.81</h1></td>
                <td class="t3"><h2 id="16A"><?php echo $_SESSION["coin_instock"][15];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Tezo_coin.jpg" alt="Buy Tezos"/><input type="hidden" name="coinvalue" value="15"></form>
                    <p></p><h2 id="16Q"><?php echo $_SESSION["coin_incart"][15];?></h2><h1>Tezos</h1><p></p><h1>$1.32</h1></td>
                <td class="t3"><h2 id="17A"><?php echo $_SESSION["coin_instock"][16];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Zcash_coin.jpg" alt="Buy Zcash"/><input type="hidden" name="coinvalue" value="16"></form>
                    <p></p><h2 id="17Q"><?php echo $_SESSION["coin_incart"][16];?></h2><h1>Zcash</h1><p></p><h1>$125.39</h1></td>
                <td class="t1"><h2 id="18A"><?php echo $_SESSION["coin_instock"][17];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Doge_coin.jpg" alt="Buy Doge"/><input type="hidden" name="coinvalue" value="17"></form>
                    <p></p><h2 id="18Q"><?php echo $_SESSION["coin_incart"][17];?></h2><h1>Doge</h1><p></p><h1>$0.01</h1></td>
            </tr>
            <tr>
                <td class="t2"><h2 id="19A"><?php echo $_SESSION["coin_instock"][18];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Kyber_coin.jpg" alt="Buy Kyber"/><input type="hidden" name="coinvalue" value="18"></form>
                    <p></p><h2 id="19Q"><?php echo $_SESSION["coin_incart"][18];?></h2><h1>Kyber</h1><p></p><h1>$0.39</h1></td>
                <td class="t3 ep"><h2 id="20A"><?php echo $_SESSION["coin_instock"][19];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Qtum_coin.jpg" alt="Buy Qtum"/><input type="hidden" name="coinvalue" value="19"></form>
                    <p></p><h2 id="20Q"><?php echo $_SESSION["coin_incart"][19];?></h2><h1>Qtum</h1><p></p><h1>$3.74</h1></td>
                <td class="t3 ep"><h2 id="21A"><?php echo $_SESSION["coin_instock"][20];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Steem_coin.jpg" alt="Buy Steem"/><input type="hidden" name="coinvalue" value="20"></form>
                    <p></p><h2 id="21Q"><?php echo $_SESSION["coin_incart"][20];?></h2><h1>Steem</h1><p></p><h1>$0.92</h1></td>
                <td class="t1"><h2 id="22A"><?php echo $_SESSION["coin_instock"][21];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Neo_coin.jpg" alt="Buy Neo"/><input type="hidden" name="coinvalue" value="21"></form>
                    <p></p><h2 id="22Q"><?php echo $_SESSION["coin_incart"][21];?></h2><h1>Neo</h1><p></p><h1>$17.93</h1></td>
                <td class="t3"><h2 id="23A"><?php echo $_SESSION["coin_instock"][22];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Tether_coin.jpg" alt="Buy Tether"/><input type="hidden" name="coinvalue" value="22"></form>
                    <p></p><h2 id="23Q"><?php echo $_SESSION["coin_incart"][22];?></h2><h1>Tether</h1><p></p><h1>$0.99</h1></td>
                <td class="t2"><h2 id="24A"><?php echo $_SESSION["coin_instock"][23];?></h2>
                    <form method="post" action="increases.php">
                        <input class="coin" type="image" src="coins/Tron_coin.jpg" alt="Buy Tron"/><input type="hidden" name="coinvalue" value="23"></form>
                    <p></p><h2 id="24Q"><?php echo $_SESSION["coin_incart"][23];?></h2><h1>Tron</h1><p></p><h1>$0.02</h1></td>
            </tr>
        </table>
        <br />
        <br />
        <h1>Your Order Total: <?php echo $_SESSION["total"][0];?> USD</h1><br />
        <form method="get" action="functions/addorder.php">
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
