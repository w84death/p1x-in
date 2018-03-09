#!/bin/bash
echo "-----------------------------"
echo "-- build && publish to stg --"
echo "-----------------------------"
jekyll build && 
cp -r -v _site/* ~/Sync/rpi-servers/vhosts/stg.p1x.in/
echo "-----------------------------"
echo "--         all done        --"
echo "-----------------------------"
