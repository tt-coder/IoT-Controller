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
git clone git://github.com/yyuu/pyenv.git ~/.pyenv
emacs .bashrc
export PYENV_ROOT="$HOME/.pyenv"
export PATH="$PYENV_ROOT/bin:$PATH"
eval "$(pyenv init -)"
source .bashrc
pyenv
pyenv install --list
pyenv install 3.X.X
pyenv versions
pyenv global 3.X.X
```

Python Library
```
pip install rpi.gpio
```

emacs
```
sudo apt-get install emacs
emacs .emacs
(setq make-backup-files nil)
(setq auto-save-default nil)
``` 

Apache
```
sudo apt-get install apache2
ls /etc/rc2.d/ # For check auto Apache start
```

HomeBridge
```
sudo emacs /boot/cmdline.txt
ipv6.disable=1
sudo reboot now
sudo apt-get update
sudo apt-get upgrade
curl -sL https://deb.nodesource.com/setup_8.x | sudo -E bash -
sudo apt-get install -y nodejs
sudo apt-get install libavahi-compat-libdnssd-dev
sudo npm install -g --unsafe-perm homebridge
homebridge # For test
sudo npm install -g homebridge-dummy
mkdir .homebridge
emacs .homebridge/config.json
```

config.json
```
{
    "bridge": {
	"name": "Homebridge",
	"username": "CC:22:3D:E3:CE:30",
	"port": 51826,
	"pin": "031-45-154"
    },

    "description": "dummy",

    "accessories": [
		{
	            "accessory": "DummySwitch",
                    "name": "車庫"
		}
    ]
}
```

MJPEG-streamer
```
sudo apt-get install subversion libjpeg-dev imagemagick
svn co https://svn.code.sf.net/p/mjpg-streamer/code/mjpg-streamer mjpg-streamer
cd mjpg-streamer
make
lsusb
./mjpg_streamer -i "./input_uvc.so -d /dev/video0 -r 1280x720 -f 10 -y -n" -o "./output_http.so -w ./www -p 8080"
```