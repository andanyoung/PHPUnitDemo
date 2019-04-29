

## Introduction

单元测试是几个现代敏捷开发方法的基础，使得PHPUnit成为许多大型PHP项目的关键工具。这个工具也可以被Xdebug扩展用来生成代码覆盖率报告 ，并且可以与phing集成来自动测试，最后它还可以和Selenium整合来完成大型的自动化集成测试。
这是对PHPUnit的一个Demo。一步步带你走入PHPUnit。[基础文档](https://blog.csdn.net/agonie201218/article/details/89675236)

## Getting started

```
# clone the project
git clone https://github.com/AndyYoungCN/PHPUnitDemo

# install dependency
composer install

# install phpunit if uninstall
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
mv phpunit.phar /usr/local/bin/phpunit
phpunit -V

cd PHPUnitDemo
phpunit

```
* 运行最终结果    

<img src="https://img-blog.csdnimg.cn/20190429172218569.png?x-oss-process=image/watermark,type_ZmFuZ3poZW5naGVpdGk,shadow_10,text_aHR0cHM6Ly9ibG9nLmNzZG4ubmV0L2Fnb25pZTIwMTIxOA==,size_16,color_FFFFFF,t_70" width="300" hegiht="200" align=center />

  

## 文档引导

[文档引导](https://blog.csdn.net/agonie201218/article/details/89675236)

　　

