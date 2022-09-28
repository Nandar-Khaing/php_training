<?php
$n = 6;
for($i=1;$i<=$n;$i++)
{
    for($j=$i;$j<=$n;$j++)
    {
        echo "&nbsp&nbsp&nbsp";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo "* ";
    }
    for($j=2;$j<=$i;$j++)
    {
        echo "* ";
    }
    echo "<br>";
}
for($i=1;$i<$n;$i++)
{
    for($j=1;$j<=$i+1;$j++)
    {
        echo "&nbsp&nbsp&nbsp";
    }
    for($j=$i;$j<=$n-2;$j++)
    {
        echo "* ";
    }
    for($j=$i;$j<=$n-1;$j++)
    {
        echo "* ";
    }
    echo "<br>";
}
