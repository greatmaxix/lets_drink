==================================================
TEST ID:        1
TEST SCENARIO:  Register with valid data
TEST STEPS:     Go to the register.php page => click on Register button => enter test data => click Sign Up
TEST DATA:      USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
                PASSWORD CONF : 123456
EXPECTED RESULT:Rediract to index.html main page  
ACTUAL RESULT:  Popup window notified tester that they were successfully registered
PASS/FAIL:      Pass 
==================================================
TEST ID:        2
TEST SCENARIO:  Try to register a duplicate user
TEST STEPS:     Go to register.php => click Register => enter invalid data
TEST DATA:      USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
EXPECTED RESULT:Popup window notifies user that user with this name already exists  
ACTUAL RESULT:  Popup window notified tester that user with this name already exists 
PASS/FAIL:      Pass
==================================================
TEST ID:        3
TEST SCENARIO:  Try to login with invalid username
TEST STEPS:     Go to index.php => enter invalid data
TEST DATA:      USERNAME: XXXXXX
                EMAIL   : email@example.com
                PASSWORD: 123456
EXPECTED RESULT:Popup window with the message "Usename already exists"  
ACTUAL RESULT:  Popup window with the message "Password already exists" 
PASS/FAIL:      Pass
==================================================
