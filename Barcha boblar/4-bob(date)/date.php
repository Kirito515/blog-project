<?php

////////////////////////////////////! date & time /////////////////////////////

/* 
d - Represents the day of the month (01 to 31)
m - Represents a month (01 to 12)
Y - Represents a year (in four digits)
l (lowercase 'L') - Represents the day of the week

Other characters, like"/", ".", or "-" can also be inserted between the characters to add additional formatting.
*/

echo "Todey: " . date("Y.m.d - l") . "<br>";


/*
H - 24-hour format of an hour (00 to 23)
h - 12-hour format of an hour with leading zeros (01 to 12)
i - Minutes with leading zeros (00 to 59)
s - Seconds with leading zeros (00 to 59)
a - Lowercase Ante meridiem and Post meridiem (am or pm)
*/

echo date("Y/m/d H:s:i");