#!/bin/bash
echo "-----------------------------"
echo "-- publish to production!! --"
echo "-----------------------------" 
cp -r -v ~/Sync/rpi-servers/vhosts/stg.p1x.in/* ~/Sync/rpi-servers/vhosts/p1x.in/ 
echo "-----------------------------"
echo "--         all done        --"
echo "-----------------------------"
