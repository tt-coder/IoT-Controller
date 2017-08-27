# IoT-Controller

Home Device Controller

自分用メモ

### Login

```
ssh pi@192.168.xxx.xx
```

### Location

```
cd /var/www/html
```

### Maintenance

```
sudo apt-get update
sudo apt-get upgrade
```

```
sudo raspi-config
```

### Install HUBOT

Reference

http://seiya-orz.hatenablog.com/entry/2016/06/25/214014
http://jun8man.hatenablog.com/entry/2016/09/25/004851

```
sudo apt-get install npm
sudo npm install -g npm
sudo npm install -g n
sudo n stable
sudo npm install -g yo generator-hubot coffee-script
```

```
mkdir mybot
cd mybot
yo hubot
(For slack -> Bot adapter slack)
```

### Set Up

```
passwd
sudo raspi-config
```

pyenv
```
sudo apt-get install git gcc make openssl libssl-dev libbz2-dev libreadline-dev libsqlite3-dev

```

emacs
```
sudo apt-get install emacs

```