#!/bin/bash
cd /www/wwwroot/blog.nekoo.xyz
git add -A
git commit -m "backup"
ssh-add /root/github
git push -u origin master



