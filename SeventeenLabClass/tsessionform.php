<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration</h1>
    <p><?php echo isset($_COOKIE['draft_time']) ? $_COOKIE['draft_time'] : ""; ?></p>
    <form  action="tsession.php" method="POST">
        <table>
        <tr>
            <td>
                
                <fieldset>
                    <legend>General Information</legend>
                    
                        <table>
                            <tr>
                                <th>First Name </th>
                                <td><span>:</span><input type="text" name="field1" value="<?php echo isset($_COOKIE['field1']) ? $_COOKIE['field1'] : ""; ?>">
                                <span>
			                    <?php echo isset($_SESSION['u1']) ? $_SESSION['u1'] : ""; ?>
		                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Last Name </th>
                                <td><span>:</span><input type="text" name="field2" value="<?php echo isset($_COOKIE['field2']) ? $_COOKIE['field2'] : ""; ?>">
                                <span>
			                    <?php echo isset($_SESSION['u2']) ? $_SESSION['u2'] : ""; ?>
		                        </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Gender </th>
                                <td>
                                    <span>:</span>

                                    <input type="radio" name="field3" value="Male"
                                    <?php if (isset($_COOKIE['field3']) && $_COOKIE['field3']=="Male") echo "checked"; ?>>
                                    <span>Male</span>

                                    <input type="radio" name="field3" value="Female"
                                    <?php if (isset($_COOKIE['field3']) && $_COOKIE['field3']=="Female") echo "checked"; ?>>
                                    <span>Female</span>

                                    <span><?php echo isset($_SESSION['u3']) ? $_SESSION['u3'] : ""; ?></span>
                                </td>
                            </tr>


                            <tr>
                                <th>Father's Name </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field4" value="<?php echo isset($_COOKIE['field4']) ? $_COOKIE['field4'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u4']) ? $_SESSION['u4'] : ''; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <th>Mother's Name </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field5" value="<?php echo isset($_COOKIE['field5']) ? $_COOKIE['field5'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u5']) ? $_SESSION['u5'] : ''; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th>Blood Group</th>
                                <td>
                                    <span>:</span>
                                    <select name="field6">
                                        <option value="">Select</option>
                                        <option  value="A+" <?php if(isset($_COOKIE['field6']) && $_COOKIE['field6']=="A+") echo "selected"; ?>>A+</option>
                                        <option  value="O+" <?php if(isset($_COOKIE['field6']) && $_COOKIE['field6']=="O+") echo "selected"; ?>>O+</option>
                                    </select>

                                    <span><?php echo isset($_SESSION['u6']) ? $_SESSION['u6'] : ""; ?></span>
                                </td>
                                
                            </tr>
                            


                            <tr>
                                <th>Religion </th>
                                <td>
                                    <span>:</span>
                                    <select name="field7">
                                        <option value="">Select</option>
                                        <option value="Islam" <?php if (isset($_COOKIE['field7']) && $_COOKIE['field7']=="Islam") echo "selected"; ?>>Islam</option>
                                        <option value="Hindu" <?php if (isset($_COOKIE['field7']) && $_COOKIE['field7']=="Hindu") echo "selected"; ?>>Hindu</option>
                                    </select>
                                    <span><?php echo isset($_SESSION['u7']) ? $_SESSION['u7'] : ""; ?></span>
                                </td>
                            </tr>
                        </table>

                    
                    
                </fieldset>
            </td>
            <td>
                
                <fieldset>
                    <legend>Contact Information</legend>
                    
                        <table>
                            <tr>
                                <th>Email </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field8" value="<?php echo isset($_COOKIE['field8']) ? $_COOKIE['field8'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u8']) ? $_SESSION['u8'] : ''; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <th>Phone/Mobile </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field9" value="<?php echo isset($_COOKIE['field9']) ? $_COOKIE['field9'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u9']) ? $_SESSION['u9'] : ''; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <th>Website </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field10" value="<?php echo isset($_COOKIE['field10']) ? $_COOKIE['field10'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u10']) ? $_SESSION['u10'] : ''; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <th>Address :</th>
                                <td>
                                    
                                    <fieldset>
                                        <legend>Present Address</legend>
                                        <select name="field11">
                                            <option value="">Select</option>
                                            <option value="Bangladesh" <?php if (isset($_COOKIE['field11']) && $_COOKIE['field11']=="Bangladesh") echo "selected"; ?>>Bangladesh</option>
                                            <option value="India" <?php if (isset($_COOKIE['field11']) && $_COOKIE['field11']=="India") echo "selected"; ?>>India</option>
                                        </select>
                                        <span><?php echo isset($_SESSION['u11']) ? $_SESSION['u11'] : ""; ?></span>
                                        <select name="field12">
                                            <option value="">Select</option>
                                            <option value="Dhaka" <?php if (isset($_COOKIE['field12']) && $_COOKIE['field12']=="Dhaka") echo "selected"; ?>>Dhaka</option>
                                            <option value="Chittagong" <?php if (isset($_COOKIE['field12']) && $_COOKIE['field12']=="Chittagong") echo "selected"; ?>>Chittagong</option>
                                        </select>
                                        <span><?php echo isset($_SESSION['u12']) ? $_SESSION['u12'] : ""; ?></span>
                                        <br><br>
                                        <textarea name="road" id="" placeholder="Road/Street/city"></textarea>
                                        <br>
                                        <input type="text" placeholder="Post Code" name="postcode">
                                    </fieldset>
                                </td>
                            </tr>
                        </table>

                    
                    
                </fieldset>
            </td>
            <td>
                
                <fieldset>
                    <legend>Account Information</legend>
                    
                        <table>
                            <tr>
                                <th>Username </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field15" value="<?php echo isset($_COOKIE['field15']) ? $_COOKIE['field15'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u15']) ? $_SESSION['u15'] : ''; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <th>Password </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field16" value="<?php echo isset($_COOKIE['field16']) ? $_COOKIE['field16'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u16']) ? $_SESSION['u16'] : ''; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <th>Confirm Password </th>
                                <td>
                                    <span>:</span>
                                    <input type="text" name="field17" value="<?php echo isset($_COOKIE['field17']) ? $_COOKIE['field17'] : ''; ?>">
                                    <span><?php echo isset($_SESSION['u17']) ? $_SESSION['u17'] : ''; ?></span>
                                </td>
                            </tr>
                            
                        </table>

                    
                </fieldset> 
            </td>
        </tr>
    </table>
    <input type="submit" name="register" value="Register">
    <input type="submit" name="save" value="Save as Draft">
    </form>
    

</body>
</html>