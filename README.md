ThinkPHP 学习
===============

[![Total Downloads](https://poser.pugx.org/topthink/think/downloads)](https://packagist.org/packages/topthink/think)
[![Latest Stable Version](https://poser.pugx.org/topthink/think/v/stable)](https://packagist.org/packages/topthink/think)
[![Latest Unstable Version](https://poser.pugx.org/topthink/think/v/unstable)](https://packagist.org/packages/topthink/think)
[![License](https://poser.pugx.org/topthink/think/license)](https://packagist.org/packages/topthink/think)




git remote rm origin
git remote add origin git@github.com:snakesen/hey.git
git remote add origin git@gitee.com:snakesen/hey.git
vi .git/config

git push -u origin master


>方法一
$ git fetch origin master //从远程的origin仓库的master分支下载代码到本地的origin master

$ git log -p master.. origin/master//比较本地的仓库和远程参考的区别

$ git merge origin/master//把远程下载下来的代码合并到本地仓库，远程的和本地的合并

>方法二
$ git fetch origin master:temp //从远程的origin仓库的master分支下载到本地并新建一个分支temp

$ git diff temp//比较master分支和temp分支的不同

$ git merge temp//合并temp分支到master分支

$ git branch -d temp//删除temp