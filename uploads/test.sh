#!/bin/bash
$1 

echo $1
#create folder
mkdir $1 
cd $1
# create file 
echo "test" >>$1.txt