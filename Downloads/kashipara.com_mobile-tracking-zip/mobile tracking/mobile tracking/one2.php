
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Mobile Tracking</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {color: #FF0000}
-->
</style>
</head>

<body>
<script type="text/javascript">
function show(st)
{
if(st=='other')
{
document.getElementById('te').style.display ="block";
}
else
{
document.getElementById('te').style.display ="none";
}
}
function validate()
{
	var va=" ";
if(document.getElementById('product').value=="")
{
alert("please enter the shop name");
document.getElementById('product').focus();
va=false;
}

else if(document.getElementById('description').value=="")
{
alert("please enter the address ");
document.getElementById('description').focus();
va=false;
}
else if(document.getElementById('location').value=="")
{
alert("please enter the location");
document.getElementById('location').focus();

va=false;
}
else if(document.getElementById('shop').value=="sl")
{
alert("please select shop ");

va=false;
}
else if(document.getElementById('shop').value=="other")
{

 if(document.getElementById('shop1').value=="")
{
alert("please enter the shop ");

va=false;
}
}
else
{
va=true;
}
return va;
}
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top" class="body_bg"><table width="780" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" align="center" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top" class="header-image"></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" align="left" valign="top"><img src="images/menu_left.gif" alt="" width="1" height="34" /></td>
                          <td align="left" valign="top" class="menu_bg"><table width="350" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                               
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="32" align="center" valign="middle">&nbsp;</td>
                                <td width="33" align="center" valign="middle">&nbsp;</td>
                              </tr>
                          </table></td>
                          <td width="120" align="left" valign="top"><a href="signout.php" style="text-decoration:none"><img src="images/menu_right.gif" alt="" width="120" height="34" border="0" /></a></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="758" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="top" class="main_table"><table width="756" border="0" cellpadding="0" cellspacing="0" class="inside_table">
              <tr>
                <td align="left" valign="top"><table width="756" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" class="body_padding"><table width="736" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="180" align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="left" valign="top"><table width="180" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="left" valign="top"><img src="images/menu_top.gif" alt="" width="180" height="5" /></td>
                                    </tr>
                                    <tr>
                                      <td align="left" valign="middle" class="menu_title_bg"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td height="1" align="left" valign="top"><img src="images/spacer.gif" alt="" width="1" height="1" /></td>
                                          </tr>
                                          
                                      </table></td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    
                                    
                                    <td align="left" valign="middle" class="left_menu_bg"><a href="one2.php" class="left_menu_link">Insert Shop details</a></td>
                                    </tr>
                                   <!-- <tr>
                                    
                                    
                                    
                                    
                                    
                                      <td align="left" valign="middle" class="left_menu_bg"><a href="home.php" class="left_menu_link"></a></td>
                                    </tr>-->
                                    <tr>
                                      <td align="left" valign="top" class="left_menu_bg"><a href="reviewdetails.php" class="left_menu_link" >Review Shop Details </a></td>
                                    </tr>
                                    <tr>
                                    
                                    
                                    
                                    
                                    <td align="left" valign="top" class="left_menu_bg"><a href="tracking.php" class="left_menu_link" >Tracking</a></td>
                                    </tr>
                                    
                                    
                                    
                                   
                                     
                                     
                          </table></td>
                              <tr>
                                <td align="left" valign="top">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="center" valign="top"><a href="#download.html"></a></td>
                              </tr>
                          </table></td>
                          <td width="10" align="left" valign="top">&nbsp;</td>
                          <td align="left" valign="top">
                          
                          <div  style=" border:#000000; width:550px;  height:290px; overflow:auto">
                         <form id="form1" name="form1" method="post" action="one.php"  onsubmit="return validate()">
                      <table width="544" border="0" height="174" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="97" height="13">Shop Name</td>
                      <td width="345">
                            <label>
                              <input type="text" name="product" id="product" />
                              </label>
                   
                          </td>
                          <td width="289">&nbsp;</td>
                        </tr>
                        
                       
						 <tr>
                          <td>Address</td>
                          <td><label>
                            <textarea name="description" id="description" cols="45" rows="5"></textarea>
                          </label></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Location</td>
                          <td><input type="text" name="location" id="location" /></td>
                          <td>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Shop Type</td>
                         <td><select name="shop" id="shop" onchange="show(this.value)" >
                         <option value="sl">select-from-list</option>
                        
                      <?php 
					  include("connection.php");
					  $re="select distinct shoptype from shop";
					  $reww=mysql_query($re);
					  while($row=mysql_fetch_array($reww))
					  {
					  ?><option value="<?php echo $row['shoptype'];?> "><?php echo $row['shoptype'];?></option><?php }?>
                      <option value="other">others</option>
                      </select>
                      <br/>
                      <br/>
                     <span id="te" style="display:none"> <input type="text" name="shop1" id="shop1" /></span> 
                      </td></tr>
                  
                       
                      
                      
                       
                        <tr>
                          <td>
                            <label>
                              <input type="submit" name="button" id="button" value="Submit" />
                              </label>
                          <!--</form>-->
                          </td>
                        </tr>
                      </table>  </form>  
</div>
</td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22" align="left" valign="top"><img src="images/footer_left.gif" alt="" width="22" height="29" /></td>
            <td align="left" valign="middle" bgcolor="#505050" style="border-top:1px solid #CC0000; padding-left:12px;"><br /></td>
            <!--
We request you retain the full web design copyright notice below including the link to http://www.sarkis-webdesign.com
This not only gives respect to the large amount of time given freely by the designer but also helps build interest, traffic and use of template. If you cannot (for good reason) retain the full design copyright we request you at least leave in place the image Web designer - Sarkis, with linked to http://www.sarkis-webdesign.com. Good luck!

Web designer Sarkis
// -->
            <td width="156" align="left" valign="top"><a href="http://www.sarkis-webdesign.com" title="Website Design" target="_blank"><img src="images/website-design.gif" alt="Website Design" width="156" height="29" border="0" /></a></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>