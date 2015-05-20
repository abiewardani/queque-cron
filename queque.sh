#!/bin/bash
php 1.php
php 2.php

DATEEXECUTION=20
NOW=$(date +"%d")

if [ "$NOW" == "$DATEEXECUTION" ]; then
	php 3.php
else
	echo "ACCESS DENIED!"
fi
