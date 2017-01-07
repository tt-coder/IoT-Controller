#include <stdio.h>
#include <wiringPi.h>

/*
*コメント 2017.1.7
*サーボを制御してリモコンのボタンを押す
*/

int main(void){
  if(wiringPiSetupGpio() == -1) return 1;
  
  pinMode(18, PWM_OUTPUT);
  pwmSetMode(PWM_MODE_MS);
  pwmSetClock(400);
  pwmSetRange(1024);
  //pwmWrite(18, 50);
  pwmWrite(18, 60);
  delay(500);
  pwmWrite(18, 50);
  return 0;
}
