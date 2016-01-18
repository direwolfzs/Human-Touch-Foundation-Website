<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Human Touch  Site : 770-634-5345 : Cancer outreach organization : HOME</title>
<meta name="description" content="" />
<link href="../css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
  <div id="logo" ><span class="banner"><img src="../images/humantouchbanner.fw.png" alt="" width="753" height="71" /></span></div>
  <div id="menu">
    <ul>
      <li><a href="../index.html" title="">Homepage</a></li>
      <li><a href="about.html" title="">About Us</a></li>
      <li><a href="mission.html" title="">Mission</a></li>
      <li><a href="staff.html" title="">Staff</a></li>
      <li><a href="partners.html" title="">Partners</a></li>
      <li><a href="5kwalk.html" title="">5K Walk</a></li>
      <li><a href="media.html" title="">Media</a></li>
       <li><a href="documents.html" title="">Documents</a></li>
       <li class="active"><a href="contact.html" title="">Contact Us</a></li>
    </ul>
  </div>
</div>
<div id="content">
<div class="title">
  <p class="title">Registering for 2014 Human Touch Cancer Walk!</p>
  <p class="title">To contact us please us the details below:</p>
  <p class="title">Tel: (770) 672 4212</p>
  <p class="title">Email: <a href="haesanq@yahoo.com">haesanq@yahoo.com</a></p>
  <p class="title">To register for the walk, please fill out the following form:  </p>
  
  <?
  $s=$_GET['s'];
  if ($s=="1") {
  	echo ('<span class="success">Success! Your requirements have been sent to our web team. Please allow 24 hours for a response.</span>');
    }
    else if ($s=="2") {
    	echo ('<span class="fail">Sorry! Your requirements have not been sent to our team. Please ensure you have filled in the form correctly.</span>');
        }
        ?>
  
  
  
  <p class="title">&nbsp;</p>
  <form id="form" name="form1" method="post" action="../php/send.php">
    <table width="100%" border="0" cellpadding="6">
      <tr>
        <td align=right><label for="email2"><strong>Email</strong>:</label></td>
        <td class="tablealign2"><input type="text" name="email" id="email2" /></td>
      </tr>
      <tr>
        <td align=right><label for="name"><strong>Name</strong>:</label></td>
        <td class="tablealign2"><input type="text" name="name" id="name" /></td>
      </tr>
      <tr>
        <td align=right><label for="phone"><strong>Phone:</strong></label></td>
        <td class="tablealign2"><input type="text" name="phone" id="phone" /></td>
      </tr>
      <tr>
        <td align=right><strong>Payment Options:</strong></td>
        <td class="tablealign2"><p>
          <label>
            <input type="radio" name="payment" value="5" id="payment_0" />
            $5</label>
          <br />
          <label>
            <input type="radio" name="payment" value="10" id="payment_1" />
            $10</label>
          <br />
          <label>
            <input type="radio" name="payment" value="20" id="payment_2" />
            $20</label>
          <br />
          <label>
            <input type="radio" name="payment" value="25" id="payment_3" />
            $25</label>
          <br />
          <label>
            <input type="radio" name="payment" value="50" id="payment_4" />
            $50</label>
          <br />
          <label>
            <input type="radio" name="payment" value="100" id="payment_5" />
            $100</label>
          <br />
          <label>
            <input type="radio" name="payment" value="500" id="payment_6" />
            $500</label>
          <br />
        </p></td>
      </tr>
      <tr>
        <td align=right><label for="walkers"><strong>Number of Walkers/Runners:</strong></label></td>
        <td class="tablealign2"><select name="walkers" id="walkers">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10+">10+</option>
          <option selected="selected">Choose</option>
        </select></td>
      </tr>
      <tr>
        <td height="20" align=right><label for="comments"><strong>Comments:</strong></label></td>
        <td class="tablealign2"><textarea name="comments" id="comments" cols="45" rows="5"></textarea></td>
      </tr>
      <tr>
        <td align=right>&nbsp;</td>
        <td class="tablealign2"><input name="newsletter" type="checkbox" id="newsletter" checked="checked" />
          <label for="newsletter">Subscribe to our FREE Online Newsletter</label></td>
      </tr>
      
      <tr>
      <td align=right><strong>Security:</strong></td>
      <td class="tablealign2">6+4=
        <label for="security"></label>
        <input type="text" name="security" id="security" /></td>
      </tr>
      
      <tr>
        <td align=right><input type="reset" name="clear" id="clear" value="Reset Form" /></td>
        <td class="tablealign2"><input type="submit" name="submit" id="submit" value="Submit Email" /></td>
      </tr>
    </table>
  </form>
  <p class="title">&nbsp;</p>
  <p class="title">&nbsp;</p>
  <p class="title">&nbsp;</p>
</div>
<p>&nbsp;</p>
<div id="footer">
  <p id="legal"><a href="../index.html">HOME</a> | <a href="hasansfishingabout.html">ABOUT</a> | MISSION | STAFF  | PARTNERS | 5K WALK | MEDIA | DOCUMENTS | <a href="hasansfishingcontact.html">CONTACT</a></p>
  <p>Copyright &copy; 2013 Human Touch. All Rights Reserved.  </p>
  <p id="links">Privacy Policy | Terms of Use</p>
</div>
</body>
</html>
